<?php


function indexcontroller()
{
    $allnews = getAllNews();
    //var_dump($allnews);
    require "./views/index.view.php";
}


function admincontroller()
{
    $allnews = getAllNews();
    $allusers = getAllUsers();
    require "./views/admin.view.php";
}

function postaddnewscontroller()
{
    if(isset($_POST["title"],$_POST["content"],$_POST["publishdate"],$_POST["closedate"])) {
        $title = sanit($_POST["title"]);
        $content = sanit($_POST["content"]);
        $publishdate = $_POST["publishdate"];//myös date('Y-m-d');
        $closedate = $_POST["closedate"];

        $data = array($title,$content,$publishdate,$closedate);

        $ok = addNews($data);
         
        if($ok) {
            $message = "Uutinen on lisätty";
            $allnews = getAllNews();
            $allusers = getAllUsers();
            require "./views/admin.view.php";
        } else {
            $message ="Tietokantaan lisääminen ei onnistu";
            require "./views/addnewsform.view.php";
        }
    } else {
        $message = "Lomakkeen tiedoissa puutteita";
        require "./views/addnewsform.view.php";
    }
}

function posteditnewscontroller()
{
    if(isset($_POST["title"],$_POST["content"],$_POST["publishdate"],$_POST["closedate"],$_POST["newsID"])) {
        $title = sanit($_POST["title"]);
        $content = sanit($_POST["content"]);
        $publishdate=$_POST["publishdate"];//myös date('Y-m-d');
        $closedate = $_POST["closedate"];
        $newsID = $_POST["newsID"];

        $data = array($title,$content,$publishdate,$closedate,$newsID);

        $ok = editNews($data);
         
        if($ok) {
            $message = "Uutista on muutettu";
            $allnews = getAllNews();
            $allusers = getAllUsers();
            require "./views/admin.view.php";
        } else {
            $message ="Tietokantaan lisääminen ei onnistu";
            require "./views/editnewsform.view.php";
        }
    } else {
        $message = "Lomakkeen tiedoissa puutteita";
        require "./views/editnewsform.view.php";
    }
}

function geteditnewscontroller()
{
    if(isset($_GET["newsid"])) {
        $newsID = $_GET["newsid"];
        $onenews = getNewsById($newsID);
        require "./views/editnewsform.view.php";
    } else {
        $message = "Uutista ei ole valittu";
        $allnews = getAllNews();
        $allusers = getAllUsers();
        require "./views/admin.view.php";
    }
}

function deletenewscontroller() 
{
    if(isset($_GET["newsid"])) {
        $newsid = $_GET["newsid"];
        if(deleteNews($newsid)) {
            $message = "Uutinen poistettu";
        } else $message = "Poistaminen ei onnistunut";
    } else {
        $message = "Uutista ei ole valittuna";
    }
        $allnews = getAllNews();
        $allusers = getAllUsers();
        require "./views/admin.view.php";
}

?>