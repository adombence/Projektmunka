<?php
include_once 'connect.php';



$nev = mysqli_real_escape_string($conn, $_POST['nev']);
$nem = mysqli_real_escape_string($conn, $_POST['nem']);
$szuletett = mysqli_real_escape_string($conn, $_POST['szuletett']);
if (empty($_POST['elhunyt'])) {
    $elhunyt = null;
} else {
    $elhunyt = mysqli_real_escape_string($conn, $_POST['elhunyt']);
}
$szarmazas = mysqli_real_escape_string($conn, $_POST['szarmazas']);
$szuletesihely = mysqli_real_escape_string($conn, $_POST['szuletesihely']);



$sql = "INSERT INTO `szerzo`(`id`, `nev`, `nem`, `szuletett`, `elhunyt`, `szarmazas`, `szuletesihely`)
        VALUES (null,'$nev','$nem','$szuletett','$elhunyt','$szarmazas','$szuletesihely');";

mysqli_query($conn, $sql);
?><script type="text/javascript">
    window.location = "http://www.adombence.hu/projektmunka6/ujadat.php";
</script>