<?php



function indexcontroller()
{
    $tapahtumat = getAllTapahtumat();
    //var_dump($tapahtumat);
    require "./views/index.view.php";
}

function admincontroller()
{
    $tapahtumat = tapahtumat();
    //var_dump($tapahtumat);
    require "./views/admin.view.php";
}

function deleteTapahtumaController()
{
    if(isset($_GET["tapahtumaID"])) {
        $tapahtumaID = $_GET["tapahtumaID"];
        if(deleteTapahtuma($tapahtumaID)) {
            $message="Tapahtuma on poistettu";
            $tapahtumat = getAllTapahtumat();
        } else $message="Tapahtuma ei poistunut"; {
            $tapahtumat = getAllTapahtumat();
            
        }
        require "./views/index.view.php";
    }
    /* myös 
    } else { $tapahtuma = tapahtumat();
        $message = "ei poistettavaa id:tä";
        require "./views/admin.view.php";
    }*/
}

function postAddtapahtumaController() 
{
    if(isset($_POST["nimi"],$_POST["paivays"])) {
        $nimi = $_POST["nimi"];
        $paivays = $_POST["paivays"];

        $data = array($nimi,$paivays);

        $ok = addtapahtuma($data);
         
        if($ok) {
            $message = "Tapahtuma on lisätty";
            $tapahtumat = getAllTapahtumat();
            require "./views/index.view.php";
        } else {
            $message ="Tietokantaan lisääminen ei onnistu";
            require "./views/addnewsform.view.php";
        }
    } else {
        $message = "Lomakkeen tiedoissa puutteita";
        require "./views/addnewsform.view.php";
    }
}

function posteditTapahtumaController() 
{
    if(isset($_GET["tapahtumaID"],$_POST["nimi"],$_POST["paivays"])) {
        $tapahtumaID = $_GET["tapahtumaID"];
        $nimi = ($_POST["nimi"]);
        $paivays = ($_POST["paivays"]);

        $data = array($nimi,$paivays,$tapahtumaID);

        if(editTapahtuma($data)) {
            $message = "Muokkaus on tehty";

        } else {
            $message = "Muokkaus ei onnistunut";  
        }
    } else { 
        $message = "Lomakkeelta puuttuu tietoja";         
    }
    $tapahtumat = getAllTapahtumat();
    require "./views/index.view.php";
}

function geteditTapahtumaController() 
{
    if(isset($_GET["tapahtumaID"])) {
        $tapahtumaID = $_GET["tapahtumaID"];
        $tapahtuma = getTapahtumaById($tapahtumaID);
        //var_dump($tapahtuma);
        require "./views/edittapahtumaform.view.php";
    } else {
        $message="Ei valittuna pelaajaa";
        $tapahtumat = getAllTapahtumat();
        require "./index.view.php";
    }
}