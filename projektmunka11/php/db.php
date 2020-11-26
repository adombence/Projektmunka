<?php
$servername = "mysql.omega:3306";
$username = "projektmunka10";
$password = "nnmbbUv7Qibi3DS_";

// kapcsolat létrehozása
$conn = mysqli_connect($servername, $username, $password, 'projektmunka10');

// kapcsolat ellenőrzése
if (!$conn) {
    die("kapcsolat meghíusult: " . mysqli_connect_error());
} /*else {
  echo "OK";
}*/
