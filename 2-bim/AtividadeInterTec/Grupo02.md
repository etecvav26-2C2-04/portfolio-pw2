# Atividade – WAI-ARIA

## Web Accessibility Initiative – Accessible Rich Internet Applications

*Aluno:* Filipe Tomaz de Aquino / João Vitor Lopes de Souza
*Disciplina:* Desenvolvimento de Sistemas  
*Data:* 02/08/2026  

---

## Introdução

A internet está presente em diversas atividades do nosso dia a dia, como estudar, trabalhar, realizar compras, acessar serviços bancários e se comunicar. Por isso, é importante que páginas e sistemas possam ser utilizados por todas as pessoas, incluindo aquelas que possuem algum tipo de deficiência.

A acessibilidade digital busca eliminar barreiras que dificultam ou impedem a navegação. Nesse contexto, o *WAI-ARIA* auxilia os desenvolvedores na criação de páginas mais acessíveis, principalmente em interfaces que possuem elementos interativos e conteúdos dinâmicos.

---

# Questão 1 – Conceito

## O que é WAI-ARIA?

O *WAI-ARIA, sigla para **Web Accessibility Initiative – Accessible Rich Internet Applications*, é um conjunto de atributos que pode ser adicionado ao código HTML para melhorar a acessibilidade de páginas e aplicações web.

Esses atributos fornecem informações adicionais sobre os elementos da interface. Dessa forma, tecnologias assistivas conseguem identificar a função, o estado e o comportamento de componentes como menus, botões, janelas, abas, formulários e caixas de diálogo.

Por exemplo, visualmente uma pessoa pode perceber que determinado menu está aberto. Porém, um usuário que utiliza leitor de tela precisa receber essa informação por meio do código. O WAI-ARIA ajuda a transmitir esse tipo de informação.

## Principal finalidade

A principal finalidade do WAI-ARIA é tornar componentes interativos mais compreensíveis para pessoas que utilizam tecnologias assistivas.

Ele permite informar:

- qual é a função de um elemento;
- qual elemento está sendo controlado;
- se um conteúdo está aberto ou fechado;
- se uma opção está selecionada;
- se um campo é obrigatório;
- qual é o nome acessível de um botão ou componente.

## Usuários beneficiados

Os principais usuários beneficiados são:

- pessoas com deficiência visual que utilizam leitores de tela;
- pessoas com deficiência motora que navegam utilizando o teclado;
- pessoas com dificuldades cognitivas;
- usuários que dependem de comandos de voz;
- pessoas que utilizam diferentes tecnologias assistivas.

Apesar de ser direcionado principalmente à acessibilidade, o uso correto desses recursos contribui para uma experiência mais organizada e inclusiva para todos.

---

# Questão 2 – Interpretação

Considere o seguinte código:

html
<button
  class="navbar-toggler"
  type="button"
  aria-controls="menuPrincipal"
  aria-expanded="false"
  aria-label="Abrir menu">
  Menu
</button>


## a) Qual é a função do atributo aria-controls?

O atributo aria-controls informa qual elemento da página é controlado pelo botão.

No exemplo, o valor menuPrincipal indica que o botão controla um elemento que possui o identificador:

html
id="menuPrincipal"


Essa relação ajuda as tecnologias assistivas a entenderem que, ao ativar o botão, o usuário estará abrindo, fechando ou modificando o menu principal da página.

Exemplo:

html
<nav id="menuPrincipal">
  <!-- opções do menu -->
</nav>


Portanto, o aria-controls cria uma associação entre o botão e o conteúdo que ele controla.

---

## b) O que informa o atributo aria-expanded?

O atributo aria-expanded informa se o conteúdo controlado pelo botão está expandido ou recolhido.

No código apresentado:

html
aria-expanded="false"


O valor false indica que o menu está fechado ou recolhido.

Quando o usuário abrir o menu, o valor deve ser atualizado para:

html
aria-expanded="true"


A alteração desse atributo é importante porque permite que o leitor de tela informe ao usuário o estado atual do componente.

| Valor | Significado |
|---|---|
| false | O conteúdo está fechado ou recolhido |
| true | O conteúdo está aberto ou expandido |

O valor deve acompanhar o comportamento real do menu. Caso o menu seja aberto, mas o atributo continue como false, o usuário receberá uma informação incorreta.

---

## c) Qual é a importância do atributo aria-label para usuários que utilizam leitores de tela?

O atributo aria-label fornece um nome ou uma descrição acessível para um elemento.

No exemplo:

html
aria-label="Abrir menu"


O leitor de tela poderá anunciar que o botão tem a função de abrir o menu. Isso ajuda o usuário a compreender o que acontecerá ao ativar o elemento.

