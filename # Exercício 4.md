# Exercício 4 — Reflexão sobre Segurança e Autenticação

**Aluno:** Filipe Tomaz

---

## 🛡️ Reflexão: Sessions vs. Cookies

### Por que as Sessions são preferidas para Autenticação?
As **sessions** são o método preferido porque os dados sensíveis permanecem armazenados no **servidor**, longe do alcance direto do utilizador. Isto garante que a "lógica de segurança" não dependa da confiança no que o navegador envia.

### Principais Riscos de Usar Apenas Cookies:
1. **Adulteração de Dados:** Se utilizássemos apenas cookies, um invasor poderia abrir as ferramentas do programador e alterar facilmente o valor de um campo como `user_id`. Sem a validação de uma session no servidor, ele conseguiria autenticar-se como qualquer outro utilizador.
2. **Exposição de Informação Crítica:** Dados sensíveis guardados em cookies ficam expostos no lado do cliente, aumentando o risco de fuga de informação.
3. **Limitação de Espaço:** Os cookies têm um limite rigoroso de **4KB**, o que impede o armazenamento de objetos complexos ou volumes maiores de dados.

### Vantagens das Sessions:
* **Segurança Robusta:** Os dados ficam num ambiente controlado pelo programador.
* **Complexidade:** Permitem armazenar objetos estruturados e dados sensíveis sem preocupações com o tamanho do ficheiro no navegador.
* **Integridade:** Garante que os dados não foram modificados antes de chegarem ao servidor.

---
*Documento preparado para fins académicos sobre segurança web.*