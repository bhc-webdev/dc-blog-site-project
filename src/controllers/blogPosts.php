<?php

class Blogs
{
    public function index()
    {
        require "src/models/blog.php";
        $model = new Blog;
        $blogs = $model->getData();

        require "views/blogList.php";
    }

    public function show()
    {
        require "views/blogShow.php";
    }
}