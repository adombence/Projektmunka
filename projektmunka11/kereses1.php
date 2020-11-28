<form action="POST">
    <!--TODO
                MUVESZ ALAPJAN: nev, szuletes, halalozas, szarmazas
                FESTMENY ALAPJAN: cim, stílus, anyag, meret(x,y)
                LOKACIO ALAPJAN: orszag, varos, kiallitohely-->
    <input type="text" id="cim" class="cim">
    <input type="text" id="stilus" class="stilus">
    <input type="text" id="anyag" class="anyag">
    <input type="range" id="meretx" class="meretx" min='7' max='460'>
    <input type="range" id="merety" class="merety" min='7' max='776'>

    <div class="full5">
        <p>Keletkezés éve</p>
        <div class="range-box">
            <div id='fullbar' class="range">
                <div id='filteredbar' class='range__between'></div>
                <button id='min' class="range__button_1"></button>
                <button id='max' class="range__button_2"></button>
                <input id='inputmin' class='range_inpt1' type='number' min='1800' max='1999' value="1800">
                - <input id='inputmax' class='range_inpt2' type='number' min='1800' max='1999' value="1999">
            </div>
        </div>
    </div>
    <input type="submit" id="kesz" class="kesz" value="törlés">
</form>