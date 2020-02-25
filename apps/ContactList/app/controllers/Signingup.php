<?php

class Signingup
{

    public function __construct()
    {

        $namee = $_REQUEST['namee'];
        $email = $_REQUEST['email'];
        $pass = $_REQUEST['pass'];

        $writing = new Writing($namee, $email, $pass);
        

    }

}