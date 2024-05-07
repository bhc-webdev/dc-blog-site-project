<?php

namespace App\Controllers;

use Framework\Viewer;

class About
{
    public function index()
    {
        $viewer = new Viewer;

        echo $viewer->render("shared/header.php", [
            "title" => "About Us"
        ]);

        echo $viewer->render("shared/nav.php");

        echo $viewer->render("Pages/about.php");

        echo $viewer->render("shared/footer.php");

        // echo $viewer->render("shared/blogs.php", [
        //     "blogs" => $blogs
        // ]);
    }
}