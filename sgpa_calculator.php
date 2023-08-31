<?php
include('server.php, save_data.php');


session_start();

if( ! isset($_SESSION["username"]) ){  
	header("Location: login.php");
	} 
?>

<!DOCTYPE html>
<html>
<head>
<link rel="shortcut icon" type="image/png" href="image/bmsce.png" >

<title>SGPA Calculator | BMSCE Student Companion</title>

<meta name="viewport" content="width=device-width, initial-scale=1">
<style>

body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}

input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}

input[type=submit] {
  background-color: #04AA6D;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}


.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
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
</head>
<body style="background-color:powderblue; text-align: center;">

<h1 style="font-family: monospace; text-align: center; color: white; font-size: 300%;"><img src="bmsce.png" width="55" height="35"/> SGPA CALCULATOR</h1>

<div class="container">

<h1 style="font-family: Verdana, Geneva, Tahoma, sans-serif; color: #000; text-align: center;">Calculate your SGPA by entering your Marks below out of 100</h1>
<br></br>
    <label>Subject 1 ( 3 Credit Course )</label>
    <input type="number" min="0" max="100" id="sub1" name="sub1" value="" size="200" placeholder="Enter 3 credits course..."/><br /><br />

    <label>Subject 2 ( 4 Credit Course )</label>
    <input type="number"  min="0" max="100" id="sub2" name="sub2" value="" placeholder="Enter 4 credits course..." /><br /><br />

    <label>Subject 3 ( 1 Credit Course )</label>
    <input type="number"  min="0" max="100" id="sub3" name="sub3" value="" placeholder="Enter 1 credits course..."ject /><br /><br />

    <label>Subject 4 ( 3 Credit Course )</label>
    <input type="number"  min="0" max="100" id="sub4" name="sub4" value="" placeholder="Enter 3 credits course..."/><br /><br />

    <label>Subject 5 ( 1 Credit Course )</label>
    <input type="number"  min="0" max="100" id="sub5" name="sub5" value="" placeholder="Enter 1 credits course..."/><br /><br />

    <label>Subject 6 ( 3 Credit Course )</label>
    <input type="number"  min="0" max="100" id="sub6" name="sub6" value="" placeholder="Enter 3 credits course..."/><br /><br />

    <label>Subject 7 ( 1 Credit Course )</label>
    <input type="number"  min="0" max="100" id="sub7" name="sub7" value="" placeholder="Enter 1 credits course..."/><br /><br />

    <label>Subject 8 ( 3 Credit Course )</label>
    <input type="number"  min="0" max="100" id="sub8" name="sub8" value="" placeholder="Enter 3 credits course..."/><br /><br />

    <label>Subject 9 ( 1 Credit Course )</label>
    <input type="number"  min="0" max="100" id="sub9" name="sub9" value="" placeholder="Enter 1 credits course..."/><br /><br />
<br></br>
    <button onclick="document.getElementById('demo').innerHTML=calculateSGPA()" button class="glow-on-hover">Calculate SGPA</button>

    <a href="dashboard.php"><button type="button" class="glow-on-hover">Go Back to Home Page</button></a>

    <p style="font-size:200%" id="demo"></p>

  </form>
</div>

<script>
        function calculateSGPA(){
        var subjects=["sub1","sub2","sub3","sub4","sub5","sub6","sub7","sub8","sub9"];
        var creds=[3,4,1,3,1,3,1,3,1];
        let sumgp=0;
        for(let i=0;i<9;i++){
            sumgp+=creds[i]*(Math.floor((parseInt(document.getElementById(subjects[i]).value))/10)+1);
        }
        let totalcreds=20;
        var sgpa=sumgp/totalcreds;
        console.log("SGPA IS: "+sgpa);
        return(sgpa);
        }
    </script>

</body>
</html>
