 # Exercício 2 — Pergunta de aplicação

**Aluno:** Victor Camargo de Angelo

## Enunciado

Imagine que você está desenvolvendo um sistema de **loja virtual**.

Explique como cookies e sessions poderiam ser utilizados para:

- manter o usuário logado
- armazenar itens temporários no carrinho
- registrar preferências do usuário

Justifique suas escolhas.

---

## Resposta

Para **manter o usuário logado**, utiliza-se **session**. O ID do usuário é armazenado no servidor (`$_SESSION['usuario_id']`), impedindo que o cliente manipule esse valor e se passe por outra pessoa. 

Para **armazenar itens temporários no carrinho**, também se recomenda o uso de **session**. Como os preços e quantidades não podem ser alterados pelo usuário, manter os dados no servidor garante a integridade da compra. Um cookie poderia ser modificado facilmente pelo navegador.

Já para **registrar preferências do usuário** (como tema claro/escuro ou CEP consultado), o uso de **cookies** é mais adequado. Essas informações não são sensíveis e podem persistir por mais tempo, permitindo que o site lembre das configurações mesmo que o usuário não esteja logado.