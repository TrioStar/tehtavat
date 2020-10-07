<?php
session_start();

if(isset($_GET["action"])) $action = $_GET["action"];
else $action = "index";

$method = strtolower($_SERVER["REQUEST_METHOD"]);

require "./controllers/tapahtumatcontroller.php";
require "./database/models/tapahtuma.php";

switch($action) {

    case "index":
    indexcontroller();
    break;

    case "deletetapahtuma":
    deleteTapahtumaController();
    break;

    case "edittapahtuma":
    if($method == "get") {
        geteditTapahtumaController();
    } else posteditTapahtumaController();
    break;

    case "addtapahtuma":
    if($method=="get")
        require "./views/addtapahtumaform.view.php";
    else postAddtapahtumaController();
    break;

    default:
    echo "404";
}