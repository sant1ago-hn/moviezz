<?php

class Controller {
    public function __construct() {
        if (!isset($_SESSION['admin'])) {
            $_SESSION['error'] = 'Sign in to continue';
            header('Location: log-in');
            exit();
        }
    }

    public $content;
    public $error;

    public function render($file, $variables = []) {
        extract($variables);
        ob_start();
        require_once $file;
        return ob_get_clean();
    }
}