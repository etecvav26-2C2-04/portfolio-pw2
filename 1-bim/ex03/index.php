<!--
Data: 19/03/2026
Autor: Felipe Costa Salino - Filipe Tomaz de Aquino - João Vitor Lopes de Souza - Victor Camargo de Angelo
Objetivo:

Exercício 3 -  Calculadora Aritmética
Faça um programa que leia dois números e um operador ("+", "-", "*" ou "/").
O programa deve mostrar o resultado da operação.
-->

<!DOCTYPE html>
<html lang="pt-BR">
<head>
<meta charset="UTF-8">
<title>Calculadora</title>
</head>
<body>

<h2>Calculadora Simples</h2>

<!-- 
O formulário envia os dados para o arquivo PHP.
method="post" envia os dados de forma segura.
-->
<form action="calcular.php" method="post">

    <!-- Campo para o primeiro número -->
    <label>Primeiro número:</label>
    <input type="number" name="num1" required>
    <br><br>

    <!-- Campo para o segundo número -->
    <label>Segundo número:</label>
    <input type="number" name="num2" required>
    <br><br>

    <!-- Campo para escolher o operador -->
    <label>Operador:</label>
    <select name="operador">
        <option value="+">+</option>
        <option value="-">-</option>
        <option value="*">*</option>
        <option value="/">/</option>
    </select>
    <br><br>

    <!-- Botão que envia os dados para o PHP -->
    <button type="submit">Calcular</button>

</form>

</body>
</html>
