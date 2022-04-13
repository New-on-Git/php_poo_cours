<?php

namespace M2i\Framework;

class DAO
{
    private $connection = null;

    public function __construct()
    {
        try{
            $this->connection = new \PDO('mysql:host=mysql;port:3306;dbname=app', 'm2i', 'paris');

        }catch (\PDOException $e){
            echo 'Erreur : ' . $e->getMessage();
        }
    }
    public function getConnection()
    {
        return $this->connection;
    }
}