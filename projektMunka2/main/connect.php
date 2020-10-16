<?php
$servername = "127.0.0.1";
$username = "root";
$password = null;

// kapcsolat létrehozása
$conn = mysqli_connect($servername, $username, $password, 'projektmunka3');

// kapcsolat ellenőrzése
if (!$conn) {
  die("kapcsolat meghíusult: " . mysqli_connect_error());
}
?> 