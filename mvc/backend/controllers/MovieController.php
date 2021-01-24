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
            'limit' => 5,
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
            $director = $_POST['director'];
            $link = $_POST['link'];
            $status = $_POST['status'];
              if (empty($title)) {
                $this->error = 'Title could not be empty';
              } else if ($_FILES['image']['error'] == 0) {
                $extension = pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION);
                $extension = strtolower($extension);
                $arr_extension = ['jpg', 'jpeg', 'png', 'gif'];

                $file_size_mb = $_FILES['image']['size'] / 1024 / 1024;
                $file_size_mb = round($file_size_mb, 2);

                if (!in_array($extension, $arr_extension)) {
                  $this->error = 'image must be picture';
                } else if ($file_size_mb > 2) {
                  $this->error = 'File too large, no more than 2MB';
                }
              }

              if (empty($this->error)) {
                $filename = '';
                if ($_FILES['image']['error'] == 0) {
                  $dir_uploads = __DIR__ . '/../assets/uploads';
                  if (!file_exists($dir_uploads)) {
                    mkdir($dir_uploads);
                  }
                  $filename = time() . '-movie-' . $_FILES['image']['name'];
                  move_uploaded_file($_FILES['image']['tmp_name'], $dir_uploads . '/' . $filename);
                }
                $movie_model = new Movie();
                $movie_model->idcategory = $idcategory;
                $movie_model->title = $title;
                $movie_model->image = $filename;
                $movie_model->movie_type = $movie_type;
                $movie_model->lengthm = $lengthm;
                $movie_model->nation = $nation;
                $movie_model->yeary = $yeary;
                $movie_model->director = $director;
                $movie_model->link = $link;
                $movie_model->status = $status;

                $is_insert = $movie_model->insert();
                if ($is_insert) {
                    $_SESSION['success'] = 'Insert successful';
                } else {
                    $_SESSION['error'] = 'Insert failed';
                }
                header('Location: index.php?controller=movie');
                exit();
              }
        }

        $category_model = new Category();
        $categories = $category_model->getAll();

        $this->content = $this->render('views/movies/create.php', [
            'categories' => $categories
        ]);
        require_once 'views/layouts/main.php';
      }

  public function detail() {
    if (!isset($_GET['id']) || !is_numeric($_GET['id'])) {
      $_SESSION['error'] = 'ID is not valid';
      header('Location: index.php?controller=movie');
      exit();
    }

    $id = $_GET['id'];
    $movie_model = new Movie();
    $movie = $movie_model->getById($id);

    $this->content = $this->render('views/movies/detail.php', [
        'movie' => $movie
    ]);
    require_once 'views/layouts/main.php';
  }

  public function update() {
    if (!isset($_GET['id']) || !is_numeric($_GET['id'])) {
      $_SESSION['error'] = 'ID is not valid';
      header('Location: index.php?controller=movie');
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
      $yeary = $_POST['yeary'];
      $director = $_POST['director'];
      $link = $_POST['link'];
      $status = $_POST['status'];
      if (empty($title)) {
        $this->error = 'Please fill the title';
      } else if ($_FILES['image']['error'] == 0) {
        $extension = pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION);
        $extension = strtolower($extension);
        $arr_extension = ['jpg', 'jpeg', 'png', 'gif'];

        $file_size_mb = $_FILES['image']['size'] / 1024 / 1024;
        $file_size_mb = round($file_size_mb, 2);

        if (!in_array($extension, $arr_extension)) {
          $this->error = 'image must be picture';
        } else if ($file_size_mb > 2) {
          $this->error = 'File too large, no more than 2MB';
        }
      }

      if (empty($this->error)) {
        $filename = $movie['image'];
        if ($_FILES['image']['error'] == 0) {
          $dir_uploads = __DIR__ . '/../assets/uploads';
          @unlink($dir_uploads . '/' . $filename);
          if (!file_exists($dir_uploads)) {
            mkdir($dir_uploads);
          }
          $filename = time() . '-movie-' . $_FILES['image']['name'];
          move_uploaded_file($_FILES['image']['tmp_name'], $dir_uploads . '/' . $filename);
        }
        $movie_model->idcategory = $idcategory;
        $movie_model->title = $title;
        $movie_model->image = $filename;
        $movie_model->movie_type = $movie_type;
        $movie_model->lengthm = $lengthm;
        $movie_model->yeary = $yeary;
        $movie_model->director = $director;
        $movie_model->link = $link;
        $movie_model->status = $status;
        $movie_model->updated_at = date('Y-m-d H:i:s');

        $is_update = $movie_model->update($id);
        if ($is_update) {
            $_SESSION['success'] = 'Update successful';
        } else {
            $_SESSION['error'] = 'Update failed';
        }
        header('Location: index.php?controller=movie');
        exit();
      }
    }

    $category_model = new Category();
    $categories = $category_model->getAll();

    $this->content = $this->render('views/movies/update.php', [
        'categories' => $categories,
        'movie' => $movie,
    ]);
    require_once 'views/layouts/main.php';
  }

  public function delete() {
      if (!isset($_GET['id']) || !is_numeric($_GET['id'])) {
          $_SESSION['error'] = 'ID is not valid';
          header('Location: index.php?controller=movie');
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
      header('Location: index.php?controller=movie');
      exit();
  }
}