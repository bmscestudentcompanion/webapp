<?php
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
    CREATE TABLE IF NOT EXISTS profile (
        id INT AUTO_INCREMENT PRIMARY KEY,
        firstName VARCHAR(255) NOT NULL,
        lastName VARCHAR(255) NOT NULL,
        gender VARCHAR(255) NOT NULL,
        nationality VARCHAR(255) NOT NULL,
        address VARCHAR(255) NOT NULL,
        father VARCHAR(255) NOT NULL,
        mother VARCHAR(255) NOT NULL,
        mobileNumber INT(10) NOT NULL
    )
";

if ($db->query($create_table_query) === TRUE) {
    // Table creation successful
} else {
    echo "Error creating table: " . $db->error;
}

$firstName = mysqli_real_escape_string($db, $_POST['firstName']);
$lastName = mysqli_real_escape_string($db, $_POST['lastName']);
$gender = mysqli_real_escape_string($db, $_POST['gender']);
$nationality = mysqli_real_escape_string($db, $_POST['nationality']);
$address = mysqli_real_escape_string($db, $_POST['address']);
$father = mysqli_real_escape_string($db, $_POST['father']);
$mother = mysqli_real_escape_string($db, $_POST['mother']);
$mobileNumber = mysqli_real_escape_string($db, $_POST['mobileNumber']);

$insertSql = "INSERT INTO profile (firstName, lastName, gender, nationality, address, father, mother, mobileNumber) VALUES ('$firstName', '$lastName', '$gender', '$nationality', '$address', '$father', '$mother', '$mobileNumber')";

if ($db->query($insertSql) === TRUE) {
    header("Location: dashboard.php");
    echo "Profile saved successfully";
} else {
    echo "Error: " . $insertSql . "<br>" . $db->error;
}

$db->close();
?>
