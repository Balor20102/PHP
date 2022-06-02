<?php

$mailadres = $_POST['email'];
$wachtwoord = $_POST['wachtwoord'];

$users = [ 
    "piet@worldonline.nl" => "doetje123",
    "klaas@carpets.nl" => "snoepje777",
    "truushendriks@wegweg.nl" => "arkiearkie201"
];

    foreach ($users as $key => $value){
        if($key == $mailadres AND $value == $wachtwoord){
            echo true;
        }

    }

    echo false;
	echo "<a href=\"form.html\">Terug naar het formulier</a>";

    
   



?>