<?php
require_once 'controllers/Controller.php';
require_once 'models/Category.php';
require_once 'models/Pagination.php';

class CategoryController extends Controller {
    public function index() {
        $category_model = new Category();
        $params = [
            'limit' => 10,
            'query_string' => 'page',
            'controller' => 'category',
            'action' => 'index',
            'full_mode' => FALSE,
        ];
        $page = 1;
        if (isset($_GET['page'])) {
            $page = $_GET['page'];
        }
        if (isset($_GET['name'])) {
            $params['query_additional'] = '&name=' . $_GET['name'];
        }

        $count_total = $category_model->countTotal();
        $params['total'] = $count_total;
        $params['page'] = $page;

        $pagination = new Pagination($params);
        $pages = $pagination->getPagination();
        $categories = $category_model->getAllPagination($params);

        $this->content = $this->render('views/categories/index.php', [
            'categories' => $categories,
            'pages' => $pages,
        ]);
        $this->page_title = 'Categories Manager';
        $this->category_nav_index = 'active';
        $this->category_nav_active = 'show';
        $this->category_tab = 'sidebar__nav-link--active';

        require_once 'views/layouts/main.php';
    }

    public function create() {
        if (isset($_POST['submit'])) {
            $name = $_POST['name'];
            $status = $_POST['status'];

            if (empty($name)) {
                $this->error = 'Enter a name';
            }

            if (empty($this->error)) {
                $category_model = new Category();
                $category_model->name = $name;
                $category_model->status = $status;
                $is_insert = $category_model->insert();
                if ($is_insert) {
                    $_SESSION['success'] = 'Add successfully';
                } else {
                    $_SESSION['error'] = 'Add failed';
                }
                header('Location: index.php?controller=category&action=index');
                exit();
            }
        }

    $this->content = $this->render('views/categories/create.php');
    $this->page_title = 'Add New Category';
    $this->category_nav_create = 'active';
    $this->category_nav_active = 'show';
    $this->category_tab = 'sidebar__nav-link--active';
    require_once 'views/layouts/main.php';
    }

    public function update() {
        if (!isset($_GET['id']) || !is_numeric($_GET['id'])) {
            $_SESSION['error'] = 'ID category is not valid';
            header('Location: index.php?controller=category&action=index');
            exit();
        }

        $id = $_GET['id'];
        $category_model = new Category();
        $category = $category_model->getCategoryById($id);
        if (isset($_POST['submit'])) {
          $name = $_POST['name'];
          $description = $_POST['description'];
          $status = $_POST['status'];

          if (empty($name)) {
            $this->error = 'fill the name';
          }

          if (empty($this->error)) {

            $category_model = new Category();
            $category_model->name = $name;
            $category_model->status = $status;
            $category_model->updated_at = date('Y-m-d H:i:s');
            $is_update = $category_model->update($id);
            if ($is_update) {
              $_SESSION['success'] = 'Update successfully';
            } else {
              $_SESSION['error'] = 'Update failed';
            }
            header('Location: index.php?controller=category&action=index');
            exit();
          }

        }

        $this->content = $this->render('views/categories/update.php', ['category' => $category]);
        $this->page_title = 'Edit Category';
        require_once 'views/layouts/main.php';
  }

    public function delete() {
    if (!isset($_GET['id']) || !is_numeric($_GET['id'])) {
      $_SESSION['error'] = 'ID is not valid';
      header('Location: index.php?controller=category&action=index');
      exit();
    }
    $id = $_GET['id'];
    $category_model = new Category();
    $is_delete = $category_model->delete($id);
    if ($is_delete) {
      $_SESSION['success'] = 'Delete completed';
    } else {
      $_SESSION['error'] = 'Delete failed';
    }
    header('Location: index.php?controller=category&action=index');
    exit();
  }

    public function detail() {
    if (!isset($_GET['id']) || !is_numeric($_GET['id'])) {
      $_SESSION['error'] = 'ID is not valid';
      header('Location: index.php?controller=category&action=index');
      exit();
    }
    $id = $_GET['id'];
    $category_model = new Category();
    $category = $category_model->getCategoryById($id);
    $this->content = $this->render('views/categories/detail.php', [
      'category' => $category
    ]);

      $this->page_title = 'Category Detail';
    require_once 'views/layouts/main.php';

  }
}
