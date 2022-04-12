<?php
class c_home {
    public function __construct()
    {

    }
    public function index(){

            include ("models/m_product.php");
            $m_product = new m_product();
            $new_products = $m_product->read_new_product(0, 6);
            $best_product = $m_product->read_best_product(0, 6);

        $view = "views/home/v_home.php";
        include ("templates/frontend/home/layout.php");
    }
}