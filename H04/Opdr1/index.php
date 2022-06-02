<?php

function fahrenheit() {

    $c = 0;

    $f = $c * 1.8 + 32;

    echo $f."F <br>";

}


function deeldrie($variable){

    if ($variable % 3 === 0) {
        echo "deelbaar door 3 <br>";
      } else {
       echo "niet <br>";
      }
}

function mirror($string){
 $mirror = strrev($string);

echo $mirror;

}


fahrenheit();
deeldrie(9);
mirror("hello")
?>