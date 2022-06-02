<?php

$leeftijd= 13;

$reis = 10;
$prijs = 0;

if ( $leeftijd > 65){
    $prijs = $reis * 0.5;
    echo $prijs.'<br>';
}

else if ($leeftijd < 13){
    $prijs = $reis * 0.5;
    echo $prijs.'<br>';
}

else if ( $leeftijd <= 3){
    $prijs = $reis * 0;
    echo $prijs.'<br>';
} 

else {
    echo $reis. " euro";
}


?>
