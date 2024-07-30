<?php
session_start();
require_once "models/User.php";
class Dashboard
{
    public function __construct()
    {
        if (empty($_SESSION['profile'])) {
            $_SESSION['profile'] = null;
            $_SESSION['session'] = null;
        }
    }
    public function index()
    {
        if (isset($_SESSION['session'])) {
            $session = $_SESSION['session'];
            $user = unserialize($_SESSION['profile']);
            require_once "views/Roles/" . $session . "/" .  $session . ".view.php";
        } else {
            header("Location:?");
        }
    }
}

