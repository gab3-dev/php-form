<?php

    $largura = $_POST['largura'];
    $altura = $_POST['altura'];

    echo "<strong>Area: </strong>";
    echo $altura * $largura."<br>";

    echo "<strong>Perimetro: </strong>";
    echo $altura + $altura + $largura + $largura;

?>