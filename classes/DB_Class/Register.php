<?php

namespace DB_Class;

include "Db_Connection.php";


class Records extends DB_Connection {
    private $id;
    private $username;
    private $name;
    private $email;


    // Class Setters
    public function setId($id) {
        $this->id = $id;
    }

    public function setUser($username) {
        $this->username = $username;
    }

    public function setName($name) {
        $this->name = $name;
    }

    public function setEmail($email) {
        $this->email = $email;
    }

    
    // Read
    public function readAll() {
        $sql = "SELECT * FROM users";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        $users = $stmt->fetchAll();
        return $users;
    }
}

