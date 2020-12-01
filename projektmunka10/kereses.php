<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Keresés</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <div class="nav">
        <a href="./index.html">Főoldal</a>
        <a href="./osszehasonlitas.php">Összehasonlítás</a>
        <a href="./kereses.php" class="active">Keresés</a>
    </div>

    <div class="panel">
        <form action="kereses.php" method="post">
            <div class="rowkeres">

                <div class="col-50">
                    <label for="gyarto" class="lab">Gyártó</label>
                    <input type="text" id="gyarto" name="gyarto" placeholder="Gyártó">
                    <label for="orszag" class="lab">Ország</label>
                    <input type="text" id="orszag" class="orszag" placeholder="Ország">
                    <label for="min" class="lab">Min. eladott darabszám</label>
                    <input type="number" id="min" class="min" placeholder="2022" value="2022">
                </div>
                <div class="col-50">
                    <label for="modell" class="lab">modell</label>
                    <input type="text" id="modell" class="modell" placeholder="Modell név">
                    <label for="varos" class="lab">város</label>
                    <input type="text" id="varos" class="varos" placeholder="Város">
                    <label for="max" class="lab">Max. eladott darabszám</label>
                    <input type="number" id="max" class="max" placeholder="2168491" value="2168491">
                </div>
            </div>
            <label>
                <input type="submit" value="keresés" class="btn" id="btn">
            </label>
        </form>
    </div>

    <div class="row">
        <div class="full">
            <?php
            if ($_SERVER['REQUEST_METHOD'] == "POST") {
                $servername = "mysql.omega:3306";
                $username = "projektmunka9";
                $password = "VAcSZf8QT3sqz7A";

                // kapcsolat létrehozása
                $conn = mysqli_connect($servername, $username, $password, 'projektmunka9');

                // kapcsolat ellenőrzése
                if (!$conn) {
                    die("kapcsolat meghíusult: " . mysqli_connect_error());
                } /*else {
                    echo "OK";
                    }*/

                if (isset($_POST['gyarto'])) {
                    $gyarto = $_POST['gyarto'];
                    if (!empty($gyarto)) {
                        $gyartoQ = "gyarto.gyartoNev LIKE '%{$gyarto}%' AND";
                    }
                }
                if (isset($_POST['modell'])) {
                    $modell = $_POST['modell'];
                    if (!empty($modell)) {
                        $modellQ = "modell.modellNev LIKE '%{$modell}%' AND";
                    }
                }
                if (isset($_POST['orszag'])) {
                    $orszag = $_POST['orszag'];
                    if (!empty($orszag)) {
                        $orszagQ = "szekhely.orszag LIKE '%{$orszag}%' AND";
                    }
                }
                if (isset($_POST['varos'])) {
                    $varos = $_POST['varos'];
                    if (!empty($varos)) {
                        $varosQ = "szekhely.varos LIKE '%{$varos}%' AND";
                    }
                }
                if (isset($_POST["min"])) {
                    $min = $_POST["min"];
                }
                if (isset($_POST["max"])) {
                    $max = $_POST["max"];
                }
                if (!empty($min) && !empty($max)) {
                    if ($min == $max) {
                        $eladottDarabszam = "eladottDarabszam = '{$min}' AND";
                    } else {
                        $eladottDarabszam = "eladottDarabszam BETWEEN '{$min}' AND '{$max}' AND";
                    }
                } else {
                    $eladottDarabszam = "eladottDarabszam BETWEEN 2022 AND 2168491 AND";
                }

                $where = $gyartoQ . ' ' . $modellQ . ' ' . $keletkezeseve . ' ' . $orszagQ . ' ' . $varosQ . ' ' . $eladottDarabszam . ' gyarto.gyartoId = modell.gyartoId AND gyarto.gyartoId = szekhely.gyartoId';

                $sql = "SELECT * FROM gyarto, szekhely, modell WHERE " . $where;

                echo $sql;
            } else {
                $sql = "SELECT * FROM gyarto, szekhely, modell WHERE gyarto.gyartoId = modell.gyartoId AND gyarto.gyartoId = szekhely.gyartoId ";
            }
            mysqli_free_result($result);
            $result = mysqli_query($conn, $sql);
            if (mysqli_num_rows($result) > 0) {
                $output .= '<table class="table3">
                                    <tr>
                                        <th>Gyártó</th>
                                        <th>Ország</th>
                                        <th>Város</th>
                                        <th>Modell</th>
                                        <th>Év</th>
                                        <th>Eladva</th>
                                    </tr>';
                while ($row = mysqli_fetch_array($result)) {
                    $output .= '
                        <tr>
                            <td>' . $row["gyartoNev"] . '</td>
                            <td>' . $row["orszag"] . '</td>
                            <td>' . $row["varos"] . '</td>
                            <td>' . $row["modellNev"] . '</td>
                            <td>' . $row["gyartasiEv"] . '</td>
                            <td>' . $row["eladottDarabszam"] . '</td>
                        </tr>
                    ';
                }
                $output .= '</table>';

                echo $output;
            } else {
                echo 'Nincs ilyen adat';
            }
            ?>
        </div>
    </div>
</body>

</html>