Sem uma descrição adequada, o leitor de tela poderia anunciar apenas “botão” ou “menu”, o que talvez não deixasse clara a ação disponível.

O aria-label é especialmente útil quando:

- o botão possui apenas um ícone;
- não existe um texto visível suficientemente claro;
- é necessário explicar melhor a função do elemento;
- existem vários botões semelhantes na mesma página.

Exemplo de botão com ícone:

html
<button aria-label="Fechar janela">
  X
</button>


Nesse caso, visualmente o símbolo X representa o fechamento da janela. Para um usuário de leitor de tela, o texto “Fechar janela” transmite a função com mais clareza.

---

# Questão 3 – Reflexão

## Por que o WAI-ARIA não substitui o HTML semântico?

O WAI-ARIA não substitui o HTML semântico porque os próprios elementos HTML já possuem significados, comportamentos e recursos de acessibilidade reconhecidos pelos navegadores.

Elementos como:

html
<button>
<nav>
<main>
<header>
<footer>


já indicam naturalmente sua função.

Por exemplo, um elemento <button> já é reconhecido como botão, pode receber foco pelo teclado e pode ser ativado com teclas como Enter ou Espaço.

Caso um desenvolvedor utilize uma <div> para representar um botão, será necessário adicionar várias configurações para tentar reproduzir o comportamento de um botão verdadeiro.

Exemplo menos recomendado:

html
<div role="button" tabindex="0">
  Enviar
</div>


Exemplo mais adequado:

html
<button type="button">
  Enviar
</button>


O segundo exemplo é mais simples, semântico e acessível. Por isso, a recomendação principal é utilizar primeiro os elementos HTML corretos e acrescentar atributos ARIA apenas quando for necessário complementar as informações.

Uma regra importante no desenvolvimento acessível é:

> Sempre que existir um elemento HTML nativo com a função necessária, ele deve ser utilizado antes de criar uma solução personalizada com ARIA.

---

## Situação em que o WAI-ARIA é necessário

Um exemplo é um menu responsivo utilizado em celulares.

Nesse tipo de interface, o usuário pressiona um botão para abrir ou fechar as opções de navegação. O elemento <button> informa que existe um botão, mas não informa sozinho:

- qual menu ele controla;
- se o menu está aberto;
- se o menu está fechado;
- qual é exatamente a ação realizada.

Para complementar essas informações, podem ser utilizados os atributos:

html
aria-controls="menuPrincipal"
aria-expanded="false"
aria-label="Abrir menu"


Quando o menu for aberto, o sistema deverá atualizar o código:

html
aria-expanded="true"
aria-label="Fechar menu"


Dessa maneira, o usuário que utiliza leitor de tela consegue compreender tanto a função do botão quanto o estado atual do menu.

---

# Resumo dos atributos analisados

| Atributo | Função | Exemplo |
|---|---|---|
| aria-controls | Indica qual elemento é controlado | aria-controls="menuPrincipal" |
| aria-expanded | Informa se o conteúdo está aberto ou fechado | aria-expanded="false" |
| aria-label | Fornece um nome acessível ao elemento | aria-label="Abrir menu" |

---

# Boas práticas no uso do WAI-ARIA

Para utilizar o WAI-ARIA corretamente, algumas boas práticas devem ser seguidas:

1. Utilizar primeiro elementos HTML semânticos.
2. Não adicionar atributos ARIA sem necessidade.
3. Manter atributos de estado sempre atualizados.
4. Escrever descrições claras e objetivas.
5. Garantir que a página também possa ser utilizada pelo teclado.
6. Testar a interface com leitores de tela, quando possível.
7. Evitar informações diferentes entre o que aparece visualmente e o que é anunciado pela tecnologia assistiva.

O uso incorreto do ARIA pode prejudicar a acessibilidade em vez de melhorá-la. Por isso, os atributos devem representar corretamente a função e o estado dos componentes.

---

# Conclusão

O WAI-ARIA é um recurso importante para o desenvolvimento de páginas e aplicações web mais inclusivas. Ele permite adicionar informações que ajudam leitores de tela e outras tecnologias assistivas a compreender componentes interativos.

Entretanto, seu uso deve complementar o HTML semântico, e não substituí-lo. Elementos HTML nativos devem ser priorizados porque já possuem funções e comportamentos de acessibilidade incorporados.

Com a combinação entre HTML semântico, atributos WAI-ARIA e boas práticas de desenvolvimento, é possível criar interfaces mais fáceis de compreender, navegar e utilizar. Assim, mais pessoas podem acessar serviços e informações digitais com autonomia e igualdade.

---

## Referência consultada

Material de apoio disponibilizado pelo professor sobre *WAI-ARIA – Web Accessibility Initiative – Accessible Rich Internet Applications*.
