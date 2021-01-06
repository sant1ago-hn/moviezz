<?php
require_once 'controllers/Controller.php';
require_once 'models/Movie.php';

class HomeController extends Controller {
  public function index() {
    $movie_model = new Movie();
    $movies = $movie_model->getMovieInHomePage();

    $this->content = $this->render('views/homes/index.php', [
      'movies' => $movies
    ]);
    require_once 'views/layouts/main.php';
  }
}