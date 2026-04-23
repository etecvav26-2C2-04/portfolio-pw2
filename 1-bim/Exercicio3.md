# Exercício 3 — Pergunta de Investigação

**Aluno:** João Vitor Lopes de Souza

## Código (teste.php)

```php
<?php
/**
 * Exercício 3 - Investigação sobre Cookies
 * Arquivo: teste.php
 * 
 * Demonstra que setcookie() só disponibiliza o valor em $_COOKIE
 * na PRÓXIMA requisição (após refresh).
 */

// 1. Define o cookie "contador" com expiração em 1 hora
setcookie("contador", "1", time() + 3600);

echo "<h1>Teste de Cookie - Exercício 3</h1>";

// 2. Verifica se o cookie veio na requisição ATUAL
if (isset($_COOKIE["contador"])) {
    // Só entra aqui na segunda execução (após refresh)
    echo "<p style='color: green;'> Cookie encontrado!<br>";
    echo "Valor: " . $_COOKIE["contador"] . "</p>";
} else {
    // Primeira execução: cookie foi enviado no cabeçalho, mas não está disponível ainda
    echo "<p style='color: red;'> Cookie ainda não disponível.<br>";
    echo "Atualize a página (F5) para vê-lo.</p>";
}

echo "<hr><a href='teste.php'>Atualizar Página</a>";
?>
```

## Descrição das Etapas

Primeira execução: A função setcookie() envia o cabeçalho HTTP Set-Cookie, mas o array $_COOKIE é populado apenas com os cookies que chegaram na requisição. Como é a primeira visita, não há cookie chegando, então exibe "Cookie ainda não disponível".

Atualizar a página: O navegador agora envia o cookie contador=1 no cabeçalho da requisição. O PHP lê esse valor e preenche $_COOKIE, fazendo o if(isset(...)) retornar verdadeiro.

Ferramentas do navegador: Em "Application > Cookies" é possível visualizar o cookie armazenado localmente.

Limpar cookies e atualizar: O navegador remove o cookie. Ao atualizar, o processo reinicia, e o PHP tentará criar um novo cookie, repetindo o comportamento da primeira execução.
