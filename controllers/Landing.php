<?php
class Landing
{
    public function __construct()
    {}
    public function index()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'GET') {
            require_once "views/Company/index.view.php";
        }       
    }
}

