var finalWordsArray;
var finalWordsArray2;
function clicked() {
    var x = document.getElementById("myText").value;
    //document.getElementById("demo").innerHTML = x;
    /* TEST CODE */
    /*var output = countWords('ask a bunch get a bunch');
    console.log(output);
    // { ask: 1, a: 2, bunch: 2, get: 1 }*/
    var teszt = x;
    //console.log("teszt értéke formázás előtt:" + teszt);
    teszt = teszt.replaceAll(",", "");
    teszt = teszt.replaceAll(";", "");
    teszt = teszt.replaceAll("?", "");
    teszt = teszt.replaceAll("!", "");
    teszt = teszt.replaceAll(".", "");
    teszt = teszt.replaceAll("-", "");
    teszt = teszt.replaceAll("–", "");
    teszt = teszt.replaceAll('"', '');
    teszt = teszt.replaceAll("'", "");
    teszt = teszt.replaceAll(":", "");
    teszt = teszt.replaceAll("(", "");
    teszt = teszt.replaceAll(")", "");
    teszt = teszt.replaceAll("[", "");
    teszt = teszt.replaceAll("]", "");
    teszt = teszt.replaceAll("/", "");
    teszt = teszt.toLowerCase();

    //console.log("teszt értéke: " + teszt);
    //var outPut2 = countWords(teszt);
    var wordsArray = splitByWords(teszt);
    //wordsArray = Selector(wordsArray);
    //console.log(wordsArray);
    for (var i = 0; i < wordsArray.length; i++) {
        wordsArray[i] = Selector(wordsArray[i]);
    }
    var wordsMap = createWordMap(wordsArray);
    //console.log(wordsMap);
    finalWordsArray = sortByCount(wordsMap);
    console.log("finalwordsarray: ")
    console.log(finalWordsArray);
    /*console.log('The word "' + finalWordsArray[0].name + '" appears the most in the file ' +
        finalWordsArray[0].total + ' times');*/
    //console.log("top 10 szó:");
    /* */

    /*for (var key in finalWordsArray) {
        if (finalWordsArray.hasOwnProperty(key)) {
            arr1.push(finalWordsArray[key]);
        }
    }*/
    //console.log("arr1:");
    //console.log(arr1);
    /* */
    /*for (var i = 0; i < 100; i++) {
        //console.log(finalWordsArray[i]);
        mu1szo[mu1I] = finalWordsArray[i].name.toString;
        mu1elo[mu1I] = finalWordsArray[i].total.value;
    }
    for(var i = 0; i < 10; i++) {
        console.log(mu1elo[i]);
        console.log(mu1elo[i]);
    }*/
    //customArrays();
}

function clicked2() {
    var x = document.getElementById("myText2").value;
    //document.getElementById("demo").innerHTML = x;
    /* TEST CODE */
    /*var output = countWords('ask a bunch get a bunch');
    console.log(output);
    // { ask: 1, a: 2, bunch: 2, get: 1 }*/
    var teszt1 = x;
    //console.log("teszt értéke formázás előtt:" + teszt);
    teszt1 = teszt1.replaceAll(",", "");
    teszt1 = teszt1.replaceAll(";", "");
    teszt1 = teszt1.replaceAll("?", "");
    teszt1 = teszt1.replaceAll("!", "");
    teszt1 = teszt1.replaceAll(".", "");
    teszt1 = teszt1.replaceAll("-", "");
    teszt1 = teszt1.replaceAll("–", "");
    teszt1 = teszt1.replaceAll('"', '');
    teszt1 = teszt1.replaceAll("'", "");
    teszt1 = teszt1.replaceAll(":", "");
    teszt1 = teszt1.replaceAll("(", "");
    teszt1 = teszt1.replaceAll(")", "");
    teszt1 = teszt1.replaceAll("[", "");
    teszt1 = teszt1.replaceAll("]", "");
    teszt1 = teszt1.replaceAll("/", "");
    teszt1 = teszt1.toLowerCase();

    //console.log("teszt értéke: " + teszt);
    //var outPut2 = countWords(teszt);
    var wordsArray = splitByWords(teszt1);
    //wordsArray = Selector(wordsArray);
    //console.log(wordsArray);
    for (var i = 0; i < wordsArray.length; i++) {
        wordsArray[i] = Selector(wordsArray[i]);
    }
    var wordsMap = createWordMap(wordsArray);
    //console.log(wordsMap);
    finalWordsArray2 = sortByCount(wordsMap);
    //console.log("finalwordsarray: ")
    //console.log(finalWordsArray2);
    for (var key in finalWordsArray2) {
        if (finalWordsArray2.hasOwnProperty(key)) {
            arr2.push(finalWordsArray2[key]);
        }
    }
    /*console.log("arr2: ");
    console.log(arr2);*/
    customArrays();
    /*console.log('The word "' + finalWordsArray2[0].name + '" appears the most in the file ' +
        finalWordsArray2[0].total + ' times');*/
    /*for (var i = 0; i < finalWordsArray2.length; i++) {
        result += '("' + finalWordsArray2[i].name + '"'+ "," + finalWordsArray2[i].total + "),<br>";
    }*/



}

