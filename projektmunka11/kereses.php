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
        <form action="POST">
            <!--TODO
                MUVESZ ALAPJAN: nev, szuletes, halalozas, szarmazas
                FESTMENY ALAPJAN: cim, stílus, anyag, meret(x,y)
                LOKACIO ALAPJAN: orszag, varos, kiallitohely-->
            <input type="text" id="cim" class="cim">
            <input type="text" id="stilus" class="stilus">
            <input type="text" id="anyag" class="anyag">
            <input type="range" id="meretx" class="meretx" min='7' max='460'>
            <input type="range" id="merety" class="merety" min='7' max='776'>

            <div class="full5">
                <p>Keletkezés éve</p>
                <div class="range-box">
                    <div id='fullbar' class="range">
                        <div id='filteredbar' class='range__between'></div>
                        <button id='min' class="range__button_1"></button>
                        <button id='max' class="range__button_2"></button>
                        <input id='inputmin' class='range_inpt1' type='number' min='1800' max='1999' value="1800">
                        - <input id='inputmax' class='range_inpt2' type='number' min='1800' max='1999' value="1999">
                    </div>
                </div>
            </div>
        </form>
    </div>
    <script src="js/filter.js"></script>
    <script src="js/range.js"></script>
    <div class="row">
        <div class="full">
            <table class="table3">
                <tr>
                    <th>Művész</th>
                    <th>cím</th>
                    <th>keletkezés éve</th>
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
                        <td><?php echo $rows['meretx']?> cm</td>
                        <td><?php echo $rows['merety']?> cm</td>
                    </tr>
                <?php
                }
                ?>
            </table>
        </div>
    </div>
</body>

</html>