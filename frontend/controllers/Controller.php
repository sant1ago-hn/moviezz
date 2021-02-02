<?php

class Controller {
    public $content;
    public $error;

    public function render($file, $variables = []): string {
        extract($variables);
        ob_start();
        require_once $file;
        return ob_get_clean();
    }
}