<?php


namespace App\Controllers;

use App\Models\Blog;
use Framework\Viewer;

class Blogs
{
    public function index()
    {
        // create new model object
        $model = new Blog;

        // call getData() method from product model
        // assign result set to $products variable
        $blogs = $model->getData();

        if (!$blogs) {

            exit("Blog not found");
        }
        $viewer = new Viewer;

        echo $viewer->render("shared/header.php", [
            "title" => "Blogs"
        ]);

        echo $viewer->render("shared/nav.php");

        echo $viewer->render("Blogs/index.php", [
            "blogs" => $blogs
        ]);
    }

    public function show(string $id = NULL)
    {
        $model = new Blog;

        $blog = $model->find($id);

        if (!$blog) {
            exit("Blog not found");
        }

        $viewer = new Viewer;

        echo $viewer->render("shared/header.php", [
            "title" => "Blog"
        ]);
        echo $viewer->render("shared/nav.php");

        // pass db result set to view in array named "blog"
        echo $viewer->render("Blogs/show.php", [
            "blog" => $blog
        ]);
    }
}
