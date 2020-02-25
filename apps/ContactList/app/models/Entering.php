<?php

class Entering
{

    public function entering($email, $pass)
    {

        $connection = new Connection;

        $queryEmail = $connection->connection()->prepare('SELECT email from users where email = :email');
        $queryEmail->bindValue(':email', $email);
        $queryEmail->execute();
        if ($queryEmail->rowCount() == 1) {
            $queryPass = $connection->connection()->prepare('SELECT pass from users where pass = :pass');
            $queryPass->bindValue(':pass', $pass);
            $queryPass->execute();
            if ($queryPass->rowCount() == 1) {
                session_start();
                $_SESSION['user'] = $email;
                header('Location: '.DIRPAGE.'');
            } else {
                echo '<script>alert("Senha incorreta. Verifique e tente novamente.")</script>';
                echo '<script>setTimeout(window.location="'.DIRPAGE.'")</script>';
            }
        } else {
            echo '<script>alert("E-mail não encontrado. Verifique e tente novamente.")</script>';
            echo '<script>setTimeout(window.location="'.DIRPAGE.'")</script>';
        }

    }

}