<?php
include "models/m_customer.php";

class c_customer
{
    public function add_customer()
    {
        $m_customer = new m_customer();
        if (isset($_POST['btn-submit'])) {
            $ma_khach_hang = NULL;
            $ten_khach_hang = $_POST['ten_khach_hang'];
            $gioi_tinh = $_POST['gioi_tinh'];
            $ngay_sinh = $_POST['ngay_sinh'];
            $dia_chi = $_POST['dia_chi'];
            $dien_thoai = $_POST['dien_thoai'];
            $email = $_POST['email'];
            $ghi_chu = $_POST['ghi_chu'];

            $result_insert = $m_customer->insert_customer($ma_khach_hang, $ten_khach_hang, $gioi_tinh, $ngay_sinh, $dia_chi, $dien_thoai, $email, $ghi_chu);
            if ($result_insert != "") {
                echo "<script> alert('Thêm thành công dữ liệu');window.location='customers.php' </script>";
            } else {
                echo "<script> alert('Thêm dữ liệu không thành công');window.location='customers.php'</script>";
            }
        }
        $view = "views/customer/v_add_customer.php";
        include("templates/layout.php");
    }

    public function view_customer()
    {
        $m_customer = new m_customer();
        $customer = $m_customer->read_customer();
        $view = "views/customer/v_customer.php";
        include "templates/layout.php";
    }

    public function edit_customer()
    {
        $m_customer = new m_customer();
        if (isset($_GET['ma_khach_hang'])) {
            $customer_detail = $m_customer->read_customer_by_id_customer($_GET['ma_khach_hang']);
            if (isset($_POST['btn-submit'])) {
                $ma_khach_hang = $_GET['ma_khach_hang'];
                $ten_khach_hang = $_POST['ten_khach_hang'];
                $gioi_tinh = $_POST['gioi_tinh'];
                $ngay_sinh = $_POST['ngay_sinh'];
                $dia_chi = $_POST['dia_chi'];
                $dien_thoai = $_POST['dien_thoai'];
                $email = $_POST['email'];
                $ghi_chu = $_POST['ghi_chu'];
                $result = $m_customer->edit_customer($ma_khach_hang, $ten_khach_hang, $gioi_tinh, $ngay_sinh, $dia_chi, $dien_thoai, $email, $ghi_chu);
                if ($result) {
                    echo "<script>alert('Chỉnh sửa thông tin khách hàng thành công');window.location='customers.php'</script>";
                }else{
                    echo "<script>alert('Chỉnh sửa thông tin không thành thành công')window.location='banner.php'</script>";

                }
            }
        }
        $view = "views/customer/v_edit_customer.php";
        include "templates/layout.php";
    }

    function delete_customer()
    {
        if (isset($_GET["ma_khach_hang"])) {
            $ma_khach_hang = $_GET["ma_khach_hang"];
            $m_customer = new m_customer();
            $kq = $m_customer->delete_customer($ma_khach_hang);
            if ($kq) {
                echo "<script>alert('Xóa thành công');window.location='customers.php'</script>";

            }
        }
    }
}