<?php
require_once 'controllers/Controller.php';
require_once 'models/Movie.php';
require_once 'models/Category.php';
require_once 'models/Pagination.php';

class MovieController extends Controller {
    public function showAll() {
        $params = [];
        if (isset($_POST['filter'])) {
            if (isset($_POST['category'])) {
                $category = implode(',', $_POST['category']);
                $str_category_id = "($category)";
                $params['category'] = $str_category_id;
            }
        }

        $params_pagination = [
            'total' => 5,
            'limit' => 1,
            'full_mode' => FALSE,
        ];
        $pagination_model = new Pagination($params_pagination);
        $pagination = $pagination_model->getPagination();
        $Movie_model = new Movie();
        $movies = $Movie_model->getMovieInHomePage($params);
        $category_model = new Category();
        $categories = $category_model->getAll();

        $this->content = $this->render('views/Movies/show_all.php', [
            'movies' => $movies,
            'categories' => $categories,
            'pagination' => $pagination,
        ]);

        require_once 'views/layouts/main.php';
    }

    public function index() {
        $Movie_model = new Movie();
        $count_total = $Movie_model->countTotal();
        $query_additional = '';
        if (isset($_GET['title'])) {
            $query_additional .= '&title=' . $_GET['title'];
        }
        if (isset($_GET['category_id'])) {
            $query_additional .= '&category_id=' . $_GET['category_id'];
        }
        $arr_params = [
            'total' => $count_total,
            'limit' => 5,
            'query_string' => 'page',
            'controller' => 'movie',
            'action' => 'index',
            'full_mode' => false,
            'query_additional' => $query_additional,
            'page' => isset($_GET['page']) ? $_GET['page'] : 1
        ];
        $movies = $Movie_model->getAllPagination($arr_params);
        $pagination = new Pagination($arr_params);

        $pages = $pagination->getPagination();

        $category_model = new Category();
        $categories = $category_model->getAll();

        $this->content = $this->render('views/movies/index.php', [
            'movies' => $movies,
            'categories' => $categories,
            'pages' => $pages,
        ]);
        require_once 'views/layouts/main.php';
    }

    public function detail() {
        if (!isset($_GET['id']) || !is_numeric($_GET['id'])) {
            $_SESSION['error'] = 'ID is not valid';
            $url_redirect = $_SERVER['SCRIPT_NAME'] . '/';
            header("Location: $url_redirect");
            exit();
        }

        $id = $_GET['id'];
        $movie_model = new Movie();
        $movie = $movie_model->getById($id);

        $this->content = $this->render('views/movies/detail.php', [
            'movie' => $movie
        ]);

        $this->page_title = $movie['title'] . " | " . $movie['yeary'];

        require_once 'views/layouts/main.php';
    }
}