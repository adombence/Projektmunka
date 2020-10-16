console.log("teszt");
var finalWordsArray;
var finalWordsArray2;


function clicked() {
    var x = document.getElementById("myText1").value;
    x = x.replaceAll(",", "");
    x = x.replaceAll(";", "");
    x = x.replaceAll("?", "");
    x = x.replaceAll("!", "");
    x = x.replaceAll(".", "");
    x = x.replaceAll("-", "");
    x = x.replaceAll("–", "");
    x = x.replaceAll('"', '');
    x = x.replaceAll("'", "");
    x = x.replaceAll(":", "");
    x = x.replaceAll("(", "");
    x = x.replaceAll(")", "");
    x = x.replaceAll("[", "");
    x = x.replaceAll("]", "");
    x = x.replaceAll("/", "");
    x = x.toLowerCase();

    var wordsArray = splitByWords(x);
    for (var i = 0; i < wordsArray.length; i++) {
        wordsArray[i] = Selector(wordsArray[i]);
    }
    var wordsMap = createWordMap(wordsArray);
    finalWordsArray = sortByCount(wordsMap);

    for (var key in finalWordsArray) {
        if (finalWordsArray.hasOwnProperty(key)) {
            arr1.push(finalWordsArray[key]);
        }
    }
    console.log(arr1);
}

function clicked2() {
    var x = document.getElementById("myText2").value;
    x = x.replaceAll(",", "");
    x = x.replaceAll(";", "");
    x = x.replaceAll("?", "");
    x = x.replaceAll("!", "");
    x = x.replaceAll(".", "");
    x = x.replaceAll("-", "");
    x = x.replaceAll("–", "");
    x = x.replaceAll('"', '');
    x = x.replaceAll("'", "");
    x = x.replaceAll(":", "");
    x = x.replaceAll("(", "");
    x = x.replaceAll(")", "");
    x = x.replaceAll("[", "");
    x = x.replaceAll("]", "");
    x = x.replaceAll("/", "");
    x = x.toLowerCase();
    //console.log(x);
    var wordsArray = splitByWords(x);
    for (var i = 0; i < wordsArray.length; i++) {
        wordsArray[i] = Selector(wordsArray[i]);
    }
    var wordsMap = createWordMap(wordsArray);
    finalWordsArray2 = sortByCount(wordsMap);

    for (var key in finalWordsArray2) {
        if (finalWordsArray2.hasOwnProperty(key)) {
            arr2.push(finalWordsArray2[key]);
        }
    }
    //console.log(finalWordsArray2);
    /*for(var i = 0; i < finalWordsArray2.length; i++) {
        console.log(finalWordsArray2[i].name + ":" + finalWordsArray2[i].total);
    }*/
    console.log(arr1);
    customArrays();
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
    var mu1i = 0;
    var mu2i = 0;
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