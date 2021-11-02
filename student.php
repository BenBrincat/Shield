<?php
session_start();
  include 'header.php';
  include 'includes/database-inc.php';
  //include 'includes/teacher-inc.php';
?>

<h2>Your Courses</h2>
<?php
$query="SELECT * FROM teacher";
$result=mysqli_query($conn,$query);
while($rows=mysqli_fetch_assoc($result)) {
?>
<?php
if ($_SESSION['name'] === $rows['students']){
  ?>
<tr>
    <td><?php echo $rows['course']; ?></td>
</tr>
<?php
}
?>

<?php
}
?>
