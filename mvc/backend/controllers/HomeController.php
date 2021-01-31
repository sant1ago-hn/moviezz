<?php
require_once 'controllers/Controller.php';
require_once 'models/Category.php';

class HomeController extends Controller {
    public function index() {
        $category_model = new Category();
        $categories = $category_model->getAll();

        $this->content = $this->render('views/homes/index.php', [
          'categories' => $categories
        ]);

        $this->page_title = 'KaoFlix Admin Dashboard';
        $this->home_tab = 'sidebar__nav-link--active';
        require_once 'views/layouts/main.php';
    }
}