console.log();
console.log("------------------uudet tehtävät------------------");
console.log();
console.log("------------------Tehtävä 1------------------");
console.log();

let opiskelijat = ["Tiina", "Pekka", "Minna"];
console.log(opiskelijat)

opiskelijat.push("Janne")
console.log(opiskelijat)

opiskelijat.push("Aku Ankka")
console.log(opiskelijat)

console.log(opiskelijat.lenght)

console.log(opiskelijat.pop())

console.log();
console.log("------------------Tehtävä 2------------------")
console.log();

for(let i=0; i < opiskelijat.length; i++) {
    console.log(`${i} : ${opiskelijat}`);
}

console.log();

opiskelijat.forEach((element, i) => {
    console.log(`${i} : ${element}`);
});
console.log();
console.log("------------------Tehtävä 3------------------");
console.log();

let opiskelija1 = {nimi: "Tiina", ikä: 47, sähköposti: "testi@testi.net"}
let opiskelija2 = {nimi: "Pekka", ikä: 33, sähköposti: "testi1@testi.net"}
let opiskelija3 = {nimi: "Minna", ikä: 22, sähköposti: "testi2@testi.net"}
let opiskelija4 = {nimi: "Aku Ankka", osoite: "tampere", puh:111222333, ikä: 33, sähköposti: "aku.ankka@ankkalinna.com"}

let olio_opiskelijat = [opiskelija1, opiskelija2, opiskelija3, opiskelija4];

function tulostaOpiskelija() {
    return (`NIMI: ${opiskelija1}, OSOITE: ${opiskelija4.osoite}, IKÄ: ${opiskelija2.ikä}, SÄKÖPOSTI: ${opiskelija3.sähköposti}`);
}

olio_opiskelijat.forEach(opiskelija => {
    console.log(tulostaOpiskelija(opiskelija))
});

console.log();
console.log("------------------Tehtävä 4------------------");
console.log();