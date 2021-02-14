<?php
require_once 'models/Model.php';

class Movie extends Model {
    public $id;
    public $idcategory;
    public $title;
    public $image;
    public $lengthm;
    public $movie_type;
    public $episodes;
    public $ep_name;
    public $director;
    public $nation;
    public $yeary;
    public $status;
    public $views;
    public $star;
    public $description;
    public $created_at;
    public $updated_at;
    public $str_search = '';
    public $trailer;
    public $link_basic;
    public $link_premium;
    public $link_exclusive;
    public $en_sub;
    public $vie_sub;

    public function __construct() {
        parent::__construct();
        if (isset($_GET['title']) && !empty($_GET['title'])) {
            $this->str_search .= " AND movies.title LIKE '%{$_GET['title']}%'";
        }
        if (isset($_GET['idcategory']) && !empty($_GET['idcategory'])) {
            $this->str_search .= " AND movies.idcategory = {$_GET['idcategory']}";
        }
    }

    public function getAll(): array {
        $obj_select = $this->connection
            ->prepare("SELECT movies.*, categories.name AS category_name FROM movies INNER JOIN categories ON categories.id = movies.idcategory WHERE TRUE $this->str_search ORDER BY movies.created_at DESC");
        $arr_select = [];
        $obj_select->execute($arr_select);
        return $obj_select->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getAllPagination($params): array {
        $limit = $params['limit'];
        $page = $params['page'];
        $start = ($page - 1) * $limit;
        $obj_select = $this->connection->prepare("SELECT movies.*, categories.name AS category_name FROM movies INNER JOIN categories ON categories.id = movies.idcategory WHERE TRUE $this->str_search ORDER BY movies.updated_at DESC, movies.created_at DESC LIMIT $start, $limit");
        $arr_select = [];
        $obj_select->execute($arr_select);
        return $obj_select->fetchAll(PDO::FETCH_ASSOC);
    }

    public function countTotal() {
        $obj_select = $this->connection->prepare("SELECT COUNT(id) FROM movies WHERE TRUE $this->str_search");
        $obj_select->execute();
        return $obj_select->fetchColumn();
    }

    public function insert(): bool {
        $obj_insert = $this->connection->prepare("INSERT INTO movies(idcategory, title, image, lengthm, nation, yeary, episode, director, description, movie_type, trailer, link_basic, link_premium, link_exclusive, en_sub, vie_sub, status) VALUES (:idcategory, :title, :image, :lengthm, :nation, :yeary, :episode, :director, :description, :movie_type, :trailer, :link_basic, :link_premium, :link_exclusive, :en_sub, :vie_sub, :status)");
        $arr_insert = [
            ':idcategory' => implode(",", $this->idcategory),
            ':title' => $this->title,
            ':image' => $this->image,
            ':lengthm' => implode(",", $this->lengthm),
            ':nation' => $this->nation,
            ':yeary' => $this->yeary,
            ':episode' => $this->episodes,
            ':director' => $this->director,
            ':description' => $this->description,
            ':movie_type' => $this->movie_type,
            ':trailer' => $this->trailer,
            ':link_basic' => implode(",", $this->link_basic),
            ':link_premium' => implode(",", $this->link_premium),
            ':link_exclusive' => implode(",", $this->link_exclusive),
            ':en_sub' => $this->en_sub,
            ':vie_sub' => $this->vie_sub,
            ':status' => $this->status,
        ];
        return $obj_insert->execute($arr_insert);
    }

    public function getById($id) {
        $obj_select = $this->connection->prepare("SELECT movies.*, categories.name AS category_name FROM movies INNER JOIN categories ON movies.idcategory = categories.id WHERE movies.id = $id");
        $obj_select->execute();
        return $obj_select->fetch(PDO::FETCH_ASSOC);
    }

    public function update($id): bool {
        $obj_update = $this->connection->prepare("UPDATE movies SET idcategory=:idcategory, title=:title, image=:image, lengthm=:lengthm, nation=:nation, yeary=:yeary, episode=:episode, ep_name=:ep_name, director=:director, description=:description, movie_type=:movie_type, trailer=:trailer, link_basic=:link_basic, link_premium=:link_premium, link_exclusive=:link_exclusive, en_sub=:en_sub, vie_sub=:vie_sub, status=:status, updated_at=:updated_at WHERE id = $id");
        $arr_update = [
            ':idcategory' => implode(",", $this->idcategory),
            ':title' => $this->title,
            ':image' => $this->image,
            ':lengthm' => implode(",", $this->lengthm),
            ':nation' => $this->nation,
            ':yeary' => $this->yeary,
            ':episode' => $this->episodes,
            ':ep_name' => implode(";", $this->ep_name),
            ':director' => $this->director,
            ':description' => $this->description,
            ':movie_type' => $this->movie_type,
            ':trailer' => $this->trailer,
            ':link_basic' => implode(",", $this->link_basic),
            ':link_premium' => implode(",", $this->link_premium),
            ':link_exclusive' => implode(",", $this->link_exclusive),
            ':en_sub' => $this->en_sub,
            ':vie_sub' => $this->vie_sub,
            ':status' => $this->status,
            ':updated_at' => $this->updated_at,
        ];
        return $obj_update->execute($arr_update);
    }

    public function delete($id): bool {
        $obj_delete = $this->connection->prepare("DELETE FROM movies WHERE id = $id");
        return $obj_delete->execute();
    }
}