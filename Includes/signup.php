<?php 
if ($_SERVER["REQUEST_METHOD"] === "POST") {
  $username = $_POST["email"];
  $password = $_POST["pswd"];
  $firstname = $_POST["firstname"];
  $lastname = $_POST["lastname"];
  $email = $_POST["email"];


  try {
    require_once "dbh.php";
    require_once "signup_model.php";
    require_once "signup_contr.php";


    // Error Handler
    $errors = [];

    if (is_input_empty($username,$password,$firstname,$lastname,$email)) {
      $errors["empty input"]="fill in all fields";
    }

    if (is_email_valid($email)) {
       $errors["invalid email"]="invalid email used";
    }

    if (getusername($pdo, $username)) {
       $errors["username taken"]="Username already taken";
    }

    if (is_email_taken($pdo , $email)) {
       $errors["empty used"]="Email already registred";
    }


    require_once "config_session.php";

    if ($errors) {
      $_SESSION["errors_signup"] = $errors;
      header("location:../index.php");
      die();
    }

    
    create_user($pdo ,$username, $password, $firstname, $lastname, $email);

    header("location:../index.php");

    $pdo = null;
    $stmt = null;
    die();
  } catch (PDOException $e) {
    die("Query failed: " . $e->getMessage());
  }
}

else {header("location:../index.php");
}