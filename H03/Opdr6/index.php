<?php

$zwembad ["De spartelkuikens"] = 25;
$zwembad ["De waterbuffels"] = 32;
$zwembad ["Plonsmderin"] = 11;
$zwembad ["Bommetje"] = 23;



foreach($zwembad as $label => $waarde){
    $images = $waarde / 5;
    $images = floor($images) ;

    echo $label." ".$waarde. "      ";

        for( $a = 0; $a < $images; $a++){
            echo "<img src='icon.jpg'>";

        }
        echo "<br>";
}

?>