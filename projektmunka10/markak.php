<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gyártói oldal</title>
    <link rel="stylesheet" href="css/style.css">
    <script>
        var gyarto = document.location.search.replace(/^.*?\=/, '');
        console.log("gyarto: " + gyarto);
    </script>
</head>

<body>
    <div class="header">
        <h1 id="gyarto"></h1>
    </div>

    <div class="row">
        <div class="side">
            <h1>Gyártó adatok</h1>
        </div>
        <div class="main">
            <h1>Székhelye</h1>
        </div>
    </div>
    <div class="row">
        <div class="full">
            <h1>Autók</h1>
        </div>
    </div>
    <div class="footer">
        <h2>ProjekMunka10</h2>
        <h4>készítette:</h4>
        <h5>Ádom Bence</h5>
        <h5>Balogh Gábor</h5>
        <h5>Maknyik Márk</h5>
    </div>
    <script>
        document.getElementById('gyarto').innerHTML = gyarto;
    </script>
</body>

</html>