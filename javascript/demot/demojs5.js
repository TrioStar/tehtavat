var opiskelijat = new Array(); //luo taulukon (tyhjän)

opiskelijat[0] = "Anssi";
opiskelijat[1] = "Elia";
opiskelijat[2] = "Pellervo";
opiskelijat[3] = "Pulma";

//luetaan taulukon 
for(let i = 0; i < opiskelijat.length; i++) {
    console.log(opiskelijat[i]);
}

opiskelijat[1] = "Eemeli"

for(let i = 0; i < opiskelijat.length; i++) {
    console.log(opiskelijat[i]);
}

console.log(opiskelijat.length); //taulukon pituus

opiskelijat.push("Aaretti")

for(let i = 0; i < opiskelijat.length; i++) {
    console.log(opiskelijat[i]);
}

console.log(opiskelijat.length); //taulukon pituus

let numerot = new Array();

//annetaan arvot taulukkon (1 - 20)

for(let i = 1; i <= 20 ; i++) {
    numerot[i-1] = i;
}

for(let i = 0; i < numerot.length; i++) {
    console.log(numerot[i]);
}

console.log(numerot.length); //taulukon pituus








let tyylit = new Array();

tyylit.push("Jazz");
tyylit.push("Blues");
tyylit.push("Rock-n-roll");

for(let i = 0; i < numerot.length; i++) {
    console.log(numerot[i]);
}

tyylit[Math.floor((tyylit.length - 1) / 2)] ="classics";

for(let i = 0; i < tyylit.length; i++) {
    console.log(tyylit[i]);
}

console.log(tyylit.shift());

for(let i = 0; i < tyylit.length; i++) {
    console.log(tyylit[i]);
}

tyylit.unshift("Rap","Reggae");

for(let i = 0; i < tyylit.length; i++) {
    console.log(tyylit[i]);
}

function kertotaulukko(n)
{
    for(let j = 1; j <= n; j++) {   
        for(let i = 1; i <= n; i++) {
            let vastaus = j * i;
            console.log("luvulla "+ j + " kerrottuna " + i +" on " +vastaus)
        }
    }
}

let kerrat = prompt('Anna kertojen 1km','');
kertotaulukko(kerrat);

var apps = ['Trello','Facebook','Twitter'];
var playstore = [];

apps.forEach(function(item) {
    playstore.push(item); 
});

console.log(playstore)

