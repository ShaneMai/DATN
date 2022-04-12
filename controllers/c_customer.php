<?php

class c_customer
{
    public function __construct()
    {
        include_once('models/m_customer.php');
    }

    public function order()
    {
        if (isset($_POST['submit'])) {
            $ma_khach_hang = NULL;
            $ten_khach_hang = $_POST['ten_khach_hang'];
            $gioi_tinh = $_POST['gioi_tinh'];
            $ngay_sinh = $_POST['ngay_sinh'];
            $dia_chi = $_POST['dia_chi'];
            $dien_thoai = $_POST['dien_thoai'];
            $email = $_POST['email'];
            $ghi_chu = $_POST['ghi_chu'];
            $m_customer = new m_customer();
            $ma_khach_hang = $m_customer->insert_customer($ma_khach_hang, $ten_khach_hang, $gioi_tinh, $ngay_sinh, $dia_chi, $dien_thoai, $email, $ghi_chu );

            if ($ma_khach_hang > 0) {
                $ngay_hd = date('Y-m-d');
                $tri_gia = 0;
                //$tien_dat_coc=$_POST['tien_dat_coc'];
                $httt = $_POST['httt'];

                $hoa_don = $m_customer->add_invoice($ngay_hd, $ma_khach_hang, $tri_gia, $httt);
                if ($hoa_don > 0) {
                    include_once('controllers/c_checkout.php');
                    $c_checkout = new c_giohang();
                    $checkout = $c_checkout->get_checkout();

                    foreach ($checkout as $key => $value) {


                        if (substr($key, 0, 1) == 't')
                            $m_customer->add_detail_invoice($hoa_don, substr($key, 1, strlen($key) - 1), $value, 0);
                        else
                            $m_customer->add_detail_invoice($hoa_don, $key, $value, 0);
                    }


                    $m_customer->update_product_price($hoa_don);

                    $m_customer->update_total_price($hoa_don);
                    $c_checkout->delete_checkout();
                    //In hoa đơn
                    $view = "views/customer/v_invoice.php";

                    include('templates/frontend/customer/layout.php');
                }
            }
        } else {
            $view = 'views/customer/v_add_customer.php';
            include('templates/frontend/customer/layout.php');
        }
    }
}