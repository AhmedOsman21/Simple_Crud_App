<?php
namespace DB_Class;
use PDO;

// Db Constants File
include("db_config.php");

class Db_Connection {
    public static $conn;

    public function __construct(
        string $db_host = DB_HOST,
        string $db_name = DB_NAME,
        string $db_user = DB_USERNAME,
        string $db_pass = DB_PASS,
        array $db_opt   = DB_OPTIONS
    ) {
        self::$conn = new PDO("mysql:host=$db_host;dbname=$db_name", $db_user, $db_pass, $db_opt);
    }
}
