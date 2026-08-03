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

