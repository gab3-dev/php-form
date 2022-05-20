<?php

    $peso = $_POST["peso"];
    $altura = $_POST["altura"];

    $imc = $peso/ ($altura * $altura);

    if ($imc > 25){
        echo "você está acima do peso! ".$imc;
    }
    else {
        echo "você está saudavel! ".$imc;
    }

?>