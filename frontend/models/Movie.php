<?php
require_once 'models/Model.php';
class Movie extends Model {

    public function getMovieInHomePage($params = []): array {
        $str_filter = '';
        if (isset($params['categories'])) {
            $str_category = $params['categories'];
            $str_filter .= " AND categories.id IN $str_category";
        }
        $sql_select = "SELECT movies.*, categories.name AS category_name FROM movies INNER JOIN categories ON movies.idcategory = categories.id WHERE movies.status = 1 $str_filter";
        $obj_select = $this->connection->prepare($sql_select);
        $obj_select->execute();
        return $obj_select->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getById($id) {
    $obj_select = $this->connection->prepare("SELECT movies.*, categories.name AS category_name FROM movies INNER JOIN categories ON movies.idcategory = categories.id WHERE movies.id = $id");

    $obj_select->execute();
    return $obj_select->fetch(PDO::FETCH_ASSOC);
    }
}

