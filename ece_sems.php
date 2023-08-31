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
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Choose your Semester | BMSCE Student Companion</title>
    <link rel="shortcut icon" type="image/png" href="image/bmsce.png" >
</head>

<style>

body {
    margin: 0;
    padding: 0;
    width: 100%;
    height: 100vh;
    display: flex;
    flex-direction: row;
    justify-content: center;
    align-items: center;
    background: #000;
}

.glow-on-hover {
    width: 220px;
    height: 50px;
    border: none;
    outline: none;
    color: #fff;
    background: #111;
    cursor: pointer;
    position: relative;
    z-index: 0;
    border-radius: 10px;
}

.glow-on-hover:before {
    content: '';
    background: linear-gradient(45deg, #ff0000, #ff7300, #fffb00, #48ff00, #00ffd5, #002bff, #7a00ff, #ff00c8, #ff0000);
    position: absolute;
    top: -2px;
    left:-2px;
    background-size: 400%;
    z-index: -1;
    filter: blur(5px);
    width: calc(100% + 4px);
    height: calc(100% + 4px);
    animation: glowing 20s linear infinite;
    opacity: 0;
    transition: opacity .3s ease-in-out;
    border-radius: 10px;
}

.glow-on-hover:active {
    color: #000
}

.glow-on-hover:active:after {
    background: transparent;
}

.glow-on-hover:hover:before {
    opacity: 1;
}

.glow-on-hover:after {
    z-index: -1;
    content: '';
    position: absolute;
    width: 100%;
    height: 100%;
    background: #111;
    left: 0;
    top: 0;
    border-radius: 10px;
}

@keyframes glowing {
    0% { background-position: 0 0; }
    50% { background-position: 400% 0; }
    100% { background-position: 0 0; }
}

</style>

<body style="font-family: Arial, Helvetica, sans-serif ; text-align: center; background-image: url('sgpawall.jpeg'); color:white;">

    <div>
        <A HREF="dashboard.php" target="_blank"><img src="image/bmsce.png" height="200"></A>
        <H1 style="text-align: center; font-size: 25px;">CHOOSE YOUR SEMESTER</H1>
    </div>
    <BR>
    <div style="align-content:center;">
      <ul style="font-family: 'Times New Roman', Times, serif; text-align: left">
        <a href="cse_sems.php"><button class="glow-on-hover">First Semester</button></a>
        <BR></br>
        <a href="ece_sems.php"><button class="glow-on-hover">Second Semester</button></a>
        <BR></br>
        <a href="mech_sems.php"><button class="glow-on-hover">Third Semester</button></a>
        <BR></br>
        <a href="civil_sems.php"><button class="glow-on-hover">Fourth Semester</button></a>
        <BR></br>
        <a href="chem_sems.php"><button class="glow-on-hover">Fifth Semester</button></a>
        <BR></br>
        <a href="ise_sems.php"><button class="glow-on-hover">Sixth Semester</button></a>
        <BR></br>
        <a href="mech_sems.php"><button class="glow-on-hover">Seventh Semester</button></a>
        <BR></br>
        <a href="mech_sems.php"><button class="glow-on-hover">Eighth Semester</button></a>
        <BR></br>
      </ul>
    </div>
</body>
</html>