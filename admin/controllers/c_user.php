<?php
session_start();
include("models/m_user.php");

class c_user
{
    public function add_user()
    {
        $m_user = new m_user();
        if (isset($_POST['btn-submit'])) {
            $ma_nguoi_dung = NULL;
            $ma_loai_nguoi_dung = $_POST['ma_loai_nguoi_dung'];
            $ho_ten = $_POST['ho_ten'];
            $ten_dang_nhap = $_POST['ten_dang_nhap'];
            $mat_khau = $_POST['mat_khau'];
            $email = $_POST['email'];
            $trang_thai = $_POST['trang_thai'];

            $result_insert = $m_user->insert_user($ma_nguoi_dung,$ma_loai_nguoi_dung, $ho_ten,$ten_dang_nhap, $mat_khau, $email,$trang_thai);
            if ($result_insert != "") {
                echo "<script> alert('Thêm thành công dữ liệu');window.location='users.php' </script>";
            } else {
                echo "<script> alert('Thêm dữ liệu không thành công');window.location='users.php'</script>";
            }
        }
        $view = "views/user/v_add_user.php";
        include("templates/layout.php");
    }

    public function view_user()
    {
        $m_user = new m_user();
        $user = $m_user->read_user();
        $view = "views/user/v_user.php";
        include "templates/layout.php";
    }

    public function edit_user()
    {
        $m_user = new m_user();
        if (isset($_GET['ma_nguoi_dung'])) {
            $user_detail = $m_user->read_user_by_id_user($_GET['ma_nguoi_dung']);
            if (isset($_POST['btn-submit'])) {
                $ma_nguoi_dung = $_GET['ma_nguoi_dung'];
                $ma_loai_nguoi_dung = $_POST['ma_loai_nguoi_dung'];
                $ho_ten = $_POST['ho_ten'];
                $ten_dang_nhap = $_POST['ten_dang_nhap'];
                $mat_khau = $_POST['mat_khau'];
                $email = $_POST['email'];
                $trang_thai = $_POST['trang_thai'];
                $result = $m_user->edit_user($ma_nguoi_dung,$ma_loai_nguoi_dung, $ho_ten,$ten_dang_nhap, $mat_khau, $email,$trang_thai);
                if ($result) {
                    echo "<script>alert('Chỉnh sửa thông tin khách hàng thành công');window.location='users.php'</script>";
                }else{
                    echo "<script>alert('Chỉnh sửa thông tin không thành thành công')window.location='users.php'</script>";

                }
            }
        }
        $view = "views/user/v_edit_user.php";
        include "templates/layout.php";
    }

    function delete_user()
    {
        if (isset($_GET["ma_nguoi_dung"])) {
            $ma_nguoi_dung = $_GET["ma_nguoi_dung"];
            $m_user = new m_user();
            $kq = $m_user->delete_user($ma_nguoi_dung);
            if ($kq) {
                echo "<script>alert('Xóa thành công');window.location='users.php'</script>";

            }
        }
    }

    public function check_login()
    {
        if (isset($_POST["login"])) {
            $username = $_POST["username"];
            $password = $_POST["password"];
            $this->save_login($username, $password);
            if (isset($_SESSION['user_admin'])) {
                $title = "Quản lý Cửa Hàng";
                header("location:home.php");
            } else {
                $_SESSION['error'] = "Thông tin đăng nhập không hợp lệ";
                header("location:login.php");
            }
        }
    }

    public function save_login($username, $password)
    {
        $m_user = new m_user();
        $user = $m_user->read_user_by_id_pass($username, $password);
        if ((!empty($user))) {
            $_SESSION['user_admin'] = $user;
        }
    }

    public function logout(){
        unset($_SESSION['user_admin']);
        unset($_SESSION['error']);
    }

}
class c_user_type
{
    public function add_user_type()
    {
        $m_user_type = new m_user_type();
        if (isset($_POST['btn-submit'])) {
            $ma_loai_nguoi_dung = NULL;
            $ten_loai_nguoi_dung = $_POST['ten_loai_nguoi_dung'];

            $result_insert = $m_user_type->insert_user_type($ma_loai_nguoi_dung, $ten_loai_nguoi_dung);
            if ($result_insert != "") {
                echo "<script> alert('Thêm thành công dữ liệu');window.location='user_type.php' </script>";
            } else {
                echo "<script> alert('Thêm dữ liệu không thành công') ;window.location='add_user_type.php' </script>";
            }
        }
        $view = "views/user_type/v_add_user_type.php";
        include("templates/layout.php");
    }

    public function view_user_type()
    {
        $m_user_type = new m_user_type();
        $user_type = $m_user_type->read_user_type();
        $view = "views/user_type/v_user_type.php";
        include "templates/layout.php";
    }

    public function edit_user_type()
    {
        $m_user_type = new m_user_type();
        if (isset($_GET['ma_loai_nguoi_dung'])) {
            $user_type_detail = $m_user_type->read_user_type_by_id_user_type($_GET['ma_loai_nguoi_dung']);
            if (isset($_POST['btn-submit'])) {
                $ma_loai_nguoi_dung = $_GET['ma_loai_nguoi_dung'];
                $ten_loai_nguoi_dung = $_POST['ten_loai_nguoi_dung'];

                $result = $m_user_type->edit_user_type($ma_loai_nguoi_dung, $ten_loai_nguoi_dung);
                if ($result) {
                    echo "<script>alert('Sửa dữ liệu thành công');window.location='user_type.php'</script>";
                }else{
                    echo "<script>alert('Sửa dữ liệu không thành công');window.location='edit_user_type.php'</script>";

                }
            }
        }
        $view = "views/user_type/v_edit_user_type.php";
        include "templates/layout.php";
    }

    function  delete_user_type()
    {
        if(isset($_GET["ma_loai_nguoi_dung"]))
        {
            $ma_loai_nguoi_dung = $_GET["ma_loai_nguoi_dung"];
            $m_user_type = new m_user_type();
            $kq = $m_user_type->delete_user_type($ma_loai_nguoi_dung);
            if($kq)
            {
                echo "<script>alert('Xóa thành công');window.location='user_type.php'</script>";

            }
        }
    }
}
?>