<!--
Data: 19/03/2026
Autor: Felipe Costa Salino - Filipe Tomaz de Aquino - João Vitor Lopes de Souza - Victor Camargo de Angelo
Objetivo:

Exercício 9 - Média Aritmética com Função
Crie uma função:

function media($v)

Que receba uma lista de números reais e retorne a média aritmética.
-->


<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<title>Cálculo de Média</title>
</head>
<body>

<h2>Calcular Média</h2>

<!-- 
Formulário que envia a lista de números para o PHP
Os números devem ser separados por espaço ou vírgula
-->
<form action="media.php" method="post">

<label>Digite números reais:</label>
<br>

<!-- Campo onde o usuário digita os números -->
<input type="text" name="numeros" placeholder="Ex: 5 7 8.5 10">

<br><br>

<button type="submit">Calcular Média</button>

</form>

</body>
</html>
