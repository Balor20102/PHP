<style>

    body{
        text-align: center;
    }

  .groen{
      border: 5px solid green;
  }

  .rood{
      border: 5px solid red;
  }


</style>

<?php

for( $a = 1; $a < 10 ; $a++ ){
    
    if ($a % 2 == 0){

        $class = "class='rood'";
    } 
    else
     {
        $class = "class='groen'";
    }
    echo "<img ".$class. "src='../apen/aap".$a.".jpg'>";

}


?>
