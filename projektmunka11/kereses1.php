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















<label for="muvesz">Művész</label>
        <input type="text" id="muvesz" name="muvesz" placeholder="Művész neve">

        <label for="cim">Cím</label>
        <input type="text" id="cim" name="cim" placeholder="Cím">

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

        <label for="stilus">stílus</label>
        <input type="stilus" id="stilus" placeholder="stílus">

        <label for="magassag">Magasság</label>
        <input type="text" id="magassag" class="magassag" placeholder="magasság">
        
        <label for="szélesség">Szélesség</label>
        <input type="text" id="szelesseg" class="szelesseg" placeholder="szelesseg">
        <label>
            <input type="submit" value="keresés" class="btn">
        </label>