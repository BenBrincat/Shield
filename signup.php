<?php
  include_once 'header.php';
?>
<link rel="stylesheet" href="css/style.css">
  <section class= "signup-form">
    <h2>Sign Up</h2>
      <form action="signup-inc.php" method="post">
        <input  type="text" name="name" placeholder="Full name...">
        <input  type="text" name="email" placeholder="Email...">
        <input  type="password" name="pwd" placeholder="Password...">
        <button type="submit" name="submit">Sign Up</button>
      </form>
  </section>
