<?php
$servername = "mysql.omega:3306";
$username = "projektmunka9";
$password = "VAcSZf8QT3sqz7A";

// kapcsolat létrehozása
$conn = mysqli_connect($servername, $username, $password, 'projektmunka9');

// kapcsolat ellenőrzése
if (!$conn) {
  die("kapcsolat meghíusult: " . mysqli_connect_error());
} else {
  /*echo "OK";*/
}
