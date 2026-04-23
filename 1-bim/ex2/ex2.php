<?php

$temp = $_POST["txtTemperatura"];
$medida = $_POST["txtMedidas"];


if ($medida == "F" || $medida == "C" ||  $medida == "f" || $medida == "c") {
    if ($medida == "F" || $medida == "f"){

        $nova_temp = ($temp - 32) * 5 / 9 ;
        echo "A sua temperatura em Celcius é: " . number_format($nova_temp, 2) . "°C" ;
    }
    else{
        $nova_temp = ($temp * 9 / 5) + 32 ;
        echo "A sua temperatura em Fahrenheit é: " . number_format($nova_temp, 2) . "°F";
    }
}
else {
    echo "Por favor especifique a medida correta, entre: (C ou F)";
}

?>