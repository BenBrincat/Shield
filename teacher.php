<?php
session_start();
  include 'header.php';
  include 'includes/database-inc.php';
?>
<!DOCTYPE html>
<html>
<title>Teacher</title>
  <h2 class = "coursetitle"> Enter a new Course </h2>
      <input  type="text" name="coursename" placeholder="Course name..."><br>
      <div class="studentable">
        <h2 class="stud ">Students</h2>
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
      <button type="submit" name="submit">Submit</button>
</html>
