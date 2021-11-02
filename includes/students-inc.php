<?php

if($_SESSION['role'] == 'student') {

    $sql = "SELECT * FROM users ORDER BY id ASC";
    $res = mysqli_query($conn, $sql);
}else{
	header("Location: index.php");
}
