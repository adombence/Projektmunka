<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Szerzők</title>
    <link rel="stylesheet" href="../css/style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
</head>

<body>
    <!--Navigációs bár-->
    <div class="navbar">
        <a href="../">Könyvek</a>
        <a href="szerzok/" class="active">Szerzők</a>
        <a href="../ujadat.php">Új könyv/szerző</a>
        <a href="../delete.php">törlés</a>
    </div>
    <!--Az oldal maga-->
    <div class="row">

        <div class="main">
            <!--szerzok-->
            <div class="title">
                <h1>Szerzők</h1>
            </div>
            <div class="form-group">
                <div class="input-group">
                    <input type="text" name="search_text" id="search_text" placeholder="Keresés a szerzők között" class="form-control" />
                </div>
            </div>
            <br />
            <div id="result"></div>
        </div>
        <div style="clear:both"></div>
        <!--szerzok vege-->
    </div>

    <script>
        $(document).ready(function() {
            load_data();

            function load_data(query) {
                $.ajax({
                    url: "fetch.php",
                    method: "post",
                    data: {
                        query: query
                    },
                    success: function(data) {
                        $('#result').html(data);
                    }
                });
            }

            $('#search_text').keyup(function() {
                var search = $(this).val();
                if (search != '') {
                    load_data(search);
                } else {
                    load_data();
                }
            });
        });
    </script>
    <!--footer-->
    <div class="footer">
        <div class="footerImpressum">
            <h2>ProjekMunka6</h2>
            <h4>készítette:</h4>
            <h5>Ádom Bence</h5>
        </div>
    </div>
</body>

</html>