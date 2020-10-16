var sorstalansagSzo = [];
var sorstalansagElo = [];
var sorsI = 0;
var egricsillagokSzo = [];
var egricsillagokElo = [];
var egrI = 0;
for (var i = 0; i < 100; i++) {
    for (var j = 0; j < 100; j++) {
        if (sorstalansagArray[i].szó == egricsillagokArray[j].szó) {
            sorstalansagSzo[sorsI] = sorstalansagArray[i].szó;
            sorstalansagElo[sorsI] = sorstalansagArray[i].előfordulás;
            egricsillagokSzo[egrI] = egricsillagokArray[j].szó;
            egricsillagokElo[egrI] = egricsillagokArray[j].előfordulás;
            sorsI++;
            egrI++;
        }
    }
}

for (var i = 0; i < 10; i++) {
    console.log("sorstalansag: " + sorstalansagSzo[i] + ":" + sorstalansagElo[i]);
    console.log("egricsillagok: " + egricsillagokSzo[i] + ":" + egricsillagokElo[i]);
}