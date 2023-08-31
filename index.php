<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: login.php");
  }
?>

<?php
$redirectUrl = 'dashboard.php'; 

?>


<!DOCTYPE html>
<html>

<head>
<link rel="shortcut icon" type="image/png" href="image/bmsce.png" >

	<title>Redirecting to your Account...</title>
	<link rel="stylesheet" type="text/css" href="style.css">

	<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            var count = 3; 
            var redirectUrl = '<?php echo $redirectUrl; ?>';

            function updateCountdown() {
                $('#countdown').text(count);
                if (count <= 0) {
                    window.location.href = redirectUrl;
                } else {
                    count--;
                    setTimeout(updateCountdown, 1000);
                }
            }
            updateCountdown();
        });
    </script>

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
<h2 style="font-family: monospace; text-align: center; color: white; font-size: 250%;"><img src="bmsce.png" width="55" height="35"/> WELCOME TO BMSCE STUDENT COMPANION...</h1>
</div>



<div class="content">
  	<?php if (isset($_SESSION['success'])) : ?>
      <div class="error success" >
      	<h3>
          <?php 
          	echo $_SESSION['success']; 
          	unset($_SESSION['success']);
          ?>
      	</h3>
      </div>
  	<?php endif ?>


    <?php  if (isset($_SESSION['username'])) : ?>
    	<p>Welcome <strong><?php echo $_SESSION['username']; ?></strong></p>

		<p>Redirecting in <span id="countdown">3</span>...</p>

    	<p style="text-align: right;"><a href="index.php?logout='1'" style="color: red;">Logout</a></p>

    <?php endif ?>
</div>
</body>




</html>