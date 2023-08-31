<?php
include('server.php');

session_start();

if( ! isset($_SESSION["username"]) ){  
	header("Location: login.php");
	} 
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="forumstyle.css">
<link rel="shortcut icon" type="image/png" href="image/bmsce.png" >
<title>Club Information | BMSCE Student Companion</title>
<style></style>
</head>
<body style="background-image: url('sgpawall.jpeg');">
<div class="container">
    <h1 style="text-align: center;"><img src="bmsce.png" width="55" height="35"/> CLUB INFORMATION DISPLAY</h1>
    <br></br>
    <label for="ClubName">Club Name:</label>
    <input type="text" id="username">

    <label for="ClubID">Club ID:</label>
    <input type="number" id="clubID">

    <label for="ClubInfo">Club Information:</label>
    <input type="text" id="info"></textarea>

    <br></br>
    <br></br>

    <button class="glow-on-hover" onclick="saveInfo()">Submit Info</button>
    <br></br>
    <br></br>


  <div id="infoContainer"></div>

  <a href="dashboard.php"><button type="button" class="glow-on-hover">Go Back to Home Page</button></a>


</div>
    <script src="script.js"></script>
</body>
</html>
