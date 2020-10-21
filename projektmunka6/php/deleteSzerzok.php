<?php
include_once 'connect.php';


$szerzoID = $_POST['szerzoID'];

$sql = "DELETE FROM `szerzo` WHERE id= '$szerzoID'";

if (mysqli_query($conn, $sql)) {
  echo "konyvID: " + $szerzoID;
  echo "<br>";
  echo "Record deleted successfully";
} else {
  echo "konyvID: " + $szerzoID;
  echo "<br>";
  echo "Error deleting record: " . mysqli_error($conn);
}


?>
<script type="text/javascript">
  window.location = "http://www.adombence.hu/projektmunka6/delete.php";
</script>