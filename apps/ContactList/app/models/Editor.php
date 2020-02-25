<?php

class Editor
{

    public function editor($namee, $phone, $id)
    {

        $connection = new Connection;
        $erasing = $connection->connection()->prepare('UPDATE contacts set namee = :namee, phone = :phone where id = :id');
        $erasing->bindValue(':namee', $namee);
        $erasing->bindValue(':phone', $phone);
        $erasing->bindValue(':id', $id);
        $erasing->execute();

        echo '<script>alert("Contacto actualizado con exito!")</script>';
        echo '<script>setTimeout(window.location="'.DIRPAGE.'")</script>';

    }

}
