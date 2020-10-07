console.log("*****Kohta 8*****");
if(5 > 4) console.log("true");
console.log(5 > 4);
console.log("apple" > "pineapple");
console.log("2" > "12");
console.log(2 > 12);
console.log(undefined == null);
console.log(undefined === null);
console.log(null == "/n0/n");
console.log(null === +"/n0/n");

console.log("****Kohta 9 ehtoja****");
if("0") {
console.log("hello");
}

if(0) {
    console.log("hello");
    }

console.log("*****Kohat 10 ehtoja*****")
let vuosi = prompt(`Minä vuonna ECMAscript-2015 specifikaatio julkaistiin?`,``);

if(vuosi < 2015) {
    console.log(`liian aikainen ...`);
} else if (vuosi > 2015) {
    console.log(`liian aikainen`);
} else {
    console.log(`juuri niin`);
}
