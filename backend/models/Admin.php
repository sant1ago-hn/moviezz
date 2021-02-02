<?php
require_once 'models/Model.php';
class Admin extends Model {
    public $id;
    public $username;
    public $password;
    public $fullname;
    public $email;
    public $avatar;
    public $last_login;
    public $status;
    public $created_at;
    public $updated_at;
    public $str_search;

    public function __construct() {
        parent::__construct();
        if (isset($_GET['username']) && !empty($_GET['username'])) {
            $username = addslashes($_GET['username']);
            $this->str_search .= " AND admins.username LIKE '%$username%'";
        }
    }

    public function getAll(): array {
        $obj_select = $this->connection
            ->prepare("SELECT * FROM admins ORDER BY updated_at DESC, created_at DESC");
        $obj_select->execute();
        return $obj_select->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getAllPagination($params = []): array {
        $limit = $params['limit'];
        $page = $params['page'];
        $start = ($page - 1) * $limit;
        $obj_select = $this->connection
            ->prepare("SELECT * FROM admins WHERE TRUE $this->str_search ORDER BY created_at DESC LIMIT $start, $limit");

        $obj_select->execute();
        return $obj_select->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getTotal() {
        $obj_select = $this->connection
            ->prepare("SELECT COUNT(id) FROM admins WHERE TRUE $this->str_search");
        $obj_select->execute();
        return $obj_select->fetchColumn();
    }

    public function getById($id) {
        $obj_select = $this->connection
            ->prepare("SELECT * FROM admins WHERE id = $id");
        $obj_select->execute();
        return $obj_select->fetch(PDO::FETCH_ASSOC);
    }

    public function getUserByUsername($username) {
        $obj_select = $this->connection
            ->prepare("SELECT COUNT(id) FROM admins WHERE username='$username'");
        $obj_select->execute();
        return $obj_select->fetchColumn();
    }

    public function insert(): bool {
        $obj_insert = $this->connection
            ->prepare("INSERT INTO admins(username, password, fullname, email, avatar, status) VALUES(:username, :password, :fullname, :email, :avatar, :status)");
        $arr_insert = [
            ':username' => $this->username,
            ':password' => $this->password,
            ':fullname' => $this->fullname,
            ':email' => $this->email,
            ':avatar' => $this->avatar,
            ':status' => $this->status,
        ];
        return $obj_insert->execute($arr_insert);
    }

    public function update($id): bool {
        $obj_update = $this->connection
            ->prepare("UPDATE admins SET fullname=:fullname, email=:email, avatar=:avatar, status=:status, updated_at=:updated_at WHERE id = $id");
        $arr_update = [
            ':fullname' => $this->fullname,
            ':email' => $this->email,
            ':avatar' => $this->avatar,
            ':status' => $this->status,
            ':updated_at' => $this->updated_at,
        ];
        $obj_update->execute($arr_update);

        return $obj_update->execute($arr_update);
    }

    public function delete($id): bool {
        $obj_delete = $this->connection
            ->prepare("DELETE FROM admins WHERE id = $id");
        return $obj_delete->execute();
    }

    public function getUserByUsernameAndPassword($username, $password) {
        $obj_select = $this->connection
            ->prepare("SELECT * FROM admins WHERE username=:username AND password=:password LIMIT 1");
        $arr_select = [
            ':username' => $username,
            ':password' => $password,
        ];
        $obj_select->execute($arr_select);

        return $obj_select->fetch(PDO::FETCH_ASSOC);
    }

    public function insertRegister(): bool {
        $obj_insert = $this->connection
            ->prepare("INSERT INTO admins(username, password, status) VALUES(:username, :password, :status)");
        $arr_insert = [
            ':username' => $this->username,
            ':password' => $this->password,
            ':status' => $this->status,
        ];
        return $obj_insert->execute($arr_insert);
    }

}