<?php
include "controllers/c_customer.php";
$c_customer=new c_customer();
if(isset($_GET['key']))
{
    $key=$_GET['key'];
    if($key=='dat-hang')
    {
        $c_customer->order();
    }
}

?>