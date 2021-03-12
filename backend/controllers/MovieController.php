<?php
require_once 'controllers/Controller.php';
require_once 'models/Movie.php';
require_once 'models/Category.php';
require_once 'models/Pagination.php';

class MovieController extends Controller {
    public function index() {
        $movie_model = new Movie();
        $count_total = $movie_model->countTotal();
        $query_additional = '';
        if (isset($_GET['title'])) {
            $query_additional .= '&title=' . $_GET['title'];
        }
        if (isset($_GET['idcategory'])) {
            $query_additional .= '&idcategory=' . $_GET['idcategory'];
        }
        $params = [
            'total' => $count_total,
            'limit' => 10,
            'query_string' => 'page',
            'controller' => 'movie',
            'action' => 'index',
            'full_mode' => false,
            'query_additional' => $query_additional,
            'page' => isset($_GET['page']) ? $_GET['page'] : 1
        ];
        $movies = $movie_model->getAllPagination($params);
        $pagination = new Pagination($params);

        $pages = $pagination->getPagination();

        $category_model = new Category();
        $categories = $category_model->getAll();

        $this->content = $this->render('views/movies/index.php',
            [
                'movies' => $movies,
                'categories' => $categories,
                'pages' => $pages,
            ]);

        $this->page_title = 'Movie Manager';
        $this->movie_nav_index = 'active';
        $this->movie_nav_active = 'show';
        $this->movie_tab = 'sidebar__nav-link--active';
        require_once 'views/layouts/main.php';
    }

    public function create() {
        if (isset($_POST['submit'])) {
            $idcategory = $_POST['idcategory'];
            $title = $_POST['title'];
            $movie_type = $_POST['movie_type'];
            $lengthm = $_POST['lengthm'];
            $nation = $_POST['nation'];
            $yeary = $_POST['yeary'];
            $episodes = $_POST['episode'];
            $ep_name = $_POST['ep_name'];
            $director = $_POST['director'];
            $description = $_POST['description'];
            $trailer = $_POST['trailer'];
            $link_basic = $_POST['link_basic'];
            $link_premium = $_POST['link_premium'];
            $link_exclusive = $_POST['link_exclusive'];
            $en_sub = $_POST['en_sub'];
            $vie_sub = $_POST['vie_sub'];
            $status = $_POST['status'];
            $image = $_POST['image'];
                if (empty($title)) {
                    $this->error = 'Title could not be empty';
                }

                if (empty($this->error)) {
                $movie_model = new Movie();
                $movie_model->idcategory = $idcategory;
                $movie_model->title = $title;
                $movie_model->image = $image;
                $movie_model->movie_type = $movie_type;
                $movie_model->lengthm = $lengthm;
                $movie_model->nation = $nation;
                $movie_model->yeary = $yeary;
                $movie_model->episodes = $episodes;
                $movie_model->ep_name = $ep_name;
                $movie_model->director = $director;
                $movie_model->description = $description;
                $movie_model->trailer = $trailer;
                $movie_model->link_basic = $link_basic;
                $movie_model->link_premium = $link_premium;
                $movie_model->link_exclusive = $link_exclusive;
                $movie_model->en_sub = $en_sub;
                $movie_model->vie_sub = $vie_sub;
                $movie_model->status = $status;

                $is_insert = $movie_model->insert();
                if ($is_insert) {
                    $_SESSION['success'] = 'Insert successful';
                } else {
                    $_SESSION['error'] = 'Insert failed';
                }
                header('Location: all-movie');
                exit();
                }
        }

        $category_model = new Category();
        $categories = $category_model->getAll();

        $this->content = $this->render('views/movies/create.php', [
            'categories' => $categories
        ]);
        $this->page_title = 'New Movie';
        $this->movie_nav_create = 'active';
        $this->movie_nav_active = 'show';
        $this->movie_tab = 'sidebar__nav-link--active';

        require_once 'views/layouts/main.php';
      }

