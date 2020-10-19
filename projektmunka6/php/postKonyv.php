<?php
include_once 'connect.php';

/*id,cim,ISBN,kiadasiDatum,oldalSzam,eredetiNyelv,*/

$cim = mysqli_real_escape_string($conn, $_POST['cim']);
if (empty($_POST['ISBN'])) {
    $ISBN = null;
} else {
    $ISBN = mysqli_real_escape_string($conn, $_POST['ISBN']);
}
$kiadasiDatum = mysqli_real_escape_string($conn, $_POST['kiadasiDatum']);
$oldalSzam = mysqli_real_escape_string($conn, $_POST['oldalSzam']);
$eredetiNyelv = mysqli_real_escape_string($conn, $_POST['eredetiNyelv']);
$szerzoID = $_POST['szerzoID'];
$konyvID = $_POST['konyvID'];

echo $szerzoID;
echo "<br>";
echo $konyvID;

$sql = "INSERT INTO `konyv`(`id`, `cim`, `ISBN`, `kiadasiDatum`, `oldalSzam`, `eredetiNyelv`) 
        VALUES (null,'$cim','$ISBN','$kiadasiDatum','$oldalSzam','$eredetiNyelv');";

$result = mysqli_query($conn, $sql);

if ($result) {
    $sql2 = "INSERT INTO `kapcsolo`(`szerzoid`, `konyvid`) 
        VALUES ('$szerzoID', '$konyvID');";
    $result2 = mysqli_query($conn, $sql2);
    echo "succes";
} else {
    echo "error";
}

?><script type="text/javascript">
    //window.location = "../index.php";
</script>