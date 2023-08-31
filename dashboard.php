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


        
 #container {
      display: flex;
      width: 100%;
      max-width: 1200px;
      margin: 0 auto;
        }
        
 #video-section {
     flex: 1;
     padding: 20px;
        }
        
 #text-section {
     flex: 1;
     padding: 0px;
        }

		.animate-charcter
{
   text-transform: uppercase;
  background-image: linear-gradient(
    -225deg,
    #231557 0%,
    #44107a 29%,
    #ff1361 67%,
    #fff800 100%
  );
  background-size: auto auto;
  background-clip: border-box;
  background-size: 200% auto;
  color: #fff;
  background-clip: text;
  text-fill-color: transparent;
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
  animation: textclip 2s linear infinite;
  text-align: center;
}

.animate-charcter1
{
   text-transform: uppercase;
  background-image: linear-gradient(
    -225deg,
    #231557 0%,
    #44107a 29%,
    #ff1361 67%,
    #fff800 100%
  );
  background-size: auto auto;
  background-clip: border-box;
  background-size: 200% auto;
  color: #fff;
  background-clip: text;
  text-fill-color: transparent;
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
  animation: textclip 2s linear infinite;
  display: inline-block;
}

@keyframes textclip {
  to {
    background-position: 200% center;
  }
}
        


</style>
</head>
<body style="font-family: Arial, Helvetica, sans-serif; font-size : 105%; text-align: justify; background-color: azure;">

<ul>
  <li><a href="https:\\www.bmsce.ac.in" target="_blank"><img src="bmsce.png" alt="bmsce" height="50"></a></li>
  <li><a href="branch.php" target="_blank">Resources</a></li>
  <li><a href="https://bmsce.ac.in/home/AllNews" target="_blank">News</a></li>
  <li><a href="forums.php" target="_blank">Club Info</a></li>
  <li><a href="profile_page.php">Profile</a></li>
  <li><a href="sgpa_calculator.php">SGPA Calculator</a></li>
  <li style="float:right"><a class="active" href="index.php?logout='1'">Sign Out</a></li>
</ul>

<br></br>
<div id="container">
        <div id="video-section">
		<iframe width="520" height="350" src="https://www.youtube.com/embed/4GB4lKCINak?autoplay=1&mute=1"></iframe>
		</div>
        <div id="text-section">
		<h1 class="animate-charcter1">ABOUT US</h1>
            <p>BMSCE is the first private sector initiative in engineering education in India. Over the past 74 years of its illustrious existence, the institution has produced more than 40,000 engineers/leaders who have enriched the world through their immense contributions for mankind. Started with only 03 undergraduate courses, BMSCE today offers 13 Undergraduate & 16 Postgraduate courses both in conventional and emerging areas. 14 of its Departments are recognized as Research Centers offering PhD/M.Sc (Engineering by Research) degrees in Science, Engineering and Management. The College has been effectively practicing outcome based education. The College has one of the largest student populations amongst engineering colleges in Karnataka. Currently about 5000 students are pursuing their higher studies in BMSCE. More than 350 research scholars are pursuing their PhD Degree in BMSCE Research Centres. The College strives to develop technical, professional skills and individual values in its students that help to create foundation for their success.</p>
        </div>
    </div>

	<br></br><hr></hr><br></br>

<div id="container">
       <div id="video-section">
	   <h1 class="animate-charcter">HOME NOTIFICATIONS</h1>
       <iframe src="https://bmsce.ac.in/home/Notifications" height="520" width="560"></iframe>		</div>

		<div id="video-section">
		<h1 class="animate-charcter">COE NOTIFICATIONS</h1>
		<iframe src="https://bmsce.ac.in/home/COE-Notifications" height="520" width="560"></iframe>		</div>
	</div>

	<br></br><hr></hr><br></br>

	<div id="container">
       <div id="video-section">
	   <h1 class="animate-charcter">GET YOUR RESOURCES</h1>
       <iframe src="branch.php" height="520" width="560"></iframe>		</div>

		<div id="video-section">
		<h1 class="animate-charcter">CHECK YOUR RESULTS</h1>
		<iframe src="https://results.bmsce.in/" height="520" width="560"></iframe>		</div>
	</div>

	<br></br><br></br>



<footer style="padding:17px; background-color:rgb(0, 0, 0); text-align: center;">

  <a href="https://bmsce.ac.in/home/Contact-us" target="_blank">
    <img src="contact_us.png" style="width:13%;">
  </a>

</footer>

</body>
</html>


