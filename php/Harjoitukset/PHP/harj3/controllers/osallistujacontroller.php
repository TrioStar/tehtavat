<?php


function postAddOsallistujaController()
 {
     if(isset($_POST["etunimi"],$_POST["sukunimi"],$_POST["paikkakunta"])){
         $truename = sanit($_POST["etunimi"]);
         $nickname = sanit($_POST["sukunimi"]);
         $password = sanitpassword($_POST["paikkakunta"]);

        $data = array($etunimi,$sukunimi,$paikkakunta);
        $ok = addtapahtuma($data);

        if($ok) {
            $message = "Osallistuja on lisätty";
            require "./views/admin.view.php";
        } else {
            $message ="Tietokantaan lisääminen ei onnistu";
            require "./views/addtapahtumaform.view.php";
        }
     } else {
        $message = "Lomakkeen tiedoissa puutteita";
        require "./views/addtapahtumaform.view.php";
     }
 }