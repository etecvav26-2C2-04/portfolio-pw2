<?php

// Pegando os valores do formulário
$num1 = $_POST["num1"];
$num2 = $_POST["num2"];
$num3 = $_POST["num3"];
$num4 = $_POST["num4"];
$num5 = $_POST["num5"];

// Função para calcular fatorial
function fatorialComConta($n) {
    if ($n == 0) {
        return ["conta" => "0! = 1", "resultado" => 1];
    }

    $resultado = 1;
    $conta = "";

    for ($i = $n; $i >= 1; $i--) {
        $resultado *= $i;
        $conta .= $i;

        if ($i > 1) {
            $conta .= " x ";
        }
    }

    return ["conta" => $conta, "resultado" => $resultado];
}


// Calculando os fatoriais
$dados1 = fatorialComConta($num1);
$dados2 = fatorialComConta($num2);
$dados3 = fatorialComConta($num3);
$dados4 = fatorialComConta($num4);
$dados5 = fatorialComConta($num5);

$soma = $dados1["resultado"] + $dados2["resultado"] + $dados3["resultado"] + $dados4["resultado"] + $dados5["resultado"];


// Mostrando o resultado
echo "<h2>Resultados:</h2>";

echo "$num1! = " . $dados1["conta"] . " = " . $dados1["resultado"] . "<br>";
echo "$num2! = " . $dados2["conta"] . " = " . $dados2["resultado"] . "<br>";
echo "$num3! = " . $dados3["conta"] . " = " . $dados3["resultado"] . "<br>";
echo "$num4! = " . $dados4["conta"] . " = " . $dados4["resultado"] . "<br>";
echo "$num5! = " . $dados5["conta"] . " = " . $dados5["resultado"] . "<br>";

echo "<br><h2>Soma total = $soma</h2>";

// Botão para Voltar
echo "<br><br>";
echo "<a href='index.php' style='padding: 10px 20px; background-color: #4CAF50; color: white; text-decoration: none; border-radius: 5px;'>← Voltar</a>";

?>