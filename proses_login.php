<?php
session_start();
if (isset($_SESSION["session_status"]))
{
    echo("<pre>");
    echo("user name : <b>".$_SESSION["session_user"]."</b><br>");
    echo("password :<b>".$_SESSION["session_password"]."</b><br>");
    echo("Click <a href=\"logout.php\">Loggout</a>untuk keluar !");
    echo("</pre>");
}else
{
    header("Location: login.php");
    exit;
}

?>