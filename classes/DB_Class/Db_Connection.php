<?php

namespace DB_Class;

use PDO;
use PDOException;

// Db Constants File
include("db_config.php");

class DB_Connection {
    protected $conn;

    public function __construct(
        $db_host = DB_HOST,
        $db_name = DB_NAME,
        $db_user = DB_USERNAME,
        $db_pass = DB_PASS,
        $db_opt  = DB_OPTIONS
    ) {
        try {
            $this->conn = new PDO("mysql:host=$db_host;dbname=$db_name", $db_user, $db_pass, $db_opt);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            return $e->getMessage();
        }
    }
}
