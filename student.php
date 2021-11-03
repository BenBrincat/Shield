<?php
session_start();
  include 'header.php';
  include 'includes/database-inc.php';
  //include 'includes/teacher-inc.php';
?>
<section class="studentpage">
<h3> Student Logged in</h3>
<?php
echo $_SESSION['name'];
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
      <br><td><?php echo $rows['course']; ?></td>
  </tr>
<?php
}
?>

<?php
}
?>
</section>
