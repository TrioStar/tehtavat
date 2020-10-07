console.log('****kohta 11*****')

function kesto(nopeus, matka)
{
    let aika = matka/nopeus;
    return aika;
}

let matka = 200;
let nopeus = 100;

console.log(kesto(nopeus, matka));


console.log('****Kohat 12****')

function suorakulmioAla(sivuA, sivuB)
{
    let pituus = sivuA/sivuB;
    return pituus;
}

let sivuA = 25;
let sivuB = 10;

console.log(suorakulmioAla(sivuA, sivuB));


console.log('****Kohat 13****')

function  tuumatSenteiksi(tuumat, sentit)
{
    let sentti = tuumat*sentit;
    return sentti;
}

let tuumat = 2.54;
let sentit = 10;

console.log(tuumatSenteiksi(tuumat, sentit));


console.log('****Kohat 14****')

function parillisuusTesti(luku)
{
    if (luku%2 == 0)
    return 'parillinen';
    else return 'pariton';
}

let luku = prompt('luku');

console.log(parillisuusTesti(luku));


console.log('****Kohat 15****')

function parillisuusTesti2(luku1)
{
    if (luku1%2 == 0)
    return true;
    else return false;
}

let luku1 = prompt('luku1');

console.log(parillisuusTesti2(luku1));


console.log('****Kohat 16****')

function onKarkausvuosi(vuosi)
{
    if (vuosi%2 == 0)
    return true;
    else return false;
}

let vuosi = prompt('vuosi');

console.log(onKarkausvuosi(vuosi));


console.log('****Kohat 17****')

function onValissa(luku2)
{
    if(luku2 >= 0 && luku2 <= 10)
    return true;
    else return false;
}

//let luku2 = prompt('luku2')

console.log(onJakojaannos(2));
console.log(onJakojaannos(-10));
console.log(onJakojaannos(88));


console.log('****kohta 18****')
//kohta18
function onJakojaannos(luku3)
{
    if(luku3 >= 0 && luku <= 1)
    return true;
    else return false;
}

//let luku3 = prompt('luku3')

console.log(onJakojaannos(20/4));
console.log(onJakojaannos(20/3));
console.log(onJakojaannos(20/20));


console.log('****kohta 19****')

function CelciusFahrenheit(celcius,fahrenheit)
{
    if (fahrenheit=(celcius)*1.8+32)
    return true;
    else return false;
}

console.log(CelciusFahrenheit(10));
console.log(CelciusFahrenheit(-5));
console.log(CelciusFahrenheit(20));


console.log('****kohta 20****')

function CelciusFahrenheit2(celcius2,fahrenheit2)
{
    if (fahrenheit2=(celcius2)*1.8+32)
    return true;
    else return false;
}

console.log(CelciusFahrenheit2(100));
console.log(CelciusFahrenheit2(-50));
console.log(CelciusFahrenheit2(20));




