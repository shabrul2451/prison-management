<?php
$servername = "localhost";
$username = "root";
$password = "";
$db="task_manager";

// Create connection
$conn = new mysqli($servername, $username, $password,$db);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";



$email = $_POST["login_email"];
$pswrd = $_POST["login_password"];

$sql = "INSERT INTO login (Email,Password)
VALUES ('$email','$pswrd')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?> 