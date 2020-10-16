var x;
function myFunction() {
  x = document.getElementById("myText").value;
  document.getElementById("demo").innerHTML = x;
}

kotoSzavak = ["avagy", "avagy-avagy", "és", "illetve", "vagy", "vagy-vagy", "azért", "azonban", "ám", "csakhogy", "de",
  "ellenben", "hanem", "maga", "mégis", "mégsem", "míg", "mindamellett", "pedig", "viszont", "aztán", "aztán pedig",
  "is", "meg", "még", "mind mind", "se", "sem", "sőt", "szintén", "addig hogy", "addig míg", "akkor", "akkora hogy",
  "annak okáért", "annyi hogy", "annyira hogy", "ekképpen", "ennek folytán", "ennélfogva", "eszerint", "hát",
  "így", "így tehát", "következésképpen", "tehát", "úgy", "úgyhogy", "azaz", "tudniillik", "ugyanis", "vagyis", "akár",
  "azért hogy", "ámbár", "ámde", "bár", "ha", "ha - is", "ha egyszer", "habár", "hiába", "holott", "holott pedig",
  "igaz hogy", "jóllehet", "még ha", "mikor", "noha", "ugyan", "hogy", "abban hogy", "ahelyett hogy",
  "amellett hogy", "anélkül hogy", "azon hogy", "azonkívül hogy", "azzal hogy", "arra hogy", "avégett hogy",
  "avégre hogy", "nehogy", "abból hogy", "arról hogy","a","az","ez"
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

//JavaScript code
function countWords(str) {
  //Edge case: an empty array
  if (str.length === 0) {
    return {};
  }
  var output = {};
  var strArr = str.split(" ")
  //if(strArr[strArr.length-1] == ",") console.log("ez egy vessző");
  //A loop
  for (var i = 0; i < strArr.length; i++) {
    //console.log(i + ":" + strArr[i]);
    var word = Selector(strArr[i]);
    //console.log("teszt: " + strArr[i]);
    //console.log(kotoSzavak[i]);
    if (output[word] === undefined) {
      output[word] = 1;
    } else {
      output[word] += 1;
    }

  }
  return output;
}


/* TEST CODE */
var output = countWords('ask a bunch get a bunch');
console.log(output);
// { ask: 1, a: 2, bunch: 2, get: 1 }
var teszt = x;
console.log("teszt értéke formázás előtt:" + teszt);
teszt = teszt.replaceAll(",","");
teszt = teszt.replaceAll(";","");
teszt = teszt.replaceAll("?","");
teszt = teszt.replaceAll("!","");
teszt = teszt.replaceAll(".","");
teszt = teszt.replaceAll("-","");
teszt = teszt.replaceAll('"','');
teszt = teszt.replaceAll("'","");
teszt = teszt.replaceAll(":","");
teszt = teszt.toLowerCase();

console.log("teszt értéke: " + teszt);
var outPut2 = countWords(teszt);
console.log(outPut2);