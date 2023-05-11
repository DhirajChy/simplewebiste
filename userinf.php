<?php
$servername = "localhost";
$username = "root";
$password = "";

// Create connection
$conn = new mysqli("localhost", "root","","userinfomation");

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
$user=$_POST["user"];
$email=$_POST["email"];
$mobile=$_POST["mobile"];
$comment=$_POST["comment"];
$sql = "INSERT INTO website(user, email,mobile,comment)
VALUES ('$user', '$email','$mobile','$comment')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();






?>