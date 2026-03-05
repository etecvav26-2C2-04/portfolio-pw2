<!--
Data: 05/03/2026
Autor: Felipe Costa Salino - Filipe Tomaz de Aquino - João Vitor Lopes de Souza - Victor Camargo de Angelo
Objetivo:

Exercício 2 - Conversão de Temperatura
Faça um programa que leia um caractere "F" ou "C", que indica se o próximo valor corresponde à temperatura em Fahrenheit ou Celsius.
Em seguida,o programa deve ler o valor da temperatura e então imprimir o valor correspondente na outra unidade de medida.
Observação: C = 5/9 × (F − 32)
-->


<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicios</title>
</head>
<body>

    <h1>Convertor de temperatura</h1>
    <h2>De Fahrenheit para Celsius ou vice-versa</h2>


    <br>
    <form name="frmIntervalo" action="ex2.php" method="POST">

        <label for="txtTemperatura">Informe a temperatura:</label> 
        <input type="number" name="txtTemperatura"/> <br> 

        <br>
        <label for="txtMedidas">Informe a medida (F/C):</label>
        <input type="text" name="txtMedidas"/>

        <input type="submit" name="btnCalcular" value="Calcular"/>
    </form>

</body>
</html>