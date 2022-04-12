<?php
include "models/m_category_product.php";
class c_category_product
{
    public function add_category()
    {
        $m_category = new m_category_product();
        if (isset($_POST['btn-submit'])) {
            $ma_loai = NULL;
            $ten_loai = $_POST['ten_loai'];
            $mo_ta = $_POST['mo_ta'];

            $result_insert = $m_category->insert_category($ma_loai, $ten_loai, $mo_ta );
            if ($result_insert != "") {
                echo "<script> alert('Thêm thành công dữ liệu');window.location='category_product.php' </script>";
            } else {
                echo "<script> alert('Thêm dữ liệu không thành công') ;window.location='add_category_product.php' </script>";
            }
        }
        $view = "views/category_products/v_add_category.php";
        include("templates/layout.php");
    }

    public function view_category()
    {
        $m_category = new m_category_product();
        $category = $m_category->read_category();
        $view = "views/category_products/v_category.php";
        include "templates/layout.php";
    }

    public function edit_category()
    {
        $m_category = new m_category_product();
        if (isset($_GET['ma_loai'])) {
            $category_detail = $m_category->read_category_by_id_category($_GET['ma_loai']);
            if (isset($_POST['btn-submit'])) {
                $ma_loai = $_GET['ma_loai'];
                $ten_loai = $_POST['ten_loai'];
                $mo_ta = $_POST['mo_ta'];
                $result = $m_category->edit_category($ma_loai, $ten_loai, $mo_ta );
                if ($result) {
                    echo "<script>alert('Sửa dữ liệu thành công');window.location='category_product.php'</script>";
                }else{
                    echo "<script>alert('Sửa dữ liệu không thành công');window.location='edit_category_product.php'</script>";

                }
            }
        }
        $view = "views/category_products/v_edit_category.php";
        include "templates/layout.php";
    }

    function  delete_category()
    {
        if(isset($_GET["ma_loai"]))
        {
            $ma_loai = $_GET["ma_loai"];
            $m_category = new m_category_product();
            $kq = $m_category->delete_category($ma_loai);
            if($kq)
            {
                echo "<script>alert('Xóa thành công');window.location='category_product.php'</script>";

            }
        }
    }
}