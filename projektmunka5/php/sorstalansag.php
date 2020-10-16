<?php
include_once('connect.php');
$sql1 = "SELECT * FROM sorstalansag";
$result1 = $conn->query($sql1) or die($conn->error);
$datas1 = array();
if (mysqli_num_rows($result1) > 0) {
    while ($row = mysqli_fetch_assoc($result1)) {
        $datas1[] = $row;
    }
}

$sql2 = "SELECT * FROM egricsillagok";
$result2 = $conn->query($sql2) or die($conn->error);
$datas2 = array();
if(mysqli_num_rows($result2) > 0) {
    while($row = mysqli_fetch_assoc($result2)) {
        $datas2[] = $row;
    }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <script type="text/javascript">
        var sorstalansagArray = <?php echo json_encode($datas1); ?>;
        var egricsillagokArray = <?php echo json_encode($datas2); ?>;
        //console.log(sorstalansagArray);
        //console.log(sorstalansagArray[0].szó);
        //console.log(sorstalansagArray[0].előfordulás);
        //console.log(egricsillagokArray);
        //console.log(egricsillagokArray[0].szó);
        //console.log(egricsillagokArray[0].előfordulás);

        for(var i = 0; i < 100; i++) {
            for(var j = 0; j < 100; j++) {
                if(sorstalansagArray[i].szó == egricsillagokArray[j].szó){
                    console.log("sorstalansag: " + sorstalansagArray[i].szó + ":" + sorstalansagArray[i].előfordulás + "; egricsillagok:" + egricsillagokArray[j].szó + ":" + egricsillagokArray[j].előfordulás);
                }
            }
        }
    </script>

</body>

</html>