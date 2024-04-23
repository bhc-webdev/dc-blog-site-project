<?php
namespace App\Models;

use PDO;

class Blog
{
  public function getConnection()
  {
    // $dsn = "mysql:
    // host=mywebtraining.net;
    // dbname=sherd_SteveHarvey;
    // charset=utf8;
    // port=21";

    $dsn = "mysql:
        host=mywebtraining.net;
        dbname=blogsite;
        charset=utf8;
        port=3304";

    return new PDO($dsn, "adv_php_user", "secret", [
      PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
    ]);
  }
 // method to gat all rows of data from the products table
 public function getData(): array
 {
     // establish db connection
     $conn = $this->getConnection();

     // create db query
     $sql = "SELECT * FROM `blogs`";

     // send query to db
     $stmt = $conn->prepare($sql);

     // execute query
     $stmt->execute();

     // return db result set to Products controller as associative array
     return $stmt->fetchAll(PDO::FETCH_ASSOC);
 }

 // method to get a row(s) from db based on a specific ID 
 // passed from the index.php page in the site root directory
 public function find(string $id): array|bool
 {
     $conn = $this->getConnection();

     $sql = "SELECT * FROM `blogs` WHERE id = :id";

     $stmt = $conn->prepare($sql);
     $stmt->bindValue(":id", $id, PDO::PARAM_INT);
     $stmt->execute();

     return $stmt->fetch(PDO::FETCH_ASSOC);
 }
}