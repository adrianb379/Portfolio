<?php

class Connection
{

    public function connection()
    {

        try {
            $connection = new PDO('mysql:host=us-cdbr-iron-east-05.cleardb.net;dbname=heroku_83cb244c8c8afef', 'bebb9790c5c380', 'e6bf87bd');
            return $connection;
        } catch(PDOException $e) {
            echo $e->getMessage();
        }

    }

}