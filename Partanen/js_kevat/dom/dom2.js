let myList = document.getElementById("namelist");

function appendChild(text) {
    let newListElem = document.createElement("li");
    newListElem.textContent = text;
    return newListElem;
}

let name = ["Star","Arlet","Juuso","Roni"];

name.forEach(name =>{
    let elem = newListEmel(name,"li");
    myList.appendChild(elem);
})