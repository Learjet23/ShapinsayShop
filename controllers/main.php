<?php
class Main
{
    public function index()
    {
        Flight::render("main/index.php", array(), "content");
        Flight::render("main.layout.php", array('title' => "beCyCle", 'active' => "index"));
    }
}