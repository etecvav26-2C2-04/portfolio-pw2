<?php

$numero = $_POST["txtNumero"];

//Verifica se o número esta entre o 100 e o 200
if ($numero >= 100 && $numero <= 200) {
    echo "O numero: " . $numero . " esta no intervalo de 100 e 200";

//Caso não esteja, sera avisado que o número colocado não cumpre os requisitos 
} else {
    echo "O numero: " . $numero . " nao esta no intervalo de 100 e 200";
}


?>
