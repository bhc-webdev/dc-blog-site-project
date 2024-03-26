<?php

class Blog
{
  public function getData(): array
  {
    $dsn = "mysql:
    host=mywebtraining.net;
    dbname=sherd_SteveHarvey;
    charset=utf8;
    port=21";
    $pdo = new PDO($dsn, "sherd_SteveHarvey", "gtMEbeEc", [
      PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
    ]);

    $stmt = $pdo->query("SELECT * FROM `blogs`");

    return $stmt->fetchAll(PDO::FETCH_ASSOC);
  }
}

?>