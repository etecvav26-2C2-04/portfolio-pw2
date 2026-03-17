<!--
Exercício 10 - Ano Bissexto
Faça um programa que leia um ano (valor inteiro) e imprima se ele é bissexto ou não.
Observação: um ano é bissexto se ele é múltiplo de 400, ou se ele é múltiplo de 4 mas
não é múltiplo de 100.

-->



<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Anobissexto</title>
</head>
<body>

       <h1>Ano Bissexto</h1>


    <br>
    <form name="frmIntervalo" action="ex10.php" method="POST">

        <label for="txtano">Informe o ano:</label>
        <input type="number" name="txtano"/>
        <input type="submit" name="btnCalcular" value="descobrir"/>
        
    </form>
</body>
</html>