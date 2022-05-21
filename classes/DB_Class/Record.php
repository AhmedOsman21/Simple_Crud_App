<?php

namespace DB_Class;

use PDOException;

include "Db_Connection.php";


class Record extends DB_Connection {
    private $id;
    private $username;
    private $firstName;
    private $lastName;
    private $email;


    // Setters
    public function setRecord(int $id, ?string $username, ?string $firstName, ?string $lastName, ?string $email) {
        $this->id       = $id;
        $this->username = $username;
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->email    = $email;
    }

    public function setId(int $id) {
        $this->id = $id;
    }

    public function setUser(string $username) {
        $this->username = $username;
    }

    public function setFirstName(string $firstName) {
        $this->firstName = $firstName;
    }

    public function setLastName(string $lastName) {
        $this->lastName = $lastName;
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

    public function getFirstName(): string {
        return $this->firstName;
    }

    public function getLastName(): string {
        return $this->lastName;
    }

    public function getEmail(): string {
        return $this->email;
    }


    // Insert a record
    public function insertRecord() {
        try {
            $sql = "INSERT INTO users(username, first_name, last_name, email) VALUES(?, ?, ?, ?)";
            $stmt = $this->conn->prepare($sql);
            $stmt->execute([$this->username, $this->firstName, $this->lastName, $this->email]);
            $result = '<script src="js/record_insertion.js"></script>';
            echo $result;
        } catch(PDOException $e) {
            return $e->getMessage();
        }
    }


    // Read Single User
    public function read() {
        try {
            $sql = "SELECT * FROM users WHERE id=?";
            $stmt = $this->conn->prepare($sql);
            $stmt->execute([$this->id]);
            $user = $stmt->fetchAll();
            return $user;
        } catch (PDOException $e) {
            return $e->getMessage();
        }
    }

    // Read All Users
    public function readAll() {
        try {
            $sql = "SELECT * FROM users";
            $stmt = $this->conn->prepare($sql);
            $stmt->execute();
            $users = $stmt->fetchAll();
            return $users;
        } catch (PDOException $e) {
            return $e->getMessage();
        }
    }

    // Update User Data
    public function update() {
        try {
            $sql = "UPDATE users SET username=?, first_name=?, last_name=?, email=? WHERE id=?";
            $stmt = $this->conn->prepare($sql);
            $stmt->execute([$this->username, $this->firstName, $this->lastName, $this->email, $this->id]);
        } catch (PDOException $e) {
            return $e->getMessage();
        }
    }


    // Delete User
    public function delete() {
        try {
            $sql = "DELETE FROM users WHERE id=?";
            $stmt = $this->conn->prepare($sql);
            $stmt->execute([$this->id]);
            $result = '<script src="js/record_deletion.js"></script>';
            echo $result;
        } catch (PDOException $e) {
            return $e->getMessage();
        }
    }


    // Check Username
    public function userExists() {
        try {
            $sql = "SELECT username FROM users WHERE username = ?";
            $stmt = $this->conn->prepare($sql);
            $stmt->execute([$this->username]);
            if ($stmt->rowCount() > 0) {
                return true;
            } else {
                return false;
            }
        } catch (PDOException $e) {
            return $e->getMessage();
        }
    }
}

