<?php
include ("models/m_product.php");

class c_product
{
    public function add_product()
    {
        $m_product = new m_product();
        if (isset($_POST['btn-submit'])) {
            $ma_san_pham = NULL;
            $ten_san_pham = $_POST['ten_san_pham'];
            $ma_loai = $_POST['ma_loai'];
            $mo_ta_tom_tat = $_POST['mo_ta_tom_tat'];
            $mo_ta_chi_tiet = $_POST['mo_ta_chi_tiet'];
            $don_gia = $_POST['don_gia'];
            $ngay = date_create($_POST['ngay_tao']);
            $ngay_tao = date_format($ngay, "Y-D-M");

            $hinh = ($_FILES['f_hinh_anh']['error'] == 0) ? $_FILES['f_hinh_anh']['name'] : "";
            $result_insert = $m_product->insert_product($ma_san_pham,$ten_san_pham, $ma_loai, $mo_ta_tom_tat, $mo_ta_chi_tiet, $don_gia, $hinh, $ngay_tao);
            if ($result_insert) {
                if ($hinh != "") {
                    //di chuyển hình ảnh vào thư mục source
                    move_uploaded_file($_FILES['f_hinh_anh']['tmp_name'], "../public/layout/img/product/$hinh");
                }
                echo "<script> alert('Thêm thành công dữ liệu');window.location='products.php' </script>";
            } else {
                echo "<script> alert('Thêm dữ liệu không thành công') </script>";
            }
        }
        $view = "views/products/v_add_product.php";
        include("templates/layout.php");
    }

    public function view_product()
    {
        $m_product = new m_product();
        $product = $m_product->read_product();
        $view = "views/products/v_product.php";
        include "templates/layout.php";
    }

    public function edit_product()
    {
        $m_product = new m_product();
        if (isset($_GET['ma_san_pham'])) {
            $product_detail = $m_product->read_product_by_id_product($_GET['ma_san_pham']);
            if (isset($_POST['btn-submit'])) {
                $ma_san_pham = NULL;
                $ten_san_pham = $_POST['ten_san_pham'];
                $ma_loai = $_POST['ma_loai'];
                $mo_ta_tom_tat = $_POST['mo_ta_tom_tat'];
                $mo_ta_chi_tiet = $_POST['mo_ta_chi_tiet'];
                $don_gia = $_POST['don_gia'];
                $ngay = date_create($_POST['ngay_tao']);
                $ngay_tao = date_format($ngay, "Y-D-M");
                $hinh = ($_FILES['f_hinh_anh']['error'] == 0) ? $_FILES['f_hinh_anh']['name'] : $product_detail->hinh;
                $result = $m_product->edit_product($ma_san_pham, $ten_san_pham, $ma_loai,  $mo_ta_tom_tat,$mo_ta_chi_tiet, $don_gia, $hinh, $ngay_tao);
                if ($result) {
                    if ($_FILES['f_hinh_anh']['error'] == 0) {
                        move_uploaded_file($_FILES['f_hinh_anh']['tmp_name'], "../public/layout/img/product/$hinh");
                    }
                    echo "<script>window.location='products.php'</script>";
                } else {
                    echo "<script>alert('Sửa dữ liệu không thành công')</script>";

                }
            }
        }
        $view = "views/products/v_edit_product.php";
        include "templates/layout.php";
    }

    function delete_product()
    {
        if (isset($_GET["ma_san_pham"])) {
            $ma_san_pham = $_GET["ma_san_pham"];
            $m_product = new m_product();
            $result = $m_product->delete_product($ma_san_pham);
            if ($result) {
                echo "<script>alert('Xóa thành công');window.location='products.php'</script>";

            }
        }
    }
}