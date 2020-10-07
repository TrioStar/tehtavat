console.log('****kohta 8****');

5 > 4
"apple" > "pineapple"
"2" > "12"
undefined == null
undefined === null
null == "\n0\n"
null === +"\n0\n"

console.log('****kohta 9****');

if ("0") 

console.log( 'Hello' );

console.log('****kohta 10****');


console.log('****kohta 11****');

let a = 10;
let b = 2;
result = (a + b < 4)
console.log(result);

console.log('****kohta 12****');

let viesti;
let login = prompt('Anna kirjautunut:','');
console.log(login);
viesti =(login == 'tyontekia') ? 'hei':
(login == 'johtaja') ? 'hyvaa paivaa' :
(login == '') ? 'ei ole kirjautunut' :
'';

console.log('****kohta 13****');

console.log(null || 2 || undefined );
console.log(console.log(1) || 2 ||
console.log(3));
console.log( 1 && null && 2);
console.log( console.log(1) && console.log(2) );
console.log( null || 2 && 3 || 4 );

console.log('****kohta 14****');

let ika = 14;
//onko ika valissa, saa olla raja-arvo
if (ika >= 14 && ika <= 90) console.log('on valilla')

//ika ei ole valilla, mutta voi olla raja arvo
if (! (ika > 14 && ika < 90)) console.log('ei ole valilla')

if(ika <= 14 || ika >= 90) console.log('ehto toteutuu...')

console.log('****kohta 15****');
if(-1 || 0) console.log('eka');
if(-1 && 0) console.log('toka');
if(null || -1 && 1) console.log('kolmas');

console.log('***kohta 16****');
let numero = prompt('a?','');
switch(numero) {
    case'0':
    console.log(0);
    break;

    case'1':
    console.log(1);
    break;

    case'2':
    case'3':
    console.log('2,3');
    break;

    default:
    console.log('joku muu')
}



















