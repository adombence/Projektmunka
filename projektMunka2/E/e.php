<?php
include_once('../main/connect.php');
$sql ="SELECT film.filmcim FROM mozi, film, hely WHERE (((film.fkod)=hely.fkod) And ((mozi.moziazon)=hely.moziazon) And ((film.mufaj)='vígjáték') And ((film.szinkron)='fel')) GROUP BY film.filmcim HAVING (((Count(*))>2))";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feliratos vígjátékok</title>
    <link rel="stylesheet" href="../main/style2.css">
</head>

<body>
    <div class="header">
        <H1>Feliratos vígjátékok</H1>
    </div>
    <div class="navbar">
        <a href="../main/main.html">Főoldal</a>
        <a href="../A/a.php" >Francia filmek</a>
        <a href="../B/b.php">Lakótársat keresünk</a>
        <a href="../C/c.php">Fekete-fehér filmek</a>
        <a href="../D/d.php">Nem vetítenek</a>
        <a href="../E/e.php" class="active">Feliratos vígjátékok</a>
        <a href="../F/f.php">Leghosszabb film</a>
        <a href="../G/g.php">13. kerületi mozik</a>
    </div>

    <div class="row">
        <div class="side">
            <h2>Feliratos vígjátékok</h2>
            <p>Az alábbi feliratos filmeket több kettőnél több moziban lehet megtekinteni.</p>
        </div>
        <div class="main">
            <table>
                <tr>
                    <th>filmcím</th>
                </tr>
                <?php
                    while($rows = $result->fetch_assoc()){
                        ?>
                        <tr>
                            <td><?php echo $rows['filmcim'] ?></td>
                        </tr>
                        <?php
                    }
                    ?>
            </table>
        </div>
    </div>


    <div class="footer">
        <h2>ProjekMunka2</h2>
        <h4>készítette:</h4>
        <h5>Ádom Bence</h5>
        <h5>Balogh Gábor</h5>
        <h5>Maknyik Márk</h5>
    </div>
</body>

</html>