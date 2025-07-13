<?php 
if ($_SERVER["REQUEST_METHOD"] === "POST") {
  $username = $_POST["email"];
  $password = $_POST["pswd"];


   try {
    require_once "dbh.php";
    require_once "login_model.php";
    require_once "login_contr.php";

    //Error Handlers


  } catch (PDOException $e) {
    die("Query failed: " . $e->getMessage());
  }
}



else {
  header("location:../index.php");
  die();
}