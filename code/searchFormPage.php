<!--contributers: Katrina Gutierrez, Kevin McGrath, Gavin Bowman-->
<?php
include_once 'myphp_connect.php';
 ?>
 <!DOCTYPE html>
 <html>
 <head>
   <link rel ="stylesheet" type="text/css" href="css/style.css">
   <title> Search Page </title>
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
    <!-- Navigation Bar -->
 </div>
   <div class="navbar">
  <a href="homePage.php">Home</a>
  <a href="searchFormPage.php">Search Forms</a>
  <a href="submitAform.php">Submit a Form</a>
  <a href="login.php" class="right">Login</a>
</div>
<!-- Search bar with option-->
<br> <br>
<div class = "search-form">
  <form action = "search.php" method="POST">
    <input type="text" name="search" placeholder="Search...">
    <label> Importance: </label>
    <select name = "importance">
      <option value=""> Select </option>
      <option value="high"> High </option>
      <option value="medium"> Medium </option>
      <option value="low"> Low </option>
    </select>
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

    <button style = "font-size: 15px" type = "submit" name="submit-search">Search </button>
  </form>
</div>
<h1 style = "text-align:center"> Search Page </h1>
<h2 style = "text-align:center"> All Forms </h2>
<div class = "commForm-container">
  <?php
    $sql = "SELECT * FROM COMMUNITY_FORM";
    $result = mysqli_query($conn,$sql);
    $queryResult = mysqli_num_rows($result);
    //print out results
      if($queryResult > 0){
        while ($row = mysqli_fetch_assoc($result)){
          echo " <div class = 'aClick' >
          <a href = 'formOpen.php?title=".$row['Category']."&sol=".$row['Solutions']."'>

           <div class = 'commForm-box'>
              <br>
              <h3> ".$row['Summary']."</h3>
               <p> Category: ".$row['Category']."</p>
                  <p> Township:  ".$row['Township']."</p>
                    <p> Importance: ".$row['Importance']."</p>
                      <p> Who's Affected? ".$row['Affected']."</p>
                        <p> Solutions: ".$row['Solutions']."</p>
                        <br>
                        </div>
                  </div>
        <br>";
              }
          }
  ?>
</div>
 </body>
 </html>
