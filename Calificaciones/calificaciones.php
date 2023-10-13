<?php
    $nCal=$_GET["nCal"];

    //Iniciamos con la logica de nuestros if

    if ($nCal == 0 || $nCal == 1 || $nCal == 2 || $nCal == 3){
        echo "Tienes que repetir las clases" ;
        echo "<br></br>";
        echo "Lastima margarito...";
        echo "<br></br>";
        echo '<a href="index.php">Regresar</a>';

    }
    else if ($nCal == 4 || $nCal == 5){
        echo "Echale mas ganas";
        echo "<br></br>";
        echo '<a href="index.php">Regresar</a>';

    }
    else if ($nCal == 5 || $nCal == 6){
        echo "Apenas y pasaste";
        echo "<br></br>";
        echo '<a href="index.php">Regresar</a>';
    }
    else if ($nCal == 7 || $nCal == 8){
        echo "Very gregorianto xd";
        echo "<br></br>";
        echo '<a href="index.php">Regresar</a>';
    }
    else if ($nCal == 9 || $nCal == 10){
        echo "Eres el/la mejor de todos :)";
        echo "<br></br>";
        echo '<a href="index.php">Regresar</a>';
    }
    else{
        echo "Ingresaste un valor erroneo, por favor vuelve a intentarlo";
        echo "<br></br>";
        echo '<a href="index.php">Regresar</a>';
    }
?>