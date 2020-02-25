<?php

class Eraser
{

    public function eraser($id)
    {

        $connection = new Connection;
        $erasing = $connection->connection()->prepare('DELETE from contacts where id = :id');
        $erasing->bindValue(':id', $id);
        $erasing->execute();

        header('Location: '.DIRPAGE.'');

    }

}