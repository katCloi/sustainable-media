<!--contributers: Katrina Gutierrez, Anushka Krishnakumar, Lisa Walker-->
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
    <!-- Navigation Bar -->
 </div>
   <div class="navbar">
  <a href="homePage.php">Home</a>
  <a href="searchFormPage.php">Search Forms</a>
  <a href="submitAform.php">Submit a Form</a>
  <a href="login.php" class="right">Login</a>
</div>
<br> <br>
<div class = "main-container">
  <h2 style = "text-align:center" > About Sustainable Media </h2>
  <p> In New Jersey, there are several towns and municipalities that have
    several problems regarding sustainability. These problems could possibly
    include pollution, water scarcity, energy, food production, and other
    environmental problems. Although most people in a particular town may be
    aware of their sustainable issues, others in Jersey would not be. If other
    people in New Jersey are not aware of the problems affecting their
    communities, then it’s impossible for those problems to be solved.
    If more people knew about their sustainable issues, then it’s possible
    that a solution could be provided.</p>

  <p>The objective of the module is to bring awareness to sustainable issues
    in New Jersey communities. Our web application should be able to help users
     have a means of voicing out local sustainability issues while also giving
     journalists a platform to write about these issues. Members of New Jersey
      communities and journalists will both benefit from our website because it will
      give them both a voice and possibly help provide a solution for their
      local problems. </p>
</div>
<br>
<div class = "main-container">
<h3 style = "text-align:center"> Categories </h3>
<p style = "font-weight: bold">Air</p>
<p>
-pollution and your impact <br>
-indoor air issues like asbestos<br>
-air quality research and data <br>
-emissions, greenhouse gases <br>
</p>
<p style = "font-weight: bold">Water</p>
<p>
-drinking water quality <br>
-watersheds and rivers <br>
-wastewater, stormwater, runoff <br>
-infrastructure finance and resilience <br>
</p>
<p style = "font-weight: bold">Chemicals and Toxics</p>
<p>
-formaldehyde, mercury, other substances <br>
-how EPA handles spills <br>
-safer chemicals, TSCA <br>
-databases such as IRIS and SRS <br>
</p>
<p style = "font-weight: bold">Land, Waste, and Cleanup</p>
<p>
-landfills <br>
-hazardous waste <br>
-plastic and waterways<br>
-superfund, cleanups<br>
</p>
<p style = "font-weight: bold">Health</p>
<p>
-effects of common pollutants <br>
-risk and exposure studies <br>
-asthma, children in school buildings <br>
</p>
<p style = "font-weight: bold">Greener Living</p>
<p>
-sustainable energy <br>
-transportation choices <br>
-food waste and recycling <br>
-home and business <br>
</p>


  <p> Topics Reference from <a href = "https://www.epa.gov/environmental-topics"> https://www.epa.gov/environmental-topics </a> </p>
</div>
 </body>
 </html>
