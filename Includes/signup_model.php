<?php


declare(strict_types=1);

function getusername(object $pdo, $username) {

  $query = "SELECT user_name FROM users WHERE user_name= :username;";
  $stmt = $pdo->prepare($query);
  $stmt->bindParam(":username" , $username);
  $stmt->execute();

  $result = $stmt->fetch(PDO::FETCH_ASSOC);
  return $result;

}

function getemail(object $pdo, $email) {

  $query = "SELECT email FROM users WHERE email= :email;";
  $stmt = $pdo->prepare($query);
  $stmt->bindParam(":email" , $email);
  $stmt->execute();

  $result = $stmt->fetch(PDO::FETCH_ASSOC);
  return $result;

}


function set_user(object $pdo ,string $username, string $password, string $firstname, string $lastname, string $email){
  
  $query = "INSERT INTO users (user_name	,pass_word , first_name , last_name, email) VALUES (:user_name,:pass_word,:first_name,:last_name,:email);";
  $stmt = $pdo->prepare($query);

  $options = [
    'cost' => 12
  ];
  $hashedpsw = password_hash($password , PASSWORD_BCRYPT, $options);
  $stmt->bindParam(":user_name" , $username);
  $stmt->bindParam(":pass_word" , $hashedpsw);
  $stmt->bindParam(":first_name" , $firstname);
  $stmt->bindParam(":last_name" , $lastname);
  $stmt->bindParam(":email" , $email);
  $stmt->execute();


};