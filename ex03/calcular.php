<?php

/*
Recebe os valores enviados pelo formulário HTML
usando o método POST
*/

$num1 = $_POST["num1"];       // primeiro número
$num2 = $_POST["num2"];       // segundo número
$operador = $_POST["operador"]; // operador escolhido

/*
Estrutura condicional para verificar
qual operação foi escolhida
*/

if ($operador == "+") {
    $resultado = $num1 + $num2;
}

elseif ($operador == "-") {
    $resultado = $num1 - $num2;
}

elseif ($operador == "*") {
    $resultado = $num1 * $num2;
}

elseif ($operador == "/") {

    /*
    Verifica se o segundo número é zero
    para evitar divisão por zero
    */

    if ($num2 == 0) {
        $resultado = "Erro: divisão por zero";
    } else {
        $resultado = $num1 / $num2;
    }
}

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<title>Resultado</title>
</head>
<body>

<h2>Resultado da Operação</h2>

<?php

/*
echo mostra o resultado na tela
*/

echo "Primeiro número: " . $num1 . "<br>";
echo "Segundo número: " . $num2 . "<br>";
echo "Operador: " . $operador . "<br><br>";

echo "Resultado: " . $resultado;

?>

<br><br>

<!-- Link para voltar ao formulário -->
<a href="index.php">Voltar</a>

</body>
</html>