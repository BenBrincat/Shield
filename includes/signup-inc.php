<?php
//include "database-inc.php";
if (isset($_POST["submit"])){

  $name = $_POST["name"];
  $email = $_POST["email"];
  $pwd = $_POST["pwd"];
  $role = $_POST["role"];

  require_once 'database-inc.php';
  require_once 'functions-inc.php';

  if (emptyInputSignup($name, $email, $pwd, $role) !== false){
    header("location: ../signup.php?error=emptyinput");
    exit();
  }
  if (invalidEmail($email) !== false){
    header("location: ../signup.php?error=invalidemail");
    exit();
  }
  if (emailExists($conn, $email) !== false){
    header("location: ../signup.php?error=usernametaken");
    exit();
  }

  createUser($conn, $name, $email, $pwd, $role);


}
else {
  header("location: ../signup.php");
}
