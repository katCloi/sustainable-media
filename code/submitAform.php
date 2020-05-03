<?php
include_once 'myphp_connect.php';
 ?>
 <!DOCTYPE html>
 <html>
 <head>
   <link rel ="stylesheet" type="text/css" href="css/style.css">
<link rel ="stylesheet" type="text/css" href="css/styleextra.css">
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
<!--<form action = "formsubmit.php" method = "POST"> -->
<div class = "main-container">

  <form action = "submit-form.php" method = "POST" class = 'submit-form'>
    <br>
    <h1> Submit a Form </h1>
    <input type = "text" name = "memberID" placeholder = "Enter your MemberID">
    <br>
    <label> Name of Township </label>
    <br>
    <input type = "text" name = "township">
      <br>
      <label> Category: </label>
      <select name = "category">
        <option value=""> Select </option>
        <option value="Air"> Air </option>
        <option value = "Water"> Water </option>
        <option value = "Chemicals and Toxics"> Chemicals and Toxics </option>
        <option value = "Land, Waste, and Cleanup"> Land, Waste, and Cleanup </option>
        <option value = "Greener Living"> Greener Living </option>
        <option value ="Health"> Health </option>
        <option value = "Other"> Other </option>
      </select>
      <br> <br>
      <label> Summary </label>
      <br>
      <textarea rows="4" cols="50" name="summary"></textarea>
      <br><br>
      <label> Importance: </label>
      <select name = "importance">
        <option value=""> Select </option>
        <option value="High"> High </option>
        <option value="Medium"> Medium </option>
        <option value="Low"> Low </option>
      </select>
      <br>
      <br>
      <label> Who is affected by this? </label>
      <br>
    <input type = 'text' name = "affected">
      <br>
      <label> How do you suggest we solve this? </label>
      <br>
    <input type = 'text' name = "solutions">
      <br>

      <button type = "submit" name = "submit"> Submit Form </button>
      <br><br>

  </form>

    <div class = "open-info">
    <button class = "affect2" onclick = "openInfo()"> <b>? </b> </button>
      </div>
  <div class = "info-popup" id = "moreInfo">
    <form class = "info-container" >
      <button  type="button" onclick = "closeInfo()"> close </button>
      <br>
      <br><br>
      <label> <b>Member ID:</b> Enter the ID assigned to your account.
      If you do not know, refer to your profile info.
      <br><br>
      <b>Township:</b> The city or town where this problem is occuring.
      <br><br>
      <b>Category:</b> Pick which best fits the issue.
      <br><br>
      <b>Summary:</b> Summarize what events are happening surrounding the problem.
      <br><br>
      <b>Importance:</b> Tell us the importance of this issue.
      <br><br>
      <b>Affected:</b> Who do you think is affected the most by this issue?Ex: neighborhood, town, school, etc;
      <br><br>
      <b>Solution:</b> Suggest some solutions you think could solve this problem.
      </label>
    </form>
  </div>

</div>
<script>
  function openInfo(){
     document.getElementById("moreInfo").style.display = "block";
  }
  function closeInfo(){

  document.getElementById("moreInfo").style.display = "none";

  }

</script>

 </body>
 </html>
