<!--
Data: 19/03/2026
Autor: Felipe Costa Salino - Filipe Tomaz de Aquino - João Vitor Lopes de Souza - Victor Camargo de Angelo
Objetivo:

Exercício 4 - Triângulo Numérico
Leia um número n e imprima n linhas no seguinte formato (exemplo para n = 6):

1
1 2
1 2 3
1 2 3 4
1 2 3 4 5
1 2 3 4 5 6
-->

<!DOCTYPE html>
<html lang="pt-BR">
<head>
<meta charset="UTF-8">
<title>Gerador de Linhas</title>
</head>
<body>

<h2>Gerar Linhas Numéricas</h2>

<!-- 
Formulário que envia o número para o PHP
-->
<form action="linhas.php" method="post">

    <!-- Campo para digitar o valor de n -->
    <label>Digite um número:</label>
    <input type="number" name="n" required>

    <br><br>

    <!-- Botão que envia os dados -->
    <button type="submit">Gerar</button>

</form>

</body>
</html>
