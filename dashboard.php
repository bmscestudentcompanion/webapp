<?php
include('server.php');

session_start();

if( ! isset($_SESSION["username"]) ){  
	header("Location: login.php");

	} 
?>

<!DOCTYPE html>
<html>

<head>
    <title>Dashboard | BMSCE Student Companion</title>
	<link rel="shortcut icon" type="image/png" href="image/bmsce.png" >
    <link href="https://fonts.googleapis.com/css?family=Poppins:500&display=swap" rel="stylesheet">
    <div class="navbar-brand">

    </div>
	
<style>

body {margin-top: 0px;
  background-color: whitesmoke;}

ul{
	list-style-type: none;
	margin: 0;
	padding: 0;
	display: flex;
	align-items: center;
	background-color: black;
	flex-direction: row;
	justify-content: space-around;
}

li{
	position: relative;
	padding: 0 20px;
	height: 100%;
	display: flex;
}
a{
	z-index: 1;
	color: white;
	text-decoration: none;
	font-family: 'Poppins',sans-serif;
	font-weight: 500;
	font-size: 18px;
	padding: 10px 5px;
}

li:before{
	content: "";
	position: absolute;
	height: 33.33%;
	width: 0;
	background-color: #0D7CFF;
	right: 0;
	z-index: 0;
	top:33.33%;
	transition: all 0.5s;
}
li:after{
	content: "";
	position: absolute;
	height: 33.33%;
	width: 0;
	background-color: #0D7CFF;
	left: 0;
	z-index: 0;
	bottom: 0;
	transition: all 0.5s;
}
a:before{
	position: absolute;
	content: "";
	height: 33.33%;
	width: 0;
	background-color: #0D7CFF;
	bottom: 66.66%;
	left: 0;
	transition: all 0.5s;
}
li:hover:before,
li:hover:after,
li:hover a:before{
	width: 100%;
}

.box{
    float:left;
    margin-right:20px;
}
.clear{
    clear:both;
}

</style>
</head>
<body style="font-family: monospace; font-size : 125%">

<ul>
  <li><a href="https:\\www.bmsce.ac.in" target="_blank"><img src="bmsce.png" alt="bmsce" height="50"></a></li>
  <li><a href="branch.php" target="_blank">Resources</a></li>
  <li><a href="https://bmsce.ac.in/home/AllNews" target="_blank">News</a></li>
  <li><a href="forums.php" target="_blank">Student Forum</a></li>
  <li><a href="profile_page.php">Profile</a></li>
  <li><a href="sgpa_calculator.php">SGPA Calculator</a></li>
  <li style="float:right"><a class="active" href="index.php?logout='1'">Sign Out</a></li>
</ul>

<br></br><br></br><br></br><br></br><br></br><br></br><br></br><br></br><br></br><br></br><br></br><br></br><br></br><br></br><br></br><br></br><br></br><br></br><br></br>



<footer style="padding:17px; background-color:rgb(0, 0, 0); text-align: center;">

  <a href="https://bmsce.ac.in/home/Contact-us" target="_blank">
    <img src="contact_us.png" style="width:13%;">
  </a>

</footer>

</body>
</html>

