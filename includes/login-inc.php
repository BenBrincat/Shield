<?php
session_start();
include "database-inc.php";
if (isset($_POST["name"]) && isset($_POST["email"]) && isset($_POST["password"]) && isset($_POST["role"]))
{
  function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }


  $name = test_input($_POST["name"]);
  $email = test_input($_POST["email"]);
  $password = test_input($_POST["password"]);
  $role = test_input($_POST["role"]);

  if (empty($name)){
    header("location: ../login.php?error=invalidname");
  } else if (empty($email)){
    header("location: ../login.php?error=invalidemail");
  } else if (empty($password)){
    header("location: ../login.php?error=invalidpassword");
  } else{
    // hashing pass
    $password = md5($password);
    //echo $password;
    $sql = "SELECT * FROM users WHERE name='$name'";
    $result = mysqli_query($conn, $sql);
    //$rowcount= mysqli_num_rows($result);
    if (!$result) {
    	die ('error ' . mysqli_error($conn));
    	//exit();
    }

    if (mysqli_num_rows($result) === 1) {
         // the user name must be unique
         $row = mysqli_fetch_assoc($result);
         if ($row['name'] === $name && $row['email'] === $email) {
        		$_SESSION['name'] = $row['name'];
        		$_SESSION['email'] = $row['email'];
        		$_SESSION['role'] = $row['role'];
            $_SESSION['password'] = $row['password'];


            if ($_SESSION['role'] == 'teacher'){
              header("Location: ../teacher.php");
            } else if($_SESSION['role'] == 'student'){
              header("Location: ../student.php");
            }
          }
          else {
          		header("Location: ../index.php?error=Incorect User name or password");

          	}
        }


  	}

  }else {
  	header("Location: ../index.php");
  }
