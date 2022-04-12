<?php
if (isset($_GET['func'])) {
    include("controllers/c_user.php");
    $c_home = new c_user();
    $c_home->logout();
    header("location:login.php");
}