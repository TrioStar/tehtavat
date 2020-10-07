import { countryes } from "./countries-data.js";

let countryList = document.getElementById("countryList");

function newTextElem(text, type) {
    let myElem = document.createElement(type)
    myElem.textContent = text;
    return myElem;
}

function changecolor(elem, color) {
    elem.style.color = color;
}

function newInfoDiv(country){
    let myDiv = document.createElement("div");

    let myCapital = newTextElem( "Pääkaupunki:" + country.capital, "p");
    let myPopulation = newTextElem("Asukasluku:" + country.population, "p");
    let myImage = document.createElement("img");
    myImage.src = country.flag;

    myDiv.append(myCapital, myPopulation, myImage);

    return myDiv;

    function toggleData(item){
    if(item.style.display === "none"){
        item.style.display = "block";
    } else {
        item.style.display = "none";
    }
}
}

function newCountryDiv(country){
    let myDiv = document.createElement("div");
    myDiv.className = "country";

    let myTitle = newTextElem(country.name,"H3")

    //isättiin callback-functiot:
    myTitle.addEventListener("mouseover", () => changeColor(myTitle, "red"));
    myTitle.addEventListener("mouseout", () => changeColor(myTitle, "black"));

    // lisätään tietoa:
    let MyInfoDiv = newInfoDiv(country);
    myInfoDiv.style.display = "none";

    myDiv.append(myTitle, myInfoDiv);

    myTitle.addEventListener("click", () => toggleData(myInfoDiv));

    return myDiv;
}

countries.forEach(country => {
    let elem = newCountriesDiv(country);
    countryLins.appendChild(elem);
})