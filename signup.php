<?php
  include_once 'header.php';
?>

  <section class= "signup-form">
    <h2>Sign Up</h2>
      <form action="includes/signup-inc.php" method="post">
        <input  type="text" name="name" placeholder="Full name...">
        <input  type="text" name="email" placeholder="Email...">
        <input  type="password" name="pwd" placeholder="Password..."><br>
        <form name="role">
            <input  type="radio" name="role" value="Admin">
		        <label for="Admin">Admin</label><br>
            <input  type="radio" name="role" value="Teacher">
		        <label for="Teacher">Teacher</label><br>
            <input  type="radio" name="role" value="Student">
		        <label for="Student">Student</label><br>
		    </form>
        <button type="submit" name="submit">Sign Up</button>
      <input type="reset">

      </form>
  </section>
