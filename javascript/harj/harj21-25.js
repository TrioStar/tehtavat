console.log('****kohta 21****')

var ruoka = new Array();

ruoka[0] = "voi";
ruoka[1] = "kerma";
ruoka[2] = "kahvi";
ruoka[3] = "leipä";
ruoka[4] = "juusto";

for(let i = 0; i < ruoka.length; i++) {
    console.log(ruoka[i]);
}

console.log(ruoka.length);

console.log('****kohta 22****')


    var table = [];
    for(let i = 1; i <= 25; i++) {
        table[i - 1] = i;
    }

console.log('****kohta 23****')

function eka([a,b,c,d],n)
{
    let taulukko = [a,b,c,d];
    let uusi = new Array();
    for(let i = 0; i < n; i++) {
        uusi[i] = taulukko[i];
    }
    return uusi;
}

console.log('****kohta 24****')

console.log(eka([7, 9, 0, -2]));
console.log(eka([],3));
console.log(eka([7, 9, 0, -2],3));
console.log(eka([7, 9, 0, -2],6));
console.log(eka([7, 9, 0, -2],-3));

function vika([a,b,c,d],n)
{
    let taulukko = [a,b,c,d];
    let uusi = new Array();
    for(let i = taulukko.length - n; i < taulukko.length; i++) {
        uusi[i] = taulukko[i];
    }
    return uusi;
}

console.log('****kohta 25****')

console.log(eka([7, 9, 0, -2]));
console.log(eka([],3));
console.log(eka([7, 9, 0, -2],3));
console.log(eka([7, 9, 0, -2],6));
console.log(eka([7, 9, 0, -2],-3));


let i = 0;
while(i < 3) {
    console.log(`numero ${i}!`);
    i++;
}