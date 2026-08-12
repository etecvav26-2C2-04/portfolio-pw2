# 📱 Mobile First — SérieVerso

## Por que escolhemos esse modelo
A maioria do público-alvo (jovens que consomem streaming) acessa a internet principalmente pelo celular. Por isso, o site foi pensado primeiro para telas pequenas e só depois adaptado para telas maiores (tablet e desktop), usando o sistema de grid responsivo do Bootstrap 5 (`col-12`, `col-md-*`, `col-lg-*`).

## Como o site é adaptado para celular
- Layout em uma coluna por padrão, expandindo para grade (2, 3 ou 4 colunas) apenas em telas maiores;
- Botões e áreas de toque com tamanho confortável para o dedo;
- Imagens com `object-fit` controlado para não distorcer nem pesar o carregamento;
- Menu recolhido em ícone "hambúrguer" (`navbar-toggler`) no celular, expandido em telas largas.

## Cuidados tomados

**Menu**
- Menu colapsável (`collapse`) no mobile, com botão de abrir/fechar;
- Poucos itens no menu principal, priorizando os mais importantes (Home, Catálogo, Sobre, Contato).

**Imagens**
- Pôsteres em formato leve (SVG/otimizado), com proporção fixa para não "pular" o layout durante o carregamento;
- Uso de `img-fluid` para as imagens se ajustarem automaticamente à largura da tela.

**Textos**
- Frases curtas e diretas nos cartões (cards) do catálogo;
- Sinopse completa disponível apenas na página de detalhes, evitando poluir a listagem.

**Organização da tela**
- Um card por linha no celular, grade de até 4 colunas em telas grandes;
- Espaçamento (`gap`, `g-4`) consistente entre os elementos para facilitar o toque sem cliques errados.
