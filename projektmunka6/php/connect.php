<?php
$servername = "";
$username = "";
$password = "";

// kapcsolat létrehozása
$conn = mysqli_connect($servername, $username, $password, 'projektmunka6');

// kapcsolat ellenőrzése
if (!$conn) {
  die("kapcsolat meghíusult: " . mysqli_connect_error());
}
?> 