kotoSzavak = ["avagy", "avagy-avagy", "és", "illetve", "vagy", "vagy-vagy", "azért", "azonban", "ám",
    "csakhogy", "de",
    "ellenben", "hanem", "maga", "mégis", "mégsem", "míg", "mindamellett", "pedig", "viszont", "aztán",
    "aztán pedig",
    "is", "meg", "még", "mind mind", "se", "sem", "sőt", "szintén", "addig hogy", "addig míg", "akkor",
    "akkora hogy", "mint",
    "annak okáért", "annyi hogy", "annyira hogy", "ekképpen", "ennek folytán", "ennélfogva", "eszerint",
    "hát",
    "így", "így tehát", "következésképpen", "tehát", "úgy", "úgyhogy", "azaz", "tudniillik", "ugyanis",
    "vagyis", "akár",
    "azért hogy", "ámbár", "ámde", "bár", "ha", "ha - is", "ha egyszer", "habár", "hiába", "holott",
    "holott pedig",
    "igaz hogy", "jóllehet", "még ha", "mikor", "noha", "ugyan", "hogy", "abban hogy", "ahelyett hogy",
    "amellett hogy", "anélkül hogy", "azon hogy", "azonkívül hogy", "azzal hogy", "arra hogy",
    "avégett hogy",
    "avégre hogy", "nehogy", "abból hogy", "arról hogy", "a", "azt", "az", "ez", "s", "egy"
];


function Selector(word) {
    var seged = null;
    var ret = false;
    for (let i = 0; i < kotoSzavak.length; i++) {
        seged = kotoSzavak[i];
        if (word == seged) {
            ret = true;
        }
    }
    if (ret == true) {
        word = "asd";
        return word;
    } else {
        return word;
    }
}

function splitByWords(text) {
    // split string by spaces (including spaces, tabs, and newlines)
    var wordsArray = text.split(/\s+/);
    return wordsArray;
}

function createWordMap(wordsArray) {

    // create map for word counts
    var wordsMap = {};
    wordsArray.forEach(function (key) {
        if (wordsMap.hasOwnProperty(key)) {
            wordsMap[key]++;
        } else {
            wordsMap[key] = 1;
        }
    });

    return wordsMap;

}

function sortByCount(wordsMap) {

    // sort by count in descending order
    var finalWordsArray = [];
    finalWordsArray = Object.keys(wordsMap).map(function (key) {
        return {
            name: key,
            total: wordsMap[key]
        };
    });

    finalWordsArray.sort(function (a, b) {
        return b.total - a.total;
    });

    return finalWordsArray;

}

function customArrays() {
    var mu1i;
    var mu2i;
    //console.log("ez egy teszt: " + arr2[0]);
    for (var i = 0; i < 100; i++) {
        for (var j = 0; j < 100; j++) {
            if (arr2[i].name == arr1[j].name) {
                mu1szo[mu1i] = arr2[i].name;
                mu1elo[mu1i] = arr2[i].total;
                mu2szo[mu2i] = arr1[j].name;
                mu2elo[mu2i] = arr1[j].total;
                mu1i++;
                mu2i++;
            }
        }
    }

    console.log();
    for (var i = 0; i < 11; i++) {
        console.log("sorstalansag: " + mu1szo[i] + ":" + mu1elo[i]);
        console.log("mu2icsillagok: " + mu2szo[i] + ":" + mu2elo[i]);
    }
}
