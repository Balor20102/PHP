<?php
session_start();

if(isset($_SESSION["user"])){
    echo "<h1>Welkom ".$_SESSION["user"]["naam"]." op de website!";
    //test of inloggen werkt
} else {
 header('Location: inlog.php');
 exit;
 //terug naar inlogscherm
}

?>