<?php
include_once('../main/connect.php');
$sql ="SELECT mozi.mozinev, mozi.telefon
FROM mozi
WHERE (((mozi.moziazon) Not In (SELECT hely.moziazon FROM hely)))";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nem vetítenek</title>
    <link rel="stylesheet" href="../main/style2.css">
</head>

<body>
    <div class="header">
        <H1>Nem vetítenek</H1>
    </div>
    <div class="navbar">
        <a href="../main/main.html">Főoldal</a>
        <a href="../A/a.php">Francia filmek</a>
        <a href="../B/b.php">Lakótársat keresünk</a>
        <a href="../C/c.php">Fekete-fehér filmek</a>
        <a href="../D/d.php" class="active">Nem vetítenek</a>
        <a href="../E/e.php">Feliratos vígjátékok</a>
        <a href="../F/f.php">Leghosszabb film</a>
        <a href="../G/g.php">13. kerületi mozik</a>
    </div>

    <div class="row">
        <div class="side">
            <h2>Nem vetítenek</h2>
            <p>Az alábbi mozik nem vetítenek filmeket.</p>
        </div>
        <div class="main">
            <table>
                <tr>
                    <th>mozinév</th>
                    <th>telefon</th>
                </tr>
                <?php
                    while($rows = $result->fetch_assoc()){
                        ?>
                        <tr>
                            <td><?php echo $rows['mozinev'] ?></td>
                            <td><?php echo $rows['telefon'] ?></td>
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