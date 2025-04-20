<?php

namespace App\Database;

use PDO;

class Mysql
{
    public function connect()
    {
        $serverName = DB_HOST;
        $userName = DB_USER;
        $password = DB_PASS;
        $db = DB_NAME;
        try {
            $conn = new \PDO("mysql:host=$serverName;dbname=$db", $userName, $password);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $conn;
        } catch (PDOException $e) {
            return "Connection failed: " . $e->getMessage();
        }
    }
}