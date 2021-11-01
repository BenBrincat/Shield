<?php
  include_once 'header.php';
?>

  <section class= "Courses">
    <h2>Enter a new Course </h2>
      <form action="includes/login-inc.php" method="post">
        <input  type="text" name="coursename" placeholder="Course name..."><br>
        <input  type="text" name="email" placeholder="Email...">
        <input  type="password" name="pwd" placeholder="Password...">
        <div class="mb-1">
		    <label class="form-label">Select User Type:</label>
		    </div>
        <button type="submit" name="submit">Log In</button>
      </form>
  </section>
