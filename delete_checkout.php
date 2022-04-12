<?php
@session_start();
include ("controllers/c_checkout.php");
$c_checkout = new c_giohang();
$c_checkout->delete_checkout();
?>