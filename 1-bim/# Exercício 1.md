# Exercício 1 — Pergunta conceitual

**Aluno:** Felipe Costa

## Enunciado

Explique a diferença entre **cookies e sessions** no PHP.

Em sua resposta, considere:

- onde os dados são armazenados
- quais são mais seguros
- em quais situações cada um pode ser mais adequado

---

## Resposta

Cookies são armazenados no navegador do cliente, enquanto sessions são armazenadas no servidor. Sessions são mais seguras porque os dados sensíveis não ficam expostos no lado do cliente, impossibilitando que o usuário os manipule diretamente. Cookies são ideais para guardar preferências não críticas (ex: tema escuro, idioma), pois persistem por mais tempo mesmo após fechar o navegador. Já as sessions são mais adequadas para autenticação e carrinho de compras, situações em que a integridade e a confidencialidade das informações são essenciais.