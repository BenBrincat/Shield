<?php
session_start();
  include 'header.php';
  include 'includes/database-inc.php';
?>
<html>
<title>Teacher</title>
<form action="includes/teacher-inc.php" method="post">
  <h2 class = "coursetitle"> Enter a new Course </h2>
      <input  type="text" name="coursename" placeholder="Course name..."><br>

      <h2 class = "coursetitle"> Enter Student Name </h2>
          <input  type="text" name="studentname" placeholder="Student name..."><br>
      <div class="studentable">
        <h2 class="stud ">Students Names</h2>
        <table class="table">
          <thead>
            <tr>
              <th scope="col">Name</th>
              <th scope="col">email</th>
              <th scope="col">Role</th>
            </tr>
          </thead>
          <?php
          $query="SELECT * FROM users";
          $result=mysqli_query($conn,$query);
          while($rows=mysqli_fetch_assoc($result)) {
          ?>
          <?php
          if($rows['role'] == 'student') {
            ?>
          <tr>
              <td><?php echo $rows['name']; ?></td>
              <td><?php echo $rows['email']; ?></td>
              <td><?php echo $rows['role']; ?></td>
          </tr>
          <?php
          }
          ?>

        <?php
          }
          ?>
      </table>
    </div>
      <button class ="tbutton" type="submit" name="submit">Submit</button>

    </form>
</html>
