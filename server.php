<?php
session_start();

$username = "";
$email = "";
$errors = array();

$azure_mysql_dbname = "student-companion-database";
$azure_mysql_host = "student-companion-server.mysql.database.azure.com";
$azure_mysql_username = "aumxlleamq";
$azure_mysql_password = "IJ26X31VJ74QXS0U$";
$azure_mysql_port = 3306;

$db = mysqli_init();
mysqli_real_connect($db, $azure_mysql_host, $azure_mysql_username, $azure_mysql_password, $azure_mysql_dbname, $azure_mysql_port, NULL, MYSQLI_CLIENT_SSL);

if (!$db) {
    die("Connection failed: " . mysqli_connect_error());
}
$create_table_query = "
    CREATE TABLE IF NOT EXISTS users (
        id INT AUTO_INCREMENT PRIMARY KEY,
        username VARCHAR(255) NOT NULL,
        email VARCHAR(255) NOT NULL,
        password VARCHAR(255) NOT NULL
    )
";
if (isset($_POST['reg_user'])) {
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
  $password_2 = mysqli_real_escape_string($db, $_POST['password_2']);

  if (empty($username)) { array_push($errors, "Username is required..."); }
  if (empty($email)) { array_push($errors, "Email is required..."); }
  if (empty($password_1)) { array_push($errors, "Password is required..."); }
  if ($password_1 != $password_2) {
	array_push($errors, "Both the Passwords do not match...");
  }

  $user_check_query = "SELECT * FROM users WHERE username='$username' OR email='$email' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if ($user) { 
    if ($user['username'] === $username) {
      array_push($errors, "Username already exists...");
    }

    if ($user['email'] === $email) {
      array_push($errors, "Email already exists...");
    }
  }

  if (count($errors) == 0) {
  	$password = md5($password_1);

  	$query = "INSERT INTO users (username, email, password) 
  			  VALUES('$username', '$email', '$password')";
  	mysqli_query($db, $query);



  	header('location: login.php');
    

    

  }
}

if (isset($_POST['login_user'])) {
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $password = mysqli_real_escape_string($db, $_POST['password']);

  if (empty($username)) {
  	array_push($errors, "Username is required");
  }
  if (empty($password)) {
  	array_push($errors, "Password is required");
  }

  if (count($errors) == 0) {
  	$password = md5($password);
  	$query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
  	$results = mysqli_query($db, $query);
  	if (mysqli_num_rows($results) == 1) {
  	  $_SESSION['username'] = $username;
  	  $_SESSION['success'] = "You are now logged in...";
  	  header('location: index.php');
  	}else {
  		array_push($errors, "You have entered a Wrong Username or Password...");
  	}
  }
}



?>

