<?php

class Blogs
{
    public function index()
    {
        require "src/models/blog.php";
        $model = new Blog;
        $blogs = $model->getData();

        require "views/home.php";
    }

    public function show()
    {
        require "views/home.php";
    }
}