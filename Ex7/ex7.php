<?php

$numeros = $_POST["numeros"];

$positivos = [];
$negativos = [];

// Percorrendo o vetor
foreach ($numeros as $num) {

    if ($num >= 0) {
        $positivos[] = $num;
    } else {
        $negativos[] = $num;
    }

}

// Mostrando resultados

echo "<h1>Numeros separados em Listas: </h1>";
echo "<h2>Positivos:</h2>";
echo implode(", ", $positivos);

echo "<h2>Negativos:</h2>";
echo implode(", ", $negativos);

// Botão para Voltar
echo "<br><br>";
echo "<a href='index.php' style='padding: 10px 20px; background-color: #4CAF50; color: white; text-decoration: none; border-radius: 5px;'>← Voltar</a>";

?>