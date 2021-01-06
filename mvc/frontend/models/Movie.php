<?php
require_once 'models/Model.php';
class Movie extends Model {

  public function getMovieInHomePage($params = []) {
    $str_filter = '';
    if (isset($params['category'])) {
      $str_category = $params['category'];
      $str_filter .= " AND categories.id IN $str_category";
    }
    if (isset($params['price'])) {
      $str_price = $params['price'];
      $str_filter .= " AND $str_price";
    }
    $sql_select = "SELECT movies.*, categories.name AS category_name FROM movies INNER JOIN categories ON movies.category_id = categories.id WHERE movies.status = 1 $str_filter";

    $obj_select = $this->connection->prepare($sql_select);
    $obj_select->execute();

    $movies = $obj_select->fetchAll(PDO::FETCH_ASSOC);
    return $movies;
  }

      public function getById($id)
  {
    $obj_select = $this->connection
      ->prepare("SELECT movies.*, categories.name AS category_name FROM movies INNER JOIN categories ON movies.category_id = categories.id WHERE movies.id = $id");

    $obj_select->execute();
    return $obj_select->fetch(PDO::FETCH_ASSOC);
  }
}

