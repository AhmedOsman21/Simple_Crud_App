<?php

namespace DB_Class;

include "Db_Connection.php";


class Records extends DB_Connection {
    private $username;
    private $name;
    private $email;

    // Read
    public function readAll() {
        $sql = "SELECT * FROM users";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        $users = $stmt->fetchAll();
        return $users;
    }
}

