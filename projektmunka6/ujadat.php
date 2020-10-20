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
    <title>Új könyv</title>
    <link rel="stylesheet" href="css/style.css">
    <script>
        var szerzoneve;
        var szerzoazon;
        var konyvazon;
    </script>
</head>

<body>
    <div class="header">
        <p><span>Új könyv hozzáadása</span></p>
    </div>
    <div class="navbar">
        <a href="../index.html" class="nav-fooldal">Főoldal</a>
        <!--<a href="index.html" class="active">Statikus</a>
        <a href="dinamikus.php">Dinamikus</a>
        <a href="#">Tetszőleges</a>-->
    </div>
    <div class="Rrow">
        <div class="footer">
            <div class="footerImpressum">
                <p><b>Új könyv, vagy szerző megadása:</b><br>Ha a könyv szerzője nincs még a listában, akkor előszőr őt írd be, majd kattints a kész gombra, ha már bent van a listában, csak válaszd ki.</p>
            </div>
        </div>
        <div class="Rside">
            <!--SZERZŐ MEGADÁSA-->
            <h2 class="title">Szerző megadása</h2>
            <p>Vagy már meglévő kiválasztása</p>
            <!--Select menü, ami a db-ből szerzi az adatokat-->

            <form action="php/postSzerzo.php" method="post" class="form">
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
                        <option value="Új szerző megadása" class="ujszerzo">Új szerző megadása</option>
                    </select>
                    <button onclick="szerzoid()" id="hidden_button" class="hidden_button">kész</button>
                </div>


                <script>
                    function szerzoid() {
                        var e = document.getElementById("szerzok");
                        szerzoneve = e.options[e.selectedIndex].text;
                        szerzoazon = e.options[e.selectedIndex].value;
                        console.log(szerzoneve);
                        console.log(szerzoazon);

                        document.getElementById("konyvID").value = konyvazon;
                        document.getElementById("szerzoID").value = szerzoazon;
                    }
                </script>


                <div id="hidden_div2" style="display: none;">
                    <!--ÚJ SZERZŐ MEGADÁSA-->
                    <p>Szerző neve:</p>
                    <input type="text" name="nev" placeholder="név" required>
                    <p>Szerző neme:</p>
                    <span class="kisrow">
                        <span class="kisside">
                            <input type="radio" id="nem1" name="nem" value="1">
                            <label for="nem1">Férfi</label></span>
                        <span class="kismain">
                            <input type="radio" id="nem0" name="nem" value="0">
                            <label for="nem0">Nő</label><br></span>
                    </span>
                </div>

                <div id="hidden_div3" style="display: none;">
                    <span class="kisrow">
                        <span class="kisside">
                            <p>Szültetett:</p>
                            <input type="date" name="szuletett" id="szuletett" required>
                        </span>
                        <span class="kismain">
                            <p>Elhunyt:</p>
                            <input type="date" name="elhunyt" id="elhunyt">
                            <p class="segitseg">(Ha él az író,<br>akkor hagyd üresen)</p>
                        </span>


                        <p>Származás:</p>
                        <input type="text" name="szarmazas" id="szarmazas" placeholder="származás" required>
                        <p>Születési hely:</p>
                        <input type="text" name="szuletesihely" id="szuletesihely" placeholder="születési hely" required>
                        <input type="submit" value="Kész">
                </div>
            </form>
        </div>
        <div class="Rmain">
            <!--ÚJ KÖNYV MEGADÁSA-->
            <h2 class="title">Új könyv megadása:</h2>
            <form action="php/postKonyv.php" method="post" class="form">
                <p>cím:</p>
                <input type="text" name="cim" placeholder="cím" required>
                <p>ISBN kódja:</p>
                <input type="text" name="ISBN" placeholder="ISBN">
                <p>eredeti mű kiadási Dátuma(év):</p>
                <input type="text" name="kiadasiDatum" placeholder="kiadási dátum(Év)" required>
                <p>oldalszám:</p>
                <input type="text" name="oldalSzam" placeholder="oldalszám" required>
                <p>Eredeti nyelv:</p>
                <input type="text" name="eredetiNyelv" placeholder="eredeti nyelv" required>
                <div class="rejtett" style="display: none;">
                    <input type="text" name="konyvID" id="konyvID">
                    <input type="text" name="szerzoID" id="szerzoID">
                </div>
                <div class="kitolto" id="hidden_div1" style="display: none;"></div>
                <input type="submit" id="kesz" class="kesz" value="Kész">
            </form>
        </div>


        <script>
            document.getElementById('szerzok').addEventListener('change', function() {
                var style = this.value == "Új szerző megadása" ? 'block' : 'none';
                document.getElementById('hidden_div1').style.display = style;
                document.getElementById('hidden_div2').style.display = style;
                document.getElementById('hidden_div3').style.display = style;
                var style2 = this.value != "Új szerző megadása" ? 'block' : 'none';
                document.getElementById('hidden_button').style.display = style2;
            });
        </script>

    </div>

    <div class="tab" id="tab" style="display: none;">
        <table>
            <tr>
                <th>id</th>
                <th>cím</th>
                <th>ISBN kód</th>
                <th>eredeti mű kiadási dátuma</th>
                <th>oldal szám</th>
                <th>eredeti nyelv</th>
            </tr>
            <?php
            while ($rows = $result->fetch_assoc()) {
                $seged = $rows['id'];
            ?>
                <script>
                    konyvazon = "<?php echo $seged ?>"
                </script>
                <tr>
                    <td><?php echo $rows['id'] ?></td>
                    <td><?php echo $rows['cim'] ?></td>
                    <td><?php echo $rows['ISBN'] ?></td>
                    <td><?php echo $rows['kiadasiDatum'] ?></td>
                    <td><?php echo $rows['oldalSzam'] ?></td>
                    <td><?php echo $rows['eredetiNyelv'] ?></td>
                </tr>
            <?php
            }
            ?>
            <script>
                konyvazon = parseInt(konyvazon);
                konyvazon += 1;
                console.log("konyvazon: " + konyvazon);
            </script>
        </table>
    </div>

    <div class="footer">
        <div class="footerImpressum">
            <h2>ProjekMunka6</h2>
            <h4>készítette:</h4>
            <h5>Ádom Bence</h5>
        </div>
    </div>
</body>

</html>