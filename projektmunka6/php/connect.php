<?php
$servername = "mysql.omega:3306";
$username = "projektmunka6";
$password = "VAcSZf8QT3sqz7A";

// kapcsolat létrehozása
$conn = mysqli_connect($servername, $username, $password, 'projektmunka6');

// kapcsolat ellenőrzése
if (!$conn) {
  die("kapcsolat meghíusult: " . mysqli_connect_error());
}
?> 