<?php

class Writingitem
{

    public function writingitem($namee, $phone)
    {

        $connection = new Connection;

        $queryContact = $connection->connection()->prepare('SELECT * from contacts where namee = :namee or phone = :phone');
        $queryContact->bindValue(':namee', $namee);
        $queryContact->bindValue(':phone', $phone);
        $queryContact->execute();
        if ($queryContact->rowCount() >= 1) {
            echo '<script>alert("Contato já cadastrado!")</script>';
            echo '<script>setTimeout(window.location="'.DIRPAGE.'")</script>';
        } else {

            session_start();
            $writing = $connection->connection()->prepare('INSERT INTO contacts(namee, phone, own) values(:namee, :phone, :own)');
            $writing->bindValue(':namee', $namee);
            $writing->bindValue(':phone', $phone);
            $writing->bindValue(':own', $_SESSION['user']);
            $writing->execute();

            echo '<script>alert("Novo contato cadastrado com sucesso!")</script>';
            echo '<script>setTimeout(window.location="'.DIRPAGE.'")</script>';
        }

    }

}