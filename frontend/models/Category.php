<?php
require_once 'models/Model.php';
class Category extends Model {

  public function getAll(): array {
    $sql_select_all = "SELECT * FROM categories WHERE `status` = 1";
    $obj_select_all = $this->connection->prepare($sql_select_all);
    $obj_select_all->execute();
      return $obj_select_all->fetchAll(PDO::FETCH_ASSOC);
  }

    public function getById($id) {
        $sql_select_one = "SELECT * FROM categories WHERE id = $id";
        $obj_select_one = $this->connection
            ->prepare($sql_select_one);
        $obj_select_one->execute();
        return $obj_select_one->fetch(PDO::FETCH_ASSOC);
    }

    public function getCategoryById($id) {
        $obj_select = $this->connection
            ->prepare("SELECT * FROM categories WHERE id = $id");
        $obj_select->execute();
        return $obj_select->fetch(PDO::FETCH_ASSOC);
    }

    public function getAllPagination($params = []): array {
        $limit = $params['limit'];
        $page = $params['page'];
        $start = ($page - 1) * $limit;
        $obj_select = $this->connection
            ->prepare("SELECT * FROM categories LIMIT $start, $limit");
        $obj_select->execute();
        return $obj_select->fetchAll(PDO::FETCH_ASSOC);
    }
}