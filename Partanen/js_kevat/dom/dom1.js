// nämä ajetaan kun tiedosto latautuu:
let myButton = document.querySelector("button");
myButton.innerText = "Paina tästä";
let myText = document.querySelector(".message");

// tapahtumakuuntelijat:
myButton.addEventListener("click", changeColor);
myText.addEventListener("click", changeColor);

// callback-funktio (ajetaan vasta kun tapahtuma tapahtuu):
function changeColor() {
    myText.style.color="red";
}

// tervehtiminen input:in avulla
let myGreeting = document.getElementById("greeting");
let myName = document.getElementById("name");
let myGo1 = document.getElementById("go1");

function greetings(){
    let name = myName.value;
    myGreeting.innerText = "Hei, " + name + "!";
}

myGo1.addEventListener("click", greetings);