<?php

class Controller
{


    public $content;
    public $error;

    public function render($file, $variables = []) {
        extract($variables);
        ob_start();
        require_once $file;
        $render_view = ob_get_clean();
        return $render_view;
    }
}