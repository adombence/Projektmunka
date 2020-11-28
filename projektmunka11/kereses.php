<?php
require('php/db.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/teszt.css">
</head>

<body>
    <button class="filter">szűrés</button>
    <div class="panel">
        <!--TODO-->
    </div>
    <script src="js/filter.js"></script>
    <script src="js/range.js"></script>
    <div class="row">
        <div class="full">
            <table class="table3">
                <tr>
                    <th>Művész</th>
                    <th>cím</th>
                    <th>éve</th>
                    <th>stílus</th>
                    <th>magasság</th>
                    <th>szélesség</th>
                </tr>
                <?php
                mysqli_free_result($result);
                $festmenyek = 'SELECT muvesz, cim, keletkezeseve, stilus, meretx, merety FROM `festmeny` ORDER BY `keletkezeseve`;';
                $result = $conn->query($festmenyek) or die($conn->error);
                while ($rows = $result->fetch_assoc()) {
                ?>
                    <tr>
                        <td><?php echo $rows['muvesz'] ?></td>
                        <td><?php echo $rows['cim'] ?></td>
                        <td><?php echo $rows['keletkezeseve'] ?></td>
                        <td><?php echo $rows['stilus'] ?></td>
                        <td><?php echo $rows['meretx'] ?> cm</td>
                        <td><?php echo $rows['merety'] ?> cm</td>
                    </tr>
                <?php
                }
                ?>
            </table>
        </div>
    </div>
</body>

</html>