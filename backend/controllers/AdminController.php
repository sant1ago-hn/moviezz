<?php /** @noinspection DuplicatedCode */
require_once 'controllers/Controller.php';
require_once 'models/Admin.php';
require_once 'models/Pagination.php';

class AdminController extends Controller {
    public function index() {
        $admin_model = new Admin();
        $page = isset($_GET['page']) ? $_GET['page'] : 1;
        $total = $admin_model->getTotal();
        $query_additional = '';
        if (isset($_GET['username'])) {
            $query_additional .= "&username=" . $_GET['username'];
        }
        $params = [
            'total' => $total,
            'limit' => 5,
            'query_string' => 'page',
            'controller' => 'admin',
            'action' => 'index',
            'page' => $page,
            'query_additional' => $query_additional
        ];
        $pagination = new Pagination($params);
        $pages = $pagination->getPagination();
        $admins = $admin_model->getAllPagination($params);

        $this->content = $this->render('views/admins/index.php', [
            'admins' => $admins,
            'pages' => $pages,
        ]);

        require_once 'views/layouts/main.php';
    }

    public function create() {
        $admin_model = new Admin();
        if (isset($_POST['submit'])) {
            $username = $_POST['username'];
            $password = $_POST['password'];
            $password_confirm = $_POST['password_confirm'];
            $fullname = $_POST['fullname'];
            $email = $_POST['email'];
            $facebook = $_POST['facebook'];
            $status = $_POST['status'];
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
            } else if ($_FILES['avatar']['error'] == 0) {
                $extension = pathinfo($_FILES['avatar']['fullname'], PATHINFO_EXTENSION);
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
                $count_admin = $admin_model->getUserByUsername($username);
                if ($count_admin) {
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

                    $filename = time() . '-admin-' . $_FILES['avatar']['fullname'];
                    move_uploaded_file($_FILES['avatar']['tmp_name'], $dir_uploads . '/' . $filename);
                }
                $admin_model->username = $username;
                $admin_model->password = md5($password);
                $admin_model->fullname = $fullname;
                $admin_model->email = $email;
                $admin_model->avatar = $filename;
                $admin_model->facebook = $facebook;
                $admin_model->status = $status;
                $is_insert = $admin_model->insert();
                if ($is_insert) {
                    $_SESSION['success'] = 'Insert successful';
                } else {
                    $_SESSION['error'] = 'Insert failed';
                }
                header('Location: index.php?controller=admin');
                exit();
            }
        }

        $this->content = $this->render('views/admins/create.php');

        require_once 'views/layouts/main.php';
    }

    public function update() {
        if (!isset($_GET['id']) || !is_numeric($_GET['id'])) {
            header("Location: index.php?controller=admin");
            exit();
        }

        $id = $_GET['id'];
        $admin_model = new Admin();
        $admin = $admin_model->getById($id);
        if (isset($_POST['submit'])) {

            $fullname = $_POST['fullname'];
            $email = $_POST['email'];
            $address = $_POST['address'];
            $facebook = $_POST['facebook'];
            $status = $_POST['status'];
            if (!empty($email) && !filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $this->error = 'Email is not valid';
            } else if (!empty($facebook) && !filter_var($facebook, FILTER_VALIDATE_URL)) {
                $this->error = 'Facebook link is not valid';
            } else if ($_FILES['avatar']['error'] == 0) {
                $extension = pathinfo($_FILES['avatar']['fullname'], PATHINFO_EXTENSION);
                $extension = strtolower($extension);
                $allow_extensions = ['png', 'jpg', 'jpeg', 'gif'];
                $file_size_mb = $_FILES['avatar']['size'] / 1024 / 1024;
                $file_size_mb = round($file_size_mb, 2);
                if (!in_array($extension, $allow_extensions)) {
                    $this->error = 'Avatar must be picture';
                } else if ($file_size_mb > 2) {
                    $this->error = 'File too large, no more than 2MB';
                }
            }

            if (empty($this->error)) {
                $filename = $admin['avatar'];
                if ($_FILES['avatar']['error'] == 0) {
                    $dir_uploads = __DIR__ . '/../assets/uploads';
                    @unlink($dir_uploads . '/' . $filename);
                    if (!file_exists($dir_uploads)) {
                        mkdir($dir_uploads);
                    }

                    $filename = time() . '-admin-' . $_FILES['avatar']['fullname'];
                    move_uploaded_file($_FILES['avatar']['tmp_name'], $dir_uploads . '/' . $filename);
                }
                $admin_model->fullname = $fullname;
                $admin_model->address = $address;
                $admin_model->email = $email;
                $admin_model->avatar = $filename;
                $admin_model->facebook = $facebook;
                $admin_model->status = $status;
                $is_update = $admin_model->update($id);
                if ($is_update) {
                    $_SESSION['success'] = 'Update successful';
                } else {
                    $_SESSION['error'] = 'Update failed';
                }
                header('Location: index.php?controller=admin');
                exit();
            }
        }

        $this->content = $this->render('views/admins/update.php', [
            'admin' => $admin
        ]);

        require_once 'views/layouts/main.php';
    }

    public function delete() {
        if (!isset($_GET['id']) || !is_numeric($_GET['id'])) {
            $_SESSION['error'] = 'ID is not valid';
            header('Location: index.php?controller=admin');
            exit();
        }

        $id = $_GET['id'];
        $admin_model = new Admin();
        $is_delete = $admin_model->delete($id);
        if ($is_delete) {
            $_SESSION['success'] = 'Deletion completed';
        } else {
            $_SESSION['error'] = 'Deletion failed';
        }
        header('Location: index.php?controller=admin');
        exit();
    }

    public function detail() {
        if (!isset($_GET['id']) || !is_numeric($_GET['id'])) {
            header("Location: index.php?controller=admin");
            exit();
        }
        $id = $_GET['id'];
        $admin_model = new Admin();
        $admin = $admin_model->getById($id);

        $this->content = $this->render('views/admins/detail.php', [
            'admin' => $admin
        ]);

        require_once 'views/layouts/main.php';
    }

    public function logout() {
        $_SESSION = [];
        session_destroy();
        header('Location: log-in');
        exit();
    }
}