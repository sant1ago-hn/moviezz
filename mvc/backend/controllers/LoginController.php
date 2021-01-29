<?php
require_once 'models/Admin.php';

class LoginController {
    public $content;
    public $error;

    public function render($file, $variables = []) {
        extract($variables);
        ob_start();
        require_once $file;
        return ob_get_clean();
    }

    public function login() {
        if (isset($_SESSION['admin'])) {
            header('Location: index.php?controller=category&action=index');
            exit();
        }
        if (isset($_POST['submit'])) {
            $username = $_POST['username'];
            $password = md5($_POST['password']);
            if (empty($username) || empty($password)) {
                $this->error = 'Username or password could not be empty';
            }
            $admin_model = new Admin();
            if (empty($this->error)) {
                $admin = $admin_model->getUserByUsernameAndPassword($username, $password);
                if (empty($admin)) {
                    $this->error = 'Wrong username or password';
                } else {
                    $_SESSION['admin'] = $admin;
                    header("Location: index.php?controller=category&action=index");
                    exit();
                }
            }
        }
        $this->content = $this->render('views/admins/login.php');

        require_once 'views/layouts/main_login.php';
    }

    public function register() {

        if (isset($_POST['submit'])) {
            $admin_model = new Admin();
            $username = $_POST['username'];
            $password = $_POST['password'];
            $password_confirm = $_POST['password_confirm'];
            $admin = $admin_model->getUserByUsername($username);
            if (empty($username) || empty($password) || empty($password_confirm)) {
                $this->error = 'Fields could not be empty';
            } else if ($password != $password_confirm) {
                $this->error = 'Password confirm incorrect';
            } else if (!empty($admin)) {
                $this->error = 'Username is not available';
            }
            if (empty($this->error)) {

                $admin_model->username = $username;
                $admin_model->password = md5($password);
                $admin_model->status = 1;
                $is_insert = $admin_model->insertRegister();
                if ($is_insert) {
                    $_SESSION['success'] = 'Sign up successful';
                } else {
                    $_SESSION['error'] = 'Sign up failed';
                }
                header('Location: index.php?controller=login&action=login');
                exit();
            }
        }

        $this->content = $this->render('views/admins/register.php');
        require_once 'views/layouts/main_login.php';
    }
}