<?php
include_once('php/connect.php');
$sql = "SELECT * FROM konyv";
$result = $conn->query($sql);
$sql2 = "SELECT * FROM szerzo";
$result2 = $conn->query($sql2);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Törlés</title>
    <link rel="stylesheet" href="css/style.css">
    <script>
        var szerzoneve;
        var szerzoazon;
        var konyvazon;
    </script>
</head>

<body>
    <div class="header">
        <p><span>Törlés</span></p>
    </div>
    <div class="navbar">
        <a href="index.php">Könyvek</a>
        <a href="szerzok/">Szerzők</a>
        <a href="ujadat.php">Új könyv/szerző</a>
        <a href="delete.php" class="active">törlés</a>
    </div>
    <div class="footer">
        <div class="footerImpressum">
            <p><b>könyv, vagy szerző törlése:</b></p>
        </div>
    </div>
    <div class="Rside">
        <!--SZERZŐ MEGADÁSA-->
        <h2 class="title">Szerző törlése</h2>
        <!--Select menü, ami a db-ből szerzi az adatokat-->
        <form action="php/deleteSzerzok.php" method="post" class="form">
            <div id="select">
                <select name="szerzok" id="szerzok" class="select">
                    <option>---- Válassz szerzőt! ----</option>
                    <?php
                    while ($rows2 = $result2->fetch_assoc()) {
                        $szerzok = $rows2['nev'];
                        $szerzokID = $rows2['id'];
                        //<option value='" . $row['ID'] . "'>"
                        echo "<option value='$szerzokID'>$szerzok</option>";
                    }
                    ?>
                </select>
                <input type="text" name="szerzoID" id="szerzoID" style="display: none;">
                <input type="submit" id="kesz" class="kesz" value="törlés">


            </div>
        </form>
    </div>
    <div class="Rmain">
        <!--KÖNYV MEGADÁSA-->
        <h2 class="title">Könyv törlése:</h2>
        <form action="php/deleteKonyvek.php" method="post" class="form">
            <div id="select">
                <select name="konyvek" id="konyvek" class="select">
                    <option>---- Válassz könyvet! ----</option>
                    <?php
                    while ($rows = $result->fetch_assoc()) {
                        $konyvek = $rows['cim'];
                        $konyvekID = $rows['id'];
                        //<option value='" . $row['ID'] . "'>"
                        echo "<option value='$konyvekID'>$konyvek</option>";
                    }
                    ?>
                </select>
                <input type="text" name="konyvID" id="konyvID" style="display: none;">
                <input type="submit" id="kesz" class="kesz" value="törlés">
            </div>
        </form>
    </div>


    <script>
        document.getElementById('szerzok').addEventListener('change', function() {
            var e = document.getElementById("szerzok");
            var szerzoneve = e.options[e.selectedIndex].text;
            var szerzoazon = e.options[e.selectedIndex].value;
            console.log(szerzoneve);
            console.log(szerzoazon);
            document.getElementById("szerzoID").value = szerzoazon;
            szerzoazon = document.getElementById("szerzoID").value;
            console.log(szerzoazon);
        });
        document.getElementById('konyvek').addEventListener('change', function() {
            var e = document.getElementById("konyvek");
            var konyvcim = e.options[e.selectedIndex].text;
            var konyvazon = e.options[e.selectedIndex].value;
            console.log(konyvcim);
            console.log(konyvazon);
            document.getElementById("konyvID").value = konyvazon;
            konyvazon = document.getElementById("konyvID").value;
            console.log(konyvazon);
        });
    </script>





    <div class="footer">
        <div class="footerImpressum">
            <h2>ProjekMunka6</h2>
            <h4>készítette:</h4>
            <h5>Ádom Bence</h5>
        </div>
    </div>
</body>

</html>