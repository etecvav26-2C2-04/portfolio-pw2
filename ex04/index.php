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