<?php
require('php/db.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>keresés</title>
    <link rel="stylesheet" href="css/style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
</head>

<body>
    <button class="filter">szűrés</button>
    <div class="panel">
        <!--TODO-->
        <div class="rowkeres">
            <div class="col-50">
                <label for="muvesz" class="lab">Művész</label>
                <input type="text" id="muvesz" name="muvesz" placeholder="Művész neve">
                <label for="magassag" class="lab">max. magasság</label>
                <input type="text" id="magassag" class="magassag" placeholder="max. magasság">
                <label for="stilus" class="lab">stílus</label>
                <input type="stilus" id="stilus" class="stilus" placeholder="stílus">
            </div>
            <div class="col-50">
                <label for="cim" class="lab">Cím</label>
                <input type="text" id="cim" name="cim" placeholder="Cím">
                <label for="szélesség" class="lab">max. szélesség</label>
                <input type="text" id="szelesseg" class="szelesseg" placeholder="max. szélesség">
                <label for="anyag" class="lab">anyag</label>
                <input type="text" id="anyag" class="anyag" placeholder="anyag">
            </div>
        </div>

        <label for="keletkezeseve">Keletkezés éve</label>
        <div class="range-box">
            <div id='fullbar' class="range">
                <div id='filteredbar' class='range__between'></div>
                <button id='min' class="range__button_1"></button>
                <button id='max' class="range__button_2"></button>
                <input id='inputmin' class='range_inpt1' type='number' min='1800' max='1999' value="1800">
                - <input id='inputmax' class='range_inpt2' type='number' min='1800' max='1999' value="1999">
            </div>
        </div>
        <label>
            <input type="submit" value="keresés" class="btn" id="btn">
        </label>
    </div>
    <script src="js/filter.js"></script>
    <script src="js/range.js"></script>
    <div class="row">
        <div class=" full" id="full">
            <script>
                $(document).ready(function() {
                    load_data();

                    function load_data(muvesz, cim, min, max, stilus, anyag, meretx, merety) {
                        $.ajax({
                            url: "fetch.php",
                            method: "post",
                            data: {
                                muvesz: muvesz,
                                cim: cim,
                                min: min,
                                max: max,
                                stilus: stilus,
                                anyag: anyag,
                                meretx: meretx,
                                merety: merety
                            },
                            success: function(data) {
                                $('#full').html(data);
                            }
                        });
                    }

                    $('#btn').click(function() {
                        var muvesz, cim, min, max, stilus, anyag, meretx, merety;
                        muvesz = document.getElementById('muvesz').value;
                        cim = document.getElementById('cim').value;
                        min = document.getElementById('inputmin').value;
                        max = document.getElementById('inputmax').value;
                        stilus = document.getElementById('stilus').value;
                        anyag = document.getElementById('anyag').value;
                        meretx = document.getElementById('magassag').value;
                        merety = document.getElementById('szelesseg').value;
                        console.log("muvesz: " + muvesz + "\ncim: " + cim + "\nmin: " + min + "\nmax" + max + "\nstilus:" + stilus + "\nanyag: " + anyag + "\nmeretx: " + meretx + "\nmerety: " + merety);
                        load_data(muvesz, cim, min, max, stilus, anyag, meretx, merety);
                    });
                });
            </script>
        </div>
    </div>
</body>

</html>