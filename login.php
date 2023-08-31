<?php include('server.php') ?>


<!DOCTYPE html>
<html>
<head>
<link rel="shortcut icon" type="image/png" href="image/bmsce.png" >

  <title>Login to your Account | BMSCE Student Companion</title>
  <link rel="stylesheet" type="text/css" href="style.css">


</head>

<style>
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



<body>
  <div class="header">
  <h2 style="font-family: monospace; text-align: center; color: white; font-size: 250%;"><img src="bmsce.png" width="55" height="35"/> LOGIN HERE...</h1>
  </div>
	 
  <form method="post" action="login.php">
  	<?php include('errors.php'); ?>
  	<div class="input-group">
  		<label>Username</label>
  		<input type="text" name="username" >
  	</div>
  	<div class="input-group">
  		<label>Password</label>
  		<input type="password" name="password">
		<br></br>
  	</div>
  	<div class="input-group">
  		<button type="submit" class="glow-on-hover" name="login_user">Login</button>
  	</div>
	
  	<p style="text-align:right">
  		Not yet registered? <a href="register.php">Sign up</a>
  	</p>
  </form>
</body>
</html>