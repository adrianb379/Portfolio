<?php

class Loging
{

    public function __construct()
    {

        $email = $_REQUEST['email'];
        $pass = $_REQUEST['pass'];

        $entering = new Entering($email, $pass);
        

    }

}