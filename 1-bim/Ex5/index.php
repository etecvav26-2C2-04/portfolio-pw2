<!--
Data: 26/03/2026
Autor: Felipe Costa Salino - Filipe Tomaz de Aquino - João Vitor Lopes de Souza - Victor Camargo de Angelo
Objetivo:

Exercício 5 - Somatório de Fatoriais
Faça um programa que efetue a leitura de 5 valores numéricos inteiros e no final apresente o total do somatório da fatorial de cada valor lido.

-->


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Soma de Fatoriais</title>
</head>
<body>

    <h1>Soma de Fatorias</h1>
    <h2>Programa que soma 5 fatoriais</h2>
    
    <form action="ex5.php" method="post">

        <label>1º número:</label>
        <input type="number" name="num1" required>
        <br><br>

        <label>2º número:</label>
        <input type="number" name="num2" required>
        <br><br>

        <label>3º número:</label>
        <input type="number" name="num3" required>
        <br><br>

        <label>4º número:</label>
        <input type="number" name="num4" required>
        <br><br>

        <label>5º número:</label>
        <input type="number" name="num5" required>
        <br><br>



        <!-- Botão que envia os dados para o PHP -->
        <button type="submit">Calcular</button>

    </form>


</body>
</html>