<?php
class Connection
{
  public $db;
  public function __construct()
  {
    ob_start();
    session_start();

    $host = "localhost";
    $uname = "root";
    $pass = "";
    $database = "e-com";

    try {
      $this->db =  new PDO("mysql:host=$host; dbname=$database", $uname, $pass);
      $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $error) {
      echo "<p class='invalid'>Connection failed with database</p>";
    }

    date_default_timezone_set('Asia/Kolkata');
  }
}

