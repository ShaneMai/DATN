<?php
class c_about {
    public function __construct()
    {

    }
    public function about(){
        $view = "views/about/v_about.php";
        include ("templates/frontend/about/layout.php");
    }
}