<?php

function emptyInputSignup($name, $email, $pwd, $role) {
  $result;
  if(empty($name) || empty($email) || empty($pwd) || empty($role)){
      $result = true;
  } else {
      $result = false;
  }
}

function invalidEmail($email) {
  $result;
    if(filter_var($email, FILTER_VALIDATE_EMAIL)){
      $result = true;
  } else {
      $result = false;
  }
}

function emailExists($conn, $email){
  $sql = "SELECT * FROM users WHERE email = ?;";
  $stmt - mysqli_stmt_init($conn);

   mysqli_stmt_bind_param($stmt, "s", $email);
   mysqli_stmt_execute($stmt);

   $resultData = mysqli_stmt_get_result($stmt);

   if ($row = mysqli_fetch_assoc($resultData)) {
     return $row;
   } else {
     $result = false;
     return $result;
   }
   mysqli_stmt_close($stmt);
}

function createUser($conn, $role, $email, $pwd, $name){
  $sql = "INSERT INTO users (role, email, password, name) VALUES(?, ?, ?, ?);";
  $stmt - mysqli_stmt_init($conn);

   mysqli_stmt_bind_param($stmt, "ssss", $role, $email, $pwd, $name);
   mysqli_stmt_execute($stmt);
   mysqli_stmt_close($stmt);
   header("location: ../signup.php?error=none");
   exit();
}
