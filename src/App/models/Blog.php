<?php
namespace App\Models;

use PDO;

class Blog
{
  public function getConnection(): PDO
  {
      $dsn = "mysql:
              host={$_ENV['DB_HOST']};
              dbname={$_ENV['DB_NAME']};
              charset=utf8;
              port=21";

      return new PDO($dsn, $_ENV['DB_USER'], $_ENV['DB_PASSWORD'], [
          PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
          PDO::ATTR_EMULATE_PREPARES, false
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