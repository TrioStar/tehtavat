console.log("- - - - - - - - uudet tehtävät - - - - - - - -");

function fritename() {
    var firstname = document.getElementById("firstname").value;
    alert(firstname);
    document.getElementById("result").innerHTML = firstname;
}

function age_check() {
    var age_check = document.getElementById("txt_age_check").value;
    alert(age_check);
    document.getElementById("result2").innerHTML = age_check;
    if (age_check < 16) {
        alert("olet liian nuori pelaamaan tätä peliä");
    } else {
        alert("hyvä, jatketaan");
    }
}