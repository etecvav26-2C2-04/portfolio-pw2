<?php
       // Verifica se o valor foi realmente enviado
if (isset($_POST['txtFibo'])) {

       // Converte para inteiro
    $numeroF = (int) $_POST['txtFibo'];

     // Valida
    if ($numeroF <= 0) {
        echo "Digite um número inteiro positivo.";
        exit;
    }

    echo "Valor de n: " . $numeroF;
    echo "<div class='resultado'>";

        // Sequencia Fibonacci
    $a = 0;
    $b = 1;

    for ($i = 1; $i <= $numeroF; $i++) {
        echo $a . " ";

        $temp = $a + $b;
        $a = $b;
        $b = $temp;
    }

} else {
    echo "Nenhum valor foi enviado.";
}
?>