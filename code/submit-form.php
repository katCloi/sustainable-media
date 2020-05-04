<!--contributers: Katrina Gutierrez, Anushka Krishnakumar, Lisa Walker-->
<?php
include_once 'myphp_connect.php';
//submit a form and insert new data into database
  $formId = rand(1,10000);
  $memberId = $_POST['memberID'];
  $township = $_POST['township'];
  $category = $_POST['category'];
  $summ = $_POST['summary'];
  $importance = $_POST['importance'];
  $affected = $_POST['affected'];
  $sol = $_POST['solutions'];

$sql = "INSERT INTO COMMUNITY_FORM (FormID, MemberID, Township, Category, Summary, Importance, Affected, Solutions)
VALUES ( '$formId','$memberId','$township', '$category', '$summ', '$importance', '$affected', '$sol');";
mysqli_query($conn, $sql);

//link header when successfully submitted
header("Location: ../DBproject/submitAform.php?submitted=successfully");
?>
