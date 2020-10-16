<?php
include_once('../main/connect.php');
$sql ="SELECT film.filmcim, film.hossz, mozi.mozinev
FROM mozi INNER JOIN (film INNER JOIN hely ON film.fkod = hely.fkod) ON (mozi.moziazon = hely.moziazon)
ORDER BY film.hossz DESC
LIMIT 1";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Leghosszabb film</title>
    <link rel="stylesheet" href="../main/style2.css">
</head>

<body>
    <div class="header">
        <H1>Leghosszabb film</H1>
    </div>
    <div class="navbar">
        <a href="../main/main.html">Főoldal</a>
        <a href="../A/a.php" >Francia filmek</a>
        <a href="../B/b.php">Lakótársat keresünk</a>
        <a href="../C/c.php">Fekete-fehér filmek</a>
        <a href="../D/d.php">Nem vetítenek</a>
        <a href="../E/e.php" >Feliratos vígjátékok</a>
        <a href="../F/f.php" class="active">Leghosszabb film</a>
        <a href="../G/g.php">13. kerületi mozik</a>

    </div>

    <div class="row">
        <div class="side">
            <h2>Leghosszabb film</h2>
            <p>Jelenlegi leghosszabb film kínálatunkban, és hogy hol lehet megtekinteni.</p>
        </div>
        <div class="main">
            <table>
                <tr>
                    <th>filmcím</th>
                    <th>hossz</th>
                    <th>mozinév</th>
                </tr>
                <?php
                    while($rows = $result->fetch_assoc()){
                        ?>
                        <tr>
                            <td><?php echo $rows['filmcim'] ?></td>
                            <td><?php echo $rows['hossz'] ?></td>
                            <td><?php echo $rows['mozinev'] ?></td>
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