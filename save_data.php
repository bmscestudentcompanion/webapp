<?php
$azure_mysql_dbname = "student-companion-database";
$azure_mysql_host = "student-companion-server.mysql.database.azure.com";
$azure_mysql_username = "aumxlleamq";
$azure_mysql_password = "IJ26X31VJ74QXS0U$";
$azure_mysql_port = 3306;

$db = mysqli_init();
mysqli_real_connect($db, $azure_mysql_host, $azure_mysql_username, $azure_mysql_password, $azure_mysql_dbname, $azure_mysql_port, NULL, MYSQLI_CLIENT_SSL);

if (!$db) {
    die("connection failed: " . mysqli_dbect_error());
}
$create_table_query = "
    CREATE TABLE IF NOT EXISTS profile (
        id INT AUTO_INCREMENT PRIMARY KEY,
        firstName VARCHAR(255) NOT NULL,
        lastName VARCHAR(255) NOT NULL,
        gender VARCHAR(255) NOT NULL,
        nationality VARCHAR(255) NOT NULL,
        address VARCHAR(255) NOT NULL,
        father VARCHAR(255) NOT NULL,
        mother VARCHAR(255) NOT NULL,
        mobileNumber INT(10) NOT NULL,
    )
";
$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];
$gender = $_POST['gender'];
$nationality = $_POST['nationality'];
$address = $_POST['address'];
$father = $_POST['father'];
$mother = $_POST['mother'];
$mobileNumber = $_POST['mobileNumber'];
$insertSql = "INSERT INTO profile VALUES ('$firstName', '$lastName', '$gender', '$nationality', '$address', '$father', '$mother', '$mobileNumber')";
if ($db->query($insertSql) === TRUE) {
    header("Location: dashboard.php");
  echo "Profile saved successfully";
} else {
  echo "Error: " . $insertSql . "<br>" . $db->error;
}
$db->close();
?>
