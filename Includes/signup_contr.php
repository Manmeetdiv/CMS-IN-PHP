<?php


declare(strict_types=1);

function is_input_empty($username,$password,$firstname,$lastname,$email) {

  if (empty($username) || empty($password)  || empty($firstname)  || empty($lastname)  || empty($email) ){
    return true;
  }

  else {
    return false;
  }
}


function is_email_valid($email) {

  if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
    return true;
  }

  else {
    return false;
  }
}

function is_username_taken(object $pdo , $username) {

  if (getusername($pdo, $username)) {
    return true;
  }
  else {
    return false;
  }
}


function is_email_taken(object $pdo , $email) {

  if (getemail($pdo, $email)) {
    return true;
  }
  else {
    return false;
  }
}



function create_user(object $pdo ,string $username, string $password, string $firstname, string $lastname, string $email) {
  set_user($pdo ,$username, $password, $firstname, $lastname, $email);
}







    //$query = "INSERT INTO users (user_name,pass_word,first_name,last_name,email) VALUES (:user_name,:pass_word,:first_name,:last_name,:email);";
  //  $stmt = $pdo->prepare($query);

   // $stmt->bindParam(":user_name",$username);
   // $stmt->bindParam(":pass_word",$password);
   // $stmt->bindParam(":first_name",$firstname);
  // // $stmt->bindParam(":last_name",$lastname);
  //  $stmt->bindParam(":email",$email);
//
   // $stmt->execute();

   // $pdo = null;
 //   $stmt = null;//