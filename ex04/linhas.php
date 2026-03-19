<?php

/*
Recebe o número enviado pelo formulário HTML
*/
$n = $_POST["n"];

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<title>Resultado</title>
</head>
<body>

<h2>Resultado</h2>

<?php

/*
Primeiro laço (for)
Controla a quantidade de linhas
Vai de 1 até o número digitado
*/

for ($i = 1; $i <= $n; $i++) {

    /*
    Segundo laço (for)
    Imprime os números da linha
    */

    for ($j = 1; $j <= $i; $j++) {

        // imprime os números
        echo $j . " ";
    }

    // quebra de linha após terminar cada linha
    echo "<br>";
}

?>

<br><br>

<!-- Link para voltar ao formulário -->
<a href="index.php">Voltar</a>

</body>
</html>