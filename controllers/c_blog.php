<?php

class c_blog
{

    public function blog()
    {


        $view = "views/blog/v_blog.php";
        include("templates/frontend/blog/layout.php");
    }

    public function blog_detail()
    {


        $view = "views/blog_detail/v_blog_detail.php";
        include("templates/frontend/blog_detail/layout.php");
    }
}