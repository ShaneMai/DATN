<?php
@session_start();
include "controllers/c_checkout.php";
$c_checkout=new c_giohang();
$key = $_POST['id'];
$so_luong = ((int)$_POST['so_luong']);
$don_gia = ((double)$_POST['don_gia']);

if($so_luong>=0 && $don_gia>0)
    $c_checkout->insert_to_checkout($key, $so_luong, $don_gia);

$arr_checkout = array('sl'=>$c_checkout->so_luong(), 'st'=>number_format($c_checkout->thanh_tien()));
echo json_encode($arr_checkout);
?>

