<!--
Data: 26/03/2026
Autor: Felipe Costa Salino - Filipe Tomaz de Aquino - João Vitor Lopes de Souza - Victor Camargo de Angelo
Objetivo:

Exercício 7 - Separar Positivos e Negativos
Faça um programa que preencha um vetor com oito números inteiros, calcule e mostre dois vetores resultantes. O primeiro vetor resultante deve conter os números positivos e o segundo,
os números negativos.

-->


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Separador de Numeros Positivos e Negativos</title>
</head>
<body>

    <h1>Separador de Numeros Positivos e Negativos</h1>

    <form action="ex7.php" method="post">

    
        <?php for ($i = 1; $i < 9; $i++) { echo "Digite o {$i}º número: "?>
            <input type="number" name="numeros[]" required><br><br>
        <?php } ?>
  
        <!-- Botão que envia os dados para o PHP -->
        <button type="submit">Separar</button>

    </form>

    
</body>
</html>