    public function detail() {
        if (!isset($_GET['id']) || !is_numeric($_GET['id'])) {
            $_SESSION['error'] = 'ID is not valid';
            header('Location: all-movie');
            exit();
        }

        $id = $_GET['id'];
        $movie_model = new Movie();
        $movie = $movie_model->getById($id);

        $this->content = $this->render('views/movies/detail.php', [
            'movie' => $movie
        ]);
        $this->page_title = 'Detail | ' . $movie['title'];
        $this->movie_tab = 'sidebar__nav-link--active';
        $this->movie_nav_active = 'show';
        require_once 'views/layouts/main.php';
    }

    public function update() {
        if (!isset($_GET['id']) || !is_numeric($_GET['id'])) {
            $_SESSION['error'] = 'ID is not valid';
            header('Location: all-movie');
            exit();
        }

    $id = $_GET['id'];
    $movie_model = new Movie();
    $movie = $movie_model->getById($id);
    if (isset($_POST['submit'])) {
        $idcategory = $_POST['idcategory'];
        $title = $_POST['title'];
        $movie_type = $_POST['movie_type'];
        $lengthm = $_POST['lengthm'];
        $nation = $_POST['nation'];
        $yeary = $_POST['yeary'];
        $image = $_POST['image'];
        $episodes = $_POST['episode'];
        $ep_name = $_POST['ep_name'];
        $director = $_POST['director'];
        $description = $_POST['description'];
        $trailer = $_POST['trailer'];
        $link_basic = $_POST['link_basic'];
        $link_premium = $_POST['link_premium'];
        $link_exclusive = $_POST['link_exclusive'];
        $en_sub = $_POST['en_sub'];
        $vie_sub = $_POST['vie_sub'];
        $status = $_POST['status'];
        if (empty($title)) {
            $this->error = 'Please fill the title';
        }

        if (empty($this->error)) {
            $movie_model->idcategory = $idcategory;
            $movie_model->title = $title;
            $movie_model->image = $image;
            $movie_model->movie_type = $movie_type;
            $movie_model->lengthm = $lengthm;
            $movie_model->yeary = $yeary;
            $movie_model->episodes = $episodes;
            $movie_model->ep_name = $ep_name;
            $movie_model->nation = $nation;
            $movie_model->director = $director;
            $movie_model->description = $description;
            $movie_model->trailer = $trailer;
            $movie_model->link_basic = $link_basic;
            $movie_model->link_premium = $link_premium;
            $movie_model->link_exclusive = $link_exclusive;
            $movie_model->en_sub = $en_sub;
            $movie_model->vie_sub = $vie_sub;
            $movie_model->status = $status;
            $movie_model->updated_at = date('Y-m-d H:i:s');

            $is_update = $movie_model->update($id);
            if ($is_update) {
                $_SESSION['success'] = 'Update successful';
            } else {
                $_SESSION['error'] = 'Update failed';
            }
            header('Location: all-movie');
            exit();
        }
    }

    $category_model = new Category();
    $categories = $category_model->getAll();

    $this->content = $this->render('views/movies/update.php', [
        'categories' => $categories,
        'movie' => $movie,
    ]);

    $this->page_title = 'Update | '. $movie['title'];
    $this->movie_tab = 'sidebar__nav-link--active';
    $this->nav_active = 'show';
    require_once 'views/layouts/main.php';
  }

    public function delete() {
        if (!isset($_GET['id']) || !is_numeric($_GET['id'])) {
            $_SESSION['error'] = 'ID is not valid';
            header('Location: all-movie');
            exit();
        }

        $id = $_GET['id'];
        $user_model = new Movie();
        $is_delete = $user_model->delete($id);
        if ($is_delete) {
            $_SESSION['success'] = 'Deletion completed';
        } else {
            $_SESSION['error'] = 'Deletion failed';
        }
        header('Location: all-movie');
        exit();
    }
}