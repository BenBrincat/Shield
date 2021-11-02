<?php
session_start();
  include 'database-inc.php';

  $sql = "SELECT course FROM teachers";
  $result = mysqli_query($conn, $sql);
  $row = mysqli_fetch_assoc($result);
  while($rows=mysqli_fetch_assoc($result)) {
    if ($SESSION['name'] == $_POST['$studentname']){
    echo $coursename;
    }
}
