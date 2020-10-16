var mu1szo = [];
var mu1elo = [];
var mu1i = 0;
var mu2szo = [];
var mu2elo = [];
var mu2i = 0;
console.log("ez egy teszt: " + arr2[0]);
for (var i = 0; i < 100; i++) {
    for (var j = 0; j < 100; j++) {
        if (arr2[i].szó == arr1[j].szó) {
            mu1szo[mu1i] = arr2[i].szó;
            mu1elo[mu1i] = arr2[i].előfordulás;
            mu2szo[mu2i] = arr1[j].szó;
            mu2elo[mu2i] = arr1[j].előfordulás;
            mu1i++;
            mu2i++;
        }
    }
}

for (var i = 1; i < 11; i++) {
    console.log("sorstalansag: " + mu1szo[i] + ":" + mu1elo[i]);
    console.log("mu2icsillagok: " + mu2szo[i] + ":" + mu2elo[i]);
}