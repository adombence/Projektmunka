<?php
include_once('../main/connect.php');
$sql ="SELECT film.filmcim FROM film
GROUP BY film.filmcim, film.szarmazas
HAVING (((film.szarmazas) Like '%francia%'))";
$result = $conn->query($sql);
?>



<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Francia filmek</title>
    <link rel="stylesheet" href="../main/style2.css">
</head>

<body>
    <div class="header">
        <H1>Francia filmek</H1>
    </div>
    <div class="navbar">
        <a href="../main/main.html">Főoldal</a>
        <a href="../A/a.php" class="active">Francia filmek</a>
        <a href="../B/b.php">Lakótársat keresünk</a>
        <a href="../C/c.php">Fekete-fehér filmek</a>
        <a href="../D/d.php">Nem vetítenek</a>
        <a href="../E/e.php">Feliratos vígjátékok</a>
        <a href="../F/f.php">Leghosszabb film</a>
        <a href="../G/g.php">13. kerületi mozik</a>
    </div>

    <div class="row">
        <div class="side">
            <h2>Francia filmek</h2>
            <p>A felsorolt filmek részben francia gyártmányúak</p>
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