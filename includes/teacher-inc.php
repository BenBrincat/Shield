<?php
session_start();
include "database-inc.php";

if (isset($_POST["coursename"]) && isset($_POST["studentname"]))
{
  function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }


  $coursename = test_input($_POST["coursename"]);
  $studentname = test_input($_POST["studentname"]);



    $sql = "INSERT INTO teacher(course, students) VALUES('$coursename', '$studentname')";
    $result = mysqli_query($conn, $sql);
    if($result){
      echo "Course has been uploaded";
    } else if (!$result) {
    	die ('error ' . mysqli_error($conn));
    	//exit();
    }
  }else {
    echo "not all fields done";
  }
