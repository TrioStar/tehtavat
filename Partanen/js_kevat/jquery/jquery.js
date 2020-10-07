$(document).ready(function(){

    // jQuery koodi tulee tähän...
    
    $("#warning").css ("color", "red")

    function piilotus() {
        $(".special").hide();
    }

    $("h1").on("click", piilotus);

    $("p").on("click", function() {
        $(this).css("color", "violet");
    })

    let students = ["Tiina", "Janne", "Heikki", "Pirkko"];
    
    $(".part2").append("<p>Tässä uusi juttu, lisätty jQueryllä</p>");

    let newList = students.map((student) => "<li>"+student+"</li>")

    $(".part2").append("<ul></ul>");

    //console.log(newList)

    $("ul").append(newList);

    function readName() {
      
    let myName = $(".name").val();

    console.log(myName); 
    }
    
    $("h1").on("click", readName);

  });