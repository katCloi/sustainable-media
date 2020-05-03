<?php
include_once 'myphp_connect.php';
 ?>
 <!DOCTYPE html>
 <html>
 <head>
   <link rel ="stylesheet" type="text/css" href="css/style.css">
   <title> Home Page </title>
 </head>
 <body>
   <div class ="bg-image">
   <div class = "main_header" >
     <h1> Sustainable Media </h1>
     <form action="signupPage.php">
       <div class = "btnstyle">
       <button class = "affect" type = "submit" > Sign Up </button>
     </div>
     </form>
   </div>
 </div>
   <div class="navbar">
  <a href="homePage.php">Home</a>
  <a href="searchFormPage.php">Search Forms</a>
  <a href="submitAform.php">Submit a Form</a>
  <a href="login.php" class="right">Login</a>
</div>
<br> <br>
<div class = "main-container">
  <form class = "submit-form">
    <br>
    <h1> Login </h1>
    <input type = "text" name = "userN" placeholder = "Username">
    <br>
    <input type = "text" name = "userP" placeholder = "Password">
    <br>
    <button type = "submit" name = "submit"> Sign Up </button>
    <br><br>
  </form>
</div>
 </body>
 </html>
