<?php

class Delete
{

    public function delete()
    {

        $url = explode('/', $_GET['url']);
        $id = $url[1];
        $eraser = new Eraser($id);

    }

}