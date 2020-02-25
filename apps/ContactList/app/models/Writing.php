<?php

class Writing
{

    public function writing($namee, $email, $pass)
    {

        $connection = new Connection;

        $queryEmail = $connection->connection()->prepare('SELECT email from users where email = :email');
        $queryEmail->bindValue(':email', $email);
        $queryEmail->execute();
        if ($queryEmail->rowCount() >= 1) {
            echo '<script>alert("E-mail já cadastrado!")</script>';
            echo '<script>setTimeout(window.location="'.DIRPAGE.'")</script>';
        } else {

            $writing = $connection->connection()->prepare('INSERT INTO users(namee, email, pass) values(:namee, :email, :pass)');
            $writing->bindValue(':namee', $namee);
            $writing->bindValue(':email', $email);
            $writing->bindValue(':pass', $pass);
            $writing->execute();

            echo '<script>alert("Usuário cadastrado com sucesso!")</script>';
            echo '<script>setTimeout(window.location="'.DIRPAGE.'")</script>';
        }

    }

}