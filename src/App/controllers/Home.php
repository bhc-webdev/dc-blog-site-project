<?php

namespace App\Controllers;

use App\Models\Blog;
use Framework\Viewer;

class Home
{
    public function index()
    {
        $model = new Blog;
        $blogs = $model->getData();

        if (!$blogs) {

            exit("Blog not found");
            
        }
        $viewer = new Viewer;

        echo $viewer->render("shared/header.php", [
            "title" => "Home"
        ]);

        echo $viewer->render("shared/nav.php");

        echo $viewer->render("Home/index.php", [
            "blogs" => $blogs
        ]);

        // echo $viewer->render("shared/blogs.php", [
        //     "blogs" => $blogs
        // ]);
    }
}