<?php
@session_start();
if (isset($_SESSION['user_admin'])) {
    include("controllers/c_home.php");
    $c_home = new c_home();
    $c_home->index();
}else{
    header("location:login.php");
}