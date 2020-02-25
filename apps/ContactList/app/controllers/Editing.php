<?php

class Editing
{

    public function editing()
    {

        $namee = $_REQUEST['namee'];
        $phone = $_REQUEST['phone'];
        $url = explode('/', $_GET['url']);
        $id = $url[1];
        $editor = new Editor($namee, $phone, $id);

    }

}