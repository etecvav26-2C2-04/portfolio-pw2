<?php

$numero = $_POST["txtNumero"];

if ($numero >= 100 && $numero <= 200) {
    echo "O numero: " . $numero . " esta no intervalo de 100 e 200";
} else {
    echo "O numero: " . $numero . " nao esta no intervalo de 100 e 200";
}

?>