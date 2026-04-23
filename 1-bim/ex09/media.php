<?php

/*
Função media($v)
Recebe um vetor (lista de números)
e retorna a média aritmética
*/

function media($v) {

    $soma = 0;          // variável que guarda a soma dos números
    $quantidade = count($v); // conta quantos números existem no vetor

    /*
    Percorre todos os valores do vetor
    */
    foreach ($v as $valor) {
        $soma += (float)$valor;
    }
    /*
    Calcula a média
    */
    return $soma / $quantidade;
}


/*
Recebe os números digitados no formulário
*/
$entrada = $_POST["numeros"];

/*
Transforma a string em um vetor de números
usando espaço como separador
*/
$vetor = explode(" ", $entrada);

/*
Chama a função media()
*/
$resultado = media($vetor);

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<title>Resultado</title>
</head>
<body>

<h2>Resultado da Média</h2>

<?php

/*
Mostra a média na tela
*/
echo "A média dos números é: " . $resultado;

?>

<br><br>

<a href="index.php">Voltar</a>

</body>
</html>