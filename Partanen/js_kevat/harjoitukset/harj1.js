console.log("- - - - - - - - uudet tehtävät - - - - - - - -");

console.log("------------------Tehtävä 1------------------");

function tervehdi(nimi) {
    return `Hei, ${nimi}. Mitä kuuluu?`;
}

console.log(tervehdi("Star"));

console.log("------------------Tehtävä 2------------------");

function korosta(summa) {
    return Math.pow(summa, 2);
}

console.log("x korostuna 2");
console.log(korosta(4));

console.log("------------------Tehtävä 3------------------");

function ikatesti(ika) {
   if (ika >= 18) {
       return "Olet täysi-ikäinen";
   } else {
       return "Olet ala-ikäinen";
   }
} 

console.log(ikatesti(10));
console.log(ikatesti(20));

console.log("------------------Tehtävä 4------------------");

function suurempi(x, y) {
    if (x > y) {
        return `annetuista luvuista ${x} ja ${y} on suurempi ${x}`;
    } else {
        return `annetuista luvuista ${x} ja ${y} on suurempi ${y}`;
    }
}

console.log(suurempi(4, 5));
console.log(suurempi(8, 3));
console.log(suurempi(-2, -1));

console.log("------------------Tehtävä 5------------------");

function pinta_ala(kanta, korkeus) {
    var ala = kanta * korkeus / 2;
    let x = Math.round(ala*10)/10;
    return `${kanta} * ${korkeus} / 2 = ${x}`
}

console.log(pinta_ala(3,4))
console.log(pinta_ala(23,2.2))

console.log("------------------Tehtävä 6------------------");

function osamäärä(jaettava, jakaja) {
    if (jakaja === 0) {
        return `Nollalla jakaminen ei toimi`;
    } else {
    var summa = jaettava / jakaja;
    return `${jaettava} / ${jakaja} = ${summa}`
    }
}

console.log(osamäärä(4, 0))
console.log(osamäärä(64, 8))

console.log("------------------Tehtävä 7------------------");

function robotti(aalonpituus) {
    let vari = "";
    if (aalonpituus >= 380 && aalonpituus <= 450) {
        vari = "violetti";
    } else if (aalonpituus >= 450 && aalonpituus <= 490) {
        vari = "sininen";
    } else if (aalonpituus >= 490 && aalonpituus <= 560) {
        vari = "vihreä";
    } else if (aalonpituus >= 560 && aalonpituus <= 590) {
        vari = "keltainen";
    } else if (aalonpituus >= 590 && aalonpituus <= 630) {
        vari = "oranssi";
    } else if (aalonpituus >= 630 && aalonpituus <= 760) {
        vari = "punainen";
    } else {
        vari = "en tiedä";
    } return vari;
}

console.log(robotti(490))
console.log(robotti(675))
console.log(robotti(964))

console.log("------------------Tehtävä 8------------------");

function taksimatka(km, pp) {
    let taksa = null; 

    if (pp == 1 || pp == 2) {
        taksa = 1.6;
    } else if (pp == 3 || pp == 4) {
        taksa = 1.9;
    } else if (pp == 5 || pp == 6) {
        taksa = 2;
    } else if (pp > 6) {
        taksa = 2.2;
    } 
    var lasku = km * taksa + 5.40;
    return `Taksimatka hinta on ${lasku}`;
} 

console.log(taksimatka(3, 5));

console.log("------------------Tehtävä 9------------------");

function pyöristä(x) {
    if (x >= 0) {
        return Math.floor(x + 0.5);
    } else {
    return Math.ceil(x - 0.5);
}
}

console.log(pyöristä(3.7))
console.log(pyöristä(-4.7))

console.log("------------------Tehtävä 10------------------");

function tuoteen_hinta(euro) {
    ale = null;
    
    if (euro >= 100 && euro <= 200) {
        ale = 10;
    } else if (euro >= 200 && euro <= 500) {
        ale = 15;
    } else if (euro >= 500) {
        ale = 20;
    } 
    var hinta = euro * ale / 100; 
    var maksaa = euro - hinta;
    return `alennus on ${ale} (${hinta}€) ja tuote maksaa ${maksaa}`;
}

console.log(tuoteen_hinta(20))
console.log(tuoteen_hinta(143))
console.log(tuoteen_hinta(353))
console.log(tuoteen_hinta(1862))