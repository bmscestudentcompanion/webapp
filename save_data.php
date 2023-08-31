<?php
$conn = new mysqli("localhost", "root","", "project");
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];
$gender = $_POST['gender'];
$nationality = $_POST['nationality'];
$address = $_POST['address'];
$father = $_POST['father'];
$mother = $_POST['mother'];
$mobileNumber = $_POST['mobileNumber'];
$insertSql = "INSERT INTO profile VALUES ('$firstName', '$lastName', '$gender', '$nationality', '$address', '$father', '$mother', '$mobileNumber')";
if ($conn->query($insertSql) === TRUE) {
    header("Location: dashboard.php");
  echo "Profile saved successfully";
} else {
  echo "Error: " . $insertSql . "<br>" . $conn->error;
}
$conn->close();
?>
