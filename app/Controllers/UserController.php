<?php

namespace App\Controllers;

use App\Database\Mysql;
use Symfony\Component\Routing\RouteCollection;

class UserController
{
    public function store(int $id, RouteCollection $routes)
    {
        // These lines better be cleaned.
        try {
            $sql = "INSERT INTO users (first_name, last_name)
        VALUES ('hossein', 'sheikh')";
            $mysql = new Mysql();
            $connection = $mysql->connect();
            $connection->exec($sql);
            echo json_encode([
                'data' => [
                    'error' => false,
                    'message' => "Data created successfully",
                    'status' => 201
                ]
            ]);
        } catch (\Exception $exception) {
            echo json_encode([
                'data' => [
                    'error' => false,
                    'message' => $exception->getMessage(),
                    'status' => 406
                ]
            ]);
        }

    }
}