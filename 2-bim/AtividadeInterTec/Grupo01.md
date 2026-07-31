# **Nome: Felipe Costa / Victor Camargo** 

# **Série: 2C2** 

## **1. O que é o WAI-ARIA?** 

O WAI-ARIA (Web Accessibility Initiative – Accessible Rich Internet Applications) é um conjunto de atributos que melhora a acessibilidade de páginas e aplicações web. Sua principal finalidade é fornecer informações adicionais para tecnologias assistivas, como leitores de tela, permitindo que pessoas com deficiência compreendam e utilizem melhor os elementos da interface. Os principais beneficiados são pessoas com deficiência visual, motora ou cognitiva que dependem desses recursos para navegar na web. 

## **2. Interpretação do código** 

**a)** O atributo aria-controls informa qual elemento da página é controlado pelo botão. Nesse caso, ele indica que o botão controla o elemento com o ID menuPrincipal. 

**b)** O atributo aria-expanded informa se o elemento controlado está expandido ou recolhido. Quando está como false, significa que o menu está fechado; quando está como true, significa que o menu está aberto. 

**c)** O atributo aria-label fornece uma descrição do botão para usuários que utilizam leitores de tela. Assim, mesmo que o conteúdo visual não seja suficiente, o leitor informa que a função do botão é "Abrir menu". 

## **3. Reflexão** 

O WAI-ARIA não substitui o HTML semântico porque os elementos semânticos, como <button>, <nav> e <main>, já possuem significado e acessibilidade nativos. O WAI-ARIA deve ser utilizado 

apenas quando o HTML sozinho não consegue transmitir todas as informações necessárias às tecnologias assistivas. 

Um exemplo é um menu expansível criado com JavaScript. Nesse caso, atributos como ariaexpanded e aria-controls são usados para informar aos leitores de tela se o menu está aberto ou fechado e qual elemento está sendo controlado, tornando a interface mais acessível. 

