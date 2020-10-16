<?php
$servername = "localhost";
$username = "root";
$password = null;

// Create connection
$conn = mysqli_connect($servername, $username, $password, 'erdemes');

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
//echo "Connected successfully";
?> 