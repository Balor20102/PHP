<?php

session_start();

if(isset($_SESSION["user"]["naam"]) && $_SESSION["user"]["rol"]=="Admin"){
    echo "<h1>Welkom ".$_SESSION["user"]["naam"]." op de website!";
    //test of inloggen werkt
} else {
  echo "je hebt onvoldoende rechten<br>";
    echo "<a href = inlog.php> inlog </a>";
 exit;
 //terug naar inlogscherm
}

?>