<?php
  include_once 'header.php';
?>

  <section class= "login-form">
    <h2>Log In</h2>
      <form action="includes/login-inc.php" method="post">
        <div class="namecss">
        <input  type="text" name="name" placeholder="Full name..."><br>
        </div>
        <div class="emailcss">
        <input  type="text" name="email" placeholder="Email..."><br>
        </div>
        <div class="pwdcss">
        <input  type="password" name="pwd" placeholder="Password..."><br>
      </div>
        <div class="roletitle">
		    <label class="form-label">Select User Type:</label>
		  </div>
		  <select class="rolecss"
		          name="role"
		          aria-label="Default select example">
			  <option selected value="teacher">Teacher</option>
        <option selected value="student">Student</option>
			  <option value="admin">Admin</option>
		  </select>
        <button class ="button" type="submit" name="submit">Log In</button>
      </form>
  </section>
