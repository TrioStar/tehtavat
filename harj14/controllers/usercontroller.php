<?php


function postaddusercontroller()
 {
     if(isset($_POST["truename"],$_POST["nickname"],$_POST["password"],$_POST["password2"]) && $_POST["password"] == $_POST["password2"]) {
         $truename = sanit($_POST["truename"]);
         $nickname = sanit($_POST["nickname"]);
         $password = sanitpassword($_POST["password"]);

        $data = array($truename,$nickname,$password);
        $ok = addUser($data);

        if($ok) {
            $message = "Käyttäjä on lisätty";
            $allnews = getAllNews();
            $allusers = getAllUsers();
            require "./views/admin.view.php";
        } else {
            $message ="Tietokantaan lisääminen ei onnistu";
            require "./views/adduserform.view.php";
        }
     } else {
        $message = "Lomakkeen tiedoissa puutteita";
        require "./views/adduserform.view.php";
     }
 }

function postlogincontroller()
{
   if(isset($_POST["nickname"],$_POST["password"]))  {
       $nickname = sanit($_POST["nickname"]);
       $password = trim($_POST["password"]);
            
       $ok = loginUser($nickname,$password); //tietokantamallissa
            
       if($ok) {
           $user = getUserByNickname($nickname);
           $id = $user[0]["userID"];
           $ip = $_SERVER["REMOTE_ADDR"];

           //asetetaan istuntomuuttujan arvot

           $_SESSION["id"] = $id;
           $_SESSION["ip"] = $ip;
           $allnews = getAllNews();
           $allusers = getAllUsers();
           require "./views/admin.view.php";

       } else {
           $message = "Käyttäjää ei löydy";
           require "./views/loginform.view.php";
       }
   } else {
       $message = "Täytä kaikki tiedot!";
       require "./views/loginform.view.php";
   }
}

function logoutcontroller()
{
    if(isset($_SESSION["ip"],$_SESSION["id"]))  {
        session_unset(); //poistaa istuntomuuttujat
        session_destroy();//poistaa koko istunnon
        header("Location:./index.php");
    } else header("Location:./index.php");

}

function deleteusercontroller() 
{
    if(isset($_GET["userid"])) {
        $userid = $_GET["userid"];
        if(deleteUser($userid)) {
            $message = "Käyttäjä poistettu";
        } else $message = "Poistaminen ei onnistunut";
    } else {
        $message = "Käyttäjää ei ole valittuna";
    }
        $allnews = getAllNews();
        $allusers = getAllUsers();
        require "./views/admin.view.php";
}