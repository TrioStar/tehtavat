<?php
session_start();

if(isset($_GET["action"])) $action = $_GET["action"];
else $action = "index";//mitä tehdään pyyntö index.php?action=login tms

$method = strtolower($_SERVER["REQUEST_METHOD"]); //onko post vai get
//otetaan kirjastot käyttöön

require "./controllers/newscontroller.php";
require "./controllers/usercontroller.php";
require "./database/models/News.php";
require "./database/models/User.php";
require "./helpers/helper.php";
require "./helpers/auth.php";

switch($action) {

    case "index":
    indexcontroller(); //funktio, joka hakee etusivun tarvitsemat asiat
    break;

    case "admin":
    if (isLogged())
        admincontroller();
    else header("Location:./index.php?action=login");
    break;

    case "addnews":
    if (isLogged()) {
        if($method=="get")
            require "./views/addnewsform.view.php";
        else postaddnewscontroller();
    }
    else header("Location:./index.php?action=login");
    break;

    case "adduser":
    if (isLogged()) {
        if($method=="get")
            require "./views/adduserform.view.php";
        else postaddusercontroller();
    }
    else header("Location:./index.php?action=login");
    break;

    case "editnews":
    if (isLogged()) {
        if($method =="get")
        geteditnewscontroller();
        else posteditnewscontroller();
    }
    else header("Location:./index.php?action=login");
    break;

    case "deletenews":
    if(isLogged())
        deletenewscontroller();
    else header("Location:./index.php?action=login");
    break;

    case "deleteuser":
    if(isLogged())
        deleteusercontroller();
    else header("Location:./index.php?action=login");
    break;

    case "login":
    if($method == "get") 
        require "./views/loginform.view.php";
    else postlogincontroller();
    break;

    case "logout":
    logoutcontroller();
    break;
        
}


?>