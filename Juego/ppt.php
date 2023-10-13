<?php

    $play1=$_GET["p1"];
    $play2=$_GET["p2"];

    //Iniciamos con la logica de nuestros if

    if (($play1 == "piedra" && $play2 == "tijera") || ($play1 == "tijera" && $play2 == "papel") 
        || ($play1 == "papel" && $play2 == "piedra")){
        echo "Gana el player 1";
        echo "<br></br>";
        echo '<a href="index.php">Regresar</a>';

    }
    else if (($play2 == "piedra" && $play1 == "tijera") || ($play2 == "tijera" && $play1 == "papel") 
        || ($play2 == "papel" && $play1 == "piedra")){
        echo "Gana el player 2";
        echo "<br></br>";
        echo '<a href="index.php">Regresar</a>';

    }
    else if (($play2 == "piedra" && $play1 == "piedra") || ($play2 == "tijera" && $play1 == "tijera") 
        || ($play2 == "papel" && $play1 == "papel")){
        echo "Empate por parte de los dos players";
        echo "<br></br>";
        echo '<a href="index.php">Regresar</a>';

    }
    else{
        echo "Ingresaste un valor erroneo, por favor vuelve a intentarlo";
        echo "<br></br>";
        echo '<a href="index.php">Regresar</a>';
    }
?>