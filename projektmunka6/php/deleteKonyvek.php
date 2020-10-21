<?php
include_once 'connect.php';


$konyvID = $_POST['konyvID'];



$sql = "DELETE FROM konyv WHERE id = '$konyvID'";
if (mysqli_query($conn, $sql)) {
    echo "konyvID: " + $konyvID;
    echo "<br>";
    echo "Record deleted successfully";
} else {
    echo "konyvID: " + $konyvID;
    echo "Error deleting record: " . mysqli_error($conn);
}
?>
<script type="text/javascript">
    window.location = "http://www.adombence.hu/projektmunka6/delete.php";
</script>