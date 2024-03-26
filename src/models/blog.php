<?php

class Blog
{
  public function getData(): array
  {
    // $dsn = "mysql:
    // host=mywebtraining.net;
    // dbname=sherd_RickJames;
    // charset=utf8;
    // port=21";
    $dsn = "mysql:
        host=mywebtraining.net;
        dbname=blogsite;
        charset=utf8;
        port=3304";
    $pdo = new PDO($dsn, "sherd_RickJames", "QnepmMdV", [
      PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
    ]);

    $stmt = $pdo->query("SELECT * FROM `blogs`");

    return $stmt->fetchAll(PDO::FETCH_ASSOC);
  }
}