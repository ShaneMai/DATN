<?php
@session_start();
class c_checkout
{
    function view_checkout()
    {
        $checkout=$this->get_checkout();
        if($checkout) //Nếu có giỏ hàng
        {
            $product_checkout=array();
            foreach($checkout as $key=>$value)
            {
                $product_checkout[$key]=$value;
            }
            if($product_checkout)
            {
                $_SESSION['product_checkout'] =$product_checkout;
                $list_product =   $this->get_product($product_checkout);
            }
        }
        $view = 'views/checkout/v_checkout.php';
        include('templates/frontend/checkout/layout.php');
    }
    function get_checkout()
    {
        if(isset($_SESSION['checkout']))
            return $_SESSION['checkout'];
        else
            return false;
    }

    function get_product($product)
    {
        $ma_san_pham=array();
        foreach($product as $key=>$value)
        {
            $ma_san_pham[]=$key;
        }
        $ma_san_pham=implode(",",$ma_san_pham);
        include_once('models/m_product.php');
        $m_product=new m_product();
        $list_product=$m_product->insert_product_to_checkout($ma_san_pham);
        $list_products=array(); //Ðua số lượng vào $list product
        foreach($list_product as $item)
        {
            $item->so_luong=$product[$item->ma_san_pham];
            $list_products[]=$item;
        }
        return $list_products;
    }
    function insert_to_checkout($ma_san_pham, $so_luong, $don_gia) {
        if($so_luong>0) {

            /*

                    */
            if(isset($_SESSION['checkout'][$ma_san_pham])) {

                $_SESSION['thanh_tien'] -= @$_SESSION['checkout'][$ma_san_pham]*$don_gia;
                $_SESSION['so_luong'] -= @$_SESSION['checkout'][$ma_san_pham];

            }
            $_SESSION['checkout'][$ma_san_pham] = $so_luong;
            if(isset($_SESSION['thanh_tien']))
            {
                $_SESSION['thanh_tien']= @$_SESSION['thanh_tien']+$so_luong*$don_gia;
                $_SESSION['so_luong'] = @$_SESSION['so_luong']+$so_luong;
            }
            else
            {
                $_SESSION['thanh_tien'] = $so_luong*$don_gia;
                $_SESSION['so_luong'] = $so_luong;
            }

        }
        else if($so_luong==0)
        {
            delete_product_to_checkout($ma_san_pham, $don_gia);
        }
    }
    function delete_product_from_checkout($ma_san_pham, $don_gia) {
        $checkout = $this->get_checkout();
        $new_checkout = array();
        foreach($checkout as $key=>$value)
        {
            if($key!=$ma_san_pham)
                $new_checkout[$key]=$value;
            else
            {
                $_SESSION['thanh_tien']-=$checkout[$ma_san_pham]*$don_gia;
                $_SESSION['so_luong']-=$checkout[$ma_san_pham];
            }
        }
        if(!empty($new_checkout)) {
            $_SESSION['checkout']=$new_checkout;
        }
        else {
            $this->delete_checkout();
        }
    }
    function delete_checkout() {

        unset($_SESSION['checkout']);
        unset($_SESSION['thanh_tien']);
        unset($_SESSION['so_luong']);
    }
    function delete_all() {

        unset($_SESSION['product_checkout']);
    }
    function thanh_tien() {
        if(isset($_SESSION['thanh_tien']))
            return $_SESSION['thanh_tien'];
        else
            return 0;
    }
    function so_luong() {
        if(isset($_SESSION['so_luong']))
            return $_SESSION['so_luong'];
        else
            return 0;
    }
    function number_product() {
        if(isset($_SESSION['so_luong']))
            return $_SESSION['so_luong'];
        else
            return 0;
    }

    function update_checkout($ma_san_pham,$so_luong,$don_gia) {
        if(!is_numeric($so_luong))
            return false;
        $so_luong = (int)$so_luong;
        if($so_luong>0)
        {

            $_SESSION['thanh_tien']-=@$_SESSION['checkout'][$ma_san_pham]*$don_gia;
            $_SESSION['thanh_tien']+=$so_luong*$don_gia;

            $_SESSION['so_luong']-=@$_SESSION['checkout'][$ma_san_pham];
            $_SESSION['so_luong'] +=$so_luong;

            $_SESSION['checkout'][$ma_san_pham]=$so_luong;

            return false;
        }
        if($so_luong ==0)
            $this->delete_product_to_checkout($ma_san_pham,$don_gia);
        return false;
    }


}
?>