<?php
include_once('php/connect.php');
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
if (mysqli_num_rows($result2) > 0) {
    while ($row = mysqli_fetch_assoc($result2)) {
        $datas2[] = $row;
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Irodalmi összehasonlítás | Dinamikus</title>
    <link rel="stylesheet" href="css/style.css">

    <script type="text/javascript">
        var sorstalansagArray = <?php echo json_encode($datas1); ?>;
        var egricsillagokArray = <?php echo json_encode($datas2); ?>;
        //console.log(sorstalansagArray);
        //console.log(sorstalansagArray[0].szó);
        //console.log(sorstalansagArray[0].előfordulás);
        //console.log(egricsillagokArray);
        //console.log(egricsillagokArray[0].szó);
        //console.log(egricsillagokArray[0].előfordulás);
    </script>
    <script src="./js/arrays.js"></script>
</head>

<body>

    <div class="header">
        <H1>Irodalmi összehasonlítás</H1>
    </div>
    <div class="navbar">
        <a href="../index.html" class="nav-fooldal">Főoldal</a>
        <a href="index.html">Statikus</a>
        <a href="dinamikus.php" class="active">Dinamikus</a>
        <a href="#">Tetszőleges</a>
    </div>

    <div class="row">
        <div class="footer">
            <div class="footerImpressum">
                <p>Gárdonyi Géza - Egri Csillagok <br>és<br>Kertész Imre - Sorstalanság<br>összehasonlítása<br>első tíz közös szó alapján<br>Dinamikus (lekérdezésből dolgozik.)</p>
            </div>
        </div>
        <div class="side">
            <div class="wrapper">
                <div class="container d-flex flex-column justify-content-center align-items-center">
                    <div class="title text-center mb-5">
                        <p>Egri csillagok:</p>
                    </div>
                    <div class="chart-wrapper">
                        <canvas id="myChart1"></canvas>
                    </div>
                </div>
            </div>
        </div>
        <div class="main">
            <!---->
            <div class="wrapper">
                <div class="container d-flex flex-column justify-content-center align-items-center">
                    <div class="title text-center mb-5">
                        <p>Sorstalanság:</p>
                    </div>
                    <div class="chart-wrapper">
                        <canvas id="myChart2"></canvas>
                    </div>
                </div>
            </div>
            <!---->
            <!---->
        </div>



        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.3/Chart.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/chartjs-plugin-datalabels"></script>
        <script src="./js/chart1Dinamikus.js"></script>
        <script src="./js/chart2Dinamikus.js"></script>

        <div class="footer">
            <div class="footerImpressum">
                <h2>ProjekMunka5</h2>
                <h4>készítette:</h4>
                <h5>Ádom Bence</h5>
            </div>
        </div>
</body>

</html>