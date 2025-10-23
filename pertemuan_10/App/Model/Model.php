<?php


namespace App\Model;


header('Content-Type: application/json; charset=utf-8');


use PDO;
use PDOException;


class Model
{
    protected $db;


    public function __construct()
    {
        try {
            $conn = new PDO("mysql:host=localhost;dbname=crud", 'root', 'fr4n5_3y5q7');
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $this->db = $conn;
        } catch (PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }




    }


    public function getDB()
    {
        return $this->db;
    }


}