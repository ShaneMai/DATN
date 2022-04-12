<?php
@session_start();
class c_product{
    public  function  search_product(){
        include ("models/m_product.php");
        $m_product = new m_product();
        $products = $m_product->read_product();
        $str="'";
        foreach($products as $sp)
        {
            $str.=$sp->ten_san_pham. "','";
        }
        $str=substr($str,0,strlen($str)-2);
        $view = 'views/product/v_product.php';
        include('templates/frontend/product/layout.php');
    }
    public function view_product(){
        include ("models/m_product.php");
        $m_product = new m_product();
        $products = $m_product->read_product();
        $m_products = $m_product->read_new_product(0,3);
        $count=count($products);
        // Phân trang
        include("libs/Pager.php");
        $p=new pager();
        $limit="9";
        $count=count($products);
        $pages=$p->findPages($count,$limit);
        $vt=$p->findStart($limit);
        $curpage=$_GET["page"];
        $lst=$p->pageList($curpage,$pages);
        $products=$m_product->read_product($vt,$limit);
        $view = 'views/product/v_product.php';
        include('templates/frontend/product/layout.php');
    }
    public function view_product_by_ma_loai(){
        include ("models/m_product.php");
        $m_product = new m_product();
        $products = $m_product->read_product();
        $ma_loai = $products[0]->ma_loai;
        if(isset($_GET['ma_loai']))
        {
            $ma_loai = $_GET['ma_loai'];
        }
        $products = $m_product->read_product_by_ma_loai($ma_loai);
        $count=count($products);
        // Phân trang
        include("libs/Pager.php");
        $p=new pager();
        $limit="9";
        $count=count($products);
        $pages=$p->findPages($count,$limit);
        $vt=$p->findStart($limit);
        $curpage=$_GET["page"];
        $lst=$p->pageList($curpage,$pages);
        $products=$m_product->read_product_by_ma_loai($ma_loai,$vt,$limit);
        $view = 'views/product/v_product.php';
        include('templates/frontend/product/layout.php');
    }
    public  function view_detail_product()
    {
        include ("models/m_product.php");
        $m_product = new m_product();
        $products = $m_product->read_product();
        $ma_san_pham = $products[0]->ma_san_pham;
        if(isset($_GET["ma_san_pham"]))
        {
            $ma_san_pham = $_GET["ma_san_pham"];
        }
        $product = $m_product->read_product_by_ma_san_pham($ma_san_pham);
        $view = 'views/single_product/v_single_product.php';
        include('templates/frontend/single_product/layout.php');
    }
    public function view_product_home()
    {
        include ("models/m_product.php");
        $m_product = new m_product();
        $newproducts = $m_product->read_new_product(0, 6);

        $bestproducts = $m_product->read_best_product(0, 6);
        $view = 'views/home/v_home.php';
        include('templates/frontend/layout.php');
    }
    public function slide_bar(){
        $m_product = new m_product();
        $m_products = $m_product->read_new_product(0,3);
        $view = "views/product/v_slide_bar";
        include ("templates/frontend/layout.php");
    }
//    public  function Hien_thi_san_pham_ban_chay_nhat()
//    {
//        include ("models/m_san_pham.php");
//        $m_san_pham = new M_san_pham();
//        $bc_san_phams = $m_san_pham->Doc_san_pham_ban_chay_nhat(0, 8);
//
//        $view = 'views/home/v_bestseller_product.php';
//        include('templates/frontend/layout.php');
//    }
}

?>