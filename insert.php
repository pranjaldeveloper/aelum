<?php
session_start();
if (isset($_POST["vercode"]) && isset($_SESSION["vercode"])) {
	if ($_POST["vercode"] != $_SESSION["vercode"] OR $_SESSION["vercode"]=='')  {
        echo "<script>alert('Incorrect verification code');</script>" ;
        die();
    } 
	// else{
	// 	echo "<script>alert('Data inserted successfully !');</script>" ;
	// }
}
// var_dump($_POST);
// die();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "aelum";
$name=$_POST["name"];
$email=$_POST["email"];
$dob=$_POST["dob"];
$about=$_POST["about"];

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$sql = "INSERT INTO form_data (name, email, dob, about)
VALUES ('$name', '$email', '$dob' , '$about')";

if (mysqli_query($conn, $sql)) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>
