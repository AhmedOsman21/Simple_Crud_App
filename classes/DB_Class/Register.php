<?php

namespace DB_Class;

include "Db_Connection.php";


class Records extends DB_Connection {
    private $id;
    private $username;
    private $name;
    private $email;


    // Setters
    public function setId(int $id) {
        $this->id = $id;
    }

    public function setUser(string $username) {
        $this->username = $username;
    }

    public function setName(string $name) {
        $this->name = $name;
    }

    public function setEmail(string $email) {
        $this->email = $email;
    }


    // Getters
    public function getId(): int {
        return $this->id;
    }

    public function getUser(): string {
        return $this->username;
    }

    public function getName(): string {
        return $this->name;
    }

    public function getEmail(): string {
        return $this->email;
    }


    // Read All Users
    public function readAll() {
        $sql = "SELECT * FROM users";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        $users = $stmt->fetchAll();
        return $users;
    }
}

