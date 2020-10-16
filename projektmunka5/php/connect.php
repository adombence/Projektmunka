<?php
$servername = "127.0.0.1";
$username = "root";
$password = null;

// kapcsolat létrehozása
$conn = mysqli_connect($servername, $username, $password, 'egricsillagok');

// kapcsolat ellenőrzése
if (!$conn) {
  die("kapcsolat meghíusult: " . mysqli_connect_error());
}
?> 