function tarkistaIka(ika)
{
   if (ika > 18) {
   return true;
   } else {
   // ...
   return confirm('Saitko vanhemmiltasi luvan?');
   }
}

let ika = prompt ('anna ikäsi','');

if(tarkistaIka(ika)) console.log('ok'); 

//kohta B

function tarkistaB(ika)
{
    if (ika > 18){
        return true;
    }
    return confirm('Saitko vanhemmiltasi luvan?')
}

ika = prompt ('anna ikäsi','');
if(tarkistaB(ika)) console.log('ok');


function tarkistaIkaC(ika)
{
    return (ika > 18) || confirm ('Saitko vanhemmiltasi luvan?','')
}

if(tarkistaIkaC(ika)) console.log('ok');



function min(lukuA,lukuB)
{
    if(lukuA < lukuB) return lukuA;
    else return lukuB;
}
let eka = 5;
let toka = 7;

console.log(min(eka, toka));