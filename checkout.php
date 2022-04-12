<?php
error_reporting(0);
include("controllers/c_checkout.php");
$c_checkout=new c_checkout();
if(isset($_POST["btnCapnhat"]))
{
    $checkout=$c_checkout->get_checkout();
    //Xóa mặt hàng trong giỏ hàng

    /** @var TYPE_NAME $value */
    foreach(@$checkout as $key=> $value)
    {
        if(isset($_POST[$key]))
        {
            $c_checkout->delete_product_to_checkout($key,$_POST[$key]);
        }
    }
    //cập nhật lại giỏ hàng
    $checkout=$c_checkout->get_checkout();
    if($checkout)
    {
        foreach($checkout as $key=> $value)
        {
            $number_new=$_POST["number".$key];
            if($number_new!=$value)
            {
                $c_checkout->update_checkout($key,$number_new,$_POST["don_gia".$key]);
            }
        }
    }

}
$c_checkout->view_checkout();
?>