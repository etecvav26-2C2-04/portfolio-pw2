<!--
Data: 19/03/2026
Autor: Felipe Costa Salino - Filipe Tomaz de Aquino - João Vitor Lopes de Souza - Victor Camargo de Angelo
Objetivo:

Exercício 6 - Série de Fibonacci
Faça um programa que leia um número n e apresente uma lista com a série de Fibonacci, sendo que o tamanho dessa lista é igual a n.
Exemplo:
Valor de n: 12
Resultado: 0 1 1 2 3 5 8 13 21 34 55 89
-->


<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Sequencia Fibonacci</h1>

    <br>
    <form name="frmFibo" action="ex6.php" method="POST">
        <label for="txtFibo">Digite um numero para a sequencia:</label>
        <input type="number" name="txtFibo"  min="1" required/>/>
        <input type="submit" name="btnCalculo" value="descobrir"/>
        </form>

</body>
</html>
