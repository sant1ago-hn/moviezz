<?php
require_once 'controllers/Controller.php';
require_once 'models/User.php';
require_once 'models/Pagination.php';

class UserController extends Controller {
    public function index() {
        $user_model = new User();
        $page = isset($_GET['page']) ? $_GET['page'] : 1;
        $total = $user_model->getTotal();
        $query_additional = '';
        if (isset($_GET['username'])) {
            $query_additional .= "&username=" . $_GET['username'];
        }
        $params = [
            'total' => $total,
            'limit' => 5,
            'query_string' => 'page',
            'controller' => 'user',
            'action' => 'index',
            'page' => $page,
            'query_additional' => $query_additional
        ];
        $pagination = new Pagination($params);
        $pages = $pagination->getPagination();
        $users = $user_model->getAllPagination($params);

        $this->content = $this->render('views/users/index.php', [
            'users' => $users,
            'pages' => $pages,
        ]);

        $this->page_title = 'Profile';

        require_once 'views/layouts/main.php';
    }

    public function update() {
        if (!isset($_GET['id']) || !is_numeric($_GET['id'])) {
            header("Location: index.php?controller=user");
            exit();
        } else {
            $id = $_GET['id'];
            $user_model = new User();
            $user = $user_model->getById($id);
            if (isset($_POST['submit'])) {

                $fullname = $_POST['fullname'];
                $phone = $_POST['phone'];
                $email = $_POST['email'];
                if (!empty($email) && !filter_var($email, FILTER_VALIDATE_EMAIL)) {
                    $this->error = 'Email is not valid';
                }

                if (empty($this->error)) {
                    $user_model->fullname = $fullname;
                    $user_model->phone = $phone;
                    $user_model->email = $email;
                    $is_update = $user_model->update($id);
                    if ($is_update) {
                        $_SESSION['success'] = 'Update successful';
                    } else {
                        $_SESSION['error'] = 'Update failed';
                    }
                    header('Location: index.php?controller=user');
                    exit();
                }
            }
            $this->content = $this->render('views/users/update.php', [
                'user' => $user
            ]);

            $this->page_title = "Profile setting | " . (isset($user['fullname']) && !empty($user['fullname']) ? $user['fullname'] : $user['username']);
        }
        require_once 'views/layouts/main.php';
    }

    public function register() {
        $user_model = new User();
        if (isset($_POST['submit'])) {
            $username = $_POST['username'];
            $password = $_POST['password'];
            $password_confirm = $_POST['password_confirm'];
            $fullname = $_POST['fullname'];
            $phone = $_POST['phone'];
            $email = $_POST['email'];
            $address = $_POST['address'];
            $facebook = $_POST['facebook'];
            if (empty($username)) {
                $this->error = 'Username could not be empty';
            } else if (empty($password)) {
                $this->error = 'Password could not be empty';
            } else if (empty($password_confirm)) {
                $this->error = 'Password confirm could not be empty';
            } else if ($password != $password_confirm) {
                $this->error = 'Password confirm incorrect';
            } else if (!empty($email) && !filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $this->error = 'Email is not valid';
            } else if (!empty($facebook) && !filter_var($facebook, FILTER_VALIDATE_URL)) {
                $this->error = 'Facebook`s link is not valid';
            } else if (isset($_FILES['avatar']) && $_FILES['avatar']['error'] == 0) {
                $extension = pathinfo($_FILES['avatar']['name'], PATHINFO_EXTENSION);
                $extension = strtolower($extension);
                $allow_extensions = ['png', 'jpg', 'jpeg', 'gif'];
                $file_size_mb = $_FILES['avatar']['size'] / 1024 / 1024;
                $file_size_mb = round($file_size_mb, 2);
                if (!in_array($extension, $allow_extensions)) {
                    $this->error = 'Avatar must be picture';
                } else if ($file_size_mb > 2) {
                    $this->error = 'File too large, no more than 2MB';
                }
            } else if (!empty($username)) {
                $count_user = $user_model->getUserByUsername($username);
                if ($count_user) {
                    $this->error = 'Username not available';
                }
            }

            if (empty($this->error)) {
                $filename = '';
                if ($_FILES['avatar']['error'] == 0) {
                    $dir_uploads = __DIR__ . '/../assets/uploads';
                    if (!file_exists($dir_uploads)) {
                        mkdir($dir_uploads);
                    }

                    $filename = time() . '-user-' . $_FILES['avatar']['name'];
                    move_uploaded_file($_FILES['avatar']['tmp_name'], $dir_uploads . '/' . $filename);
                }
                $user_model->username = $username;
                $user_model->password = md5($password);
                $user_model->fullname = $fullname;
                $user_model->phone = $phone;
                $user_model->address = $address;
                $user_model->email = $email;
                $user_model->avatar = $filename;
                $user_model->facebook = $facebook;
                $is_insert = $user_model->insert();
                if ($is_insert) {
                    $_SESSION['success'] = 'Sign up successful';
                } else {
                    $_SESSION['error'] = 'Sign up failed';
                }
                header('Location: index.php');
                exit();
            }
        }

        $this->content = $this->render('views/users/register.php');

        require_once 'views/layouts/main.php';
    }

    public function delete() {
        if (!isset($_GET['id']) || !is_numeric($_GET['id'])) {
            $_SESSION['error'] = 'ID is not valid';
            header('Location: index.php?controller=user');
            exit();
        }

        $id = $_GET['id'];
        $user_model = new User();
        $is_delete = $user_model->delete($id);
        if ($is_delete) {
            $_SESSION['success'] = 'Deletion completed';
        } else {
            $_SESSION['error'] = 'Deletion failed';
        }
        header('Location: index.php?controller=user');
        exit();
    }

    public function detail() {
        if (!isset($_GET['id']) || !is_numeric($_GET['id'])) {
            header("Location: index.php?controller=user");
            exit();
        }
        $id = $_GET['id'];
        $user_model = new User();
        $user = $user_model->getById($id);

        $this->content = $this->render('views/users/detail.php', [
            'user' => $user
        ]);

        require_once 'views/layouts/main.php';
    }

    public function logout() {

        $_SESSION = [];
        session_destroy();
        unset($_SESSION['user']);
        setcookie('username', null, time() - 86400);
        setcookie('password', null, time() - 86400);
        header('Location: index.php');
        exit();
    }
}