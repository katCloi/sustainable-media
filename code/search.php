<?php
include_once 'myphp_connect.php';
 ?>
 <!DOCTYPE html>
 <html>
 <head>
   <link rel ="stylesheet" type="text/css" href="css/style.css">
   <title> Results Page </title>
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
  <div class = "search-form">
  <form action = "search.php" method="POST">
    <input type="text" name="search" placeholder="Search">
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

<h1 style = "text-align:center" > Results Page </h1>
  <div class = "commForm-container">

<?php
  if(isset($_POST['submit-search'])){
    $search = mysqli_real_escape_string($conn, $_POST['search']);
    $selectImp = $_POST['importance'];
    $selectCat = $_POST['category'];
    $sql = "SELECT * FROM COMMUNITY_FORM WHERE (Summary LIKE '%$search%' OR  Category LIKE '%$search%'
    OR Township LIKE '%$search%' OR Affected LIKE '%$search%' OR Solutions LIKE '%$search%') AND Importance LIKE '%$selectImp%' AND Category LIKE '%$selectCat%' ";

    $result = mysqli_query($conn, $sql);
    $queryResult = mysqli_num_rows($result);

    echo "There are ".$queryResult." results!";
    echo "<br> <br>";

    if($queryResult > 0){
      while($row = mysqli_fetch_assoc($result)){
        echo "  <div class = 'aClick' >
        <a href = 'formOpen.php?title=".$row['Category']."&sol=".$row['Solutions']."'><div class = 'commForm-box'>
            <br>
            <h3> ".$row['Summary']."</h3>
             <p> Category: ".$row['Category']."</p>
                <p> Township:  ".$row['Township']."</p>
                  <p> Importance: ".$row['Importance']."</p>
                    <p> Who's Affected? ".$row['Affected']."</p>
                      <p> Solutions: ".$row['Solutions']."</p>
                      <br>
      </div> </div><br>";
      }
    } else {
      echo " No matches.";
    }
  }

 ?>
 </div>

</body>
</html>
