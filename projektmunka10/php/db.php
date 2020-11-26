<?php
$servername = "";
$username = "";
$password = "";

// kapcsolat létrehozása
$conn = mysqli_connect($servername, $username, $password, '');

// kapcsolat ellenőrzése
if (!$conn) {
  die("kapcsolat meghíusult: " . mysqli_connect_error());
} else {
  /*echo "OK";*/
}
?> 
