<?php

class Newitem
{

    public function __construct()
    {

        $namee = $_REQUEST['namee'];
        $phone = $_REQUEST['phone'];

        $writingItem = new Writingitem($namee, $phone);
        

    }

}