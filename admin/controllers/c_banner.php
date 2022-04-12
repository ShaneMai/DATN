<?php
include "models/m_banner.php";

class c_banner
{
    public function add_banner()
    {
        $m_banner = new m_banner();
        if (isset($_POST['btn-submit'])) {
            $ma_tieu_de = NULL;
            $ten_tieu_de = $_POST['ten_tieu_de'];
            $trang_thai = $_POST['trang_thai'];

            $hinh_tieu_de = ($_FILES['f_hinh_anh']['error'] == 0) ? $_FILES['f_hinh_anh']['name'] : "";
            $result_insert = $m_banner->insert_banner($ma_tieu_de, $ten_tieu_de, $hinh_tieu_de, $trang_thai);
            if ($result_insert) {
                if ($hinh_tieu_de != "") {
                    //di chuyển hình ảnh vào thư mục source
                    move_uploaded_file($_FILES['f_hinh_anh']['tmp_name'], "../public/layout/img_banner/$hinh_tieu_de");
                }
                echo "<script> alert('Thêm thành công dữ liệu');window.location='banner.php' </script>";
            } else {
                echo "<script> alert('Thêm dữ liệu không thành công');window.location='banner.php' </script>";
            }
        }
        $view = "views/banner/v_add_banner.php";
        include("templates/layout.php");
    }

    public function view_banner()
    {
        $m_banner = new m_banner();
        $banner = $m_banner->read_banner();
        $view = "views/banner/v_banner.php";
        include "templates/layout.php";
    }

    public function edit_banner()
    {
        $m_banner = new m_banner();
        if (isset($_GET['ma_tieu_de'])) {
            $banner_detail = $m_banner->read_banner_by_id_banner($_GET['ma_tieu_de']);
            if (isset($_POST['btn-submit'])) {
                $ma_tieu_de = $_GET['ma_tieu_de'];
                $ten_tieu_de = $_POST['ten_tieu_de'];
                $trang_thai = $_POST['trang_thai'];
                $hinh_tieu_de = ($_FILES['f_hinh_anh']['error'] == 0) ? $_FILES['f_hinh_anh']['name'] : $banner_detail->hinh_tieu_de;
                $result = $m_banner->edit_banner($ma_tieu_de, $ten_tieu_de, $hinh_tieu_de, $trang_thai);
                if ($result) {
                    if ($_FILES['f_hinh_anh']['error'] == 0) {
                        move_uploaded_file($_FILES['f_hinh_anh']['tmp_name'], "../public/layout/img_banner/$hinh_tieu_de");
                    }
                    echo "<script>alert('Sửa dữ liệu thành công');window.location='banner.php'</script>";
                }else{
                    echo "<script>alert('Sửa dữ liệu không thành công');window.location='banner.php'</script>";

                }
            }
        }
        $view = "views/banner/v_edit_banner.php";
        include "templates/layout.php";
    }

    function  delete_banner()
    {
        if(isset($_GET["ma_tieu_de"]))
        {
            $ma_tieu_de = $_GET["ma_tieu_de"];
            $m_banner = new m_banner();
            $kq = $m_banner->delete_banner($ma_tieu_de);
            if($kq)
            {
                echo "<script>alert('Xóa thành công');window.location='banner.php'</script>";

            }
        }
    }
}