# 🗺️ Estrutura Inicial do Site — SérieVerso

## Páginas públicas
| Página | Arquivo | Conteúdo |
|---|---|---|
| Home | `index.php` | Banner de destaque, apresentação rápida do site e amostra de séries em destaque |
| Catálogo | `pages/series.php` | Listagem de todas as séries cadastradas, com busca/filtro por gênero |
| Detalhes da série | `pages/serie-detalhe.php` | Sinopse completa, gênero, ano, nota e nº de temporadas |
| Sobre | `pages/sobre.php` | Explicação do projeto, proposta e público-alvo |
| Contato | `pages/contato.php` | Formulário de contato e dados fictícios da empresa |

## Área administrativa (login necessário)
| Página | Arquivo | Conteúdo |
|---|---|---|
| Login | `admin/index.php` | Autenticação do administrador |
| Painel | `admin/dashboard.php` | Visão geral e atalhos |
| Séries (listar) | `admin/series/index.php` | Lista de séries cadastradas, com editar/excluir |
| Séries (criar) | `admin/series/create.php` | Formulário de cadastro de nova série |
| Séries (editar) | `admin/series/edit.php` | Formulário de edição de uma série |

## Navegação
- Menu superior fixo com: Home, Catálogo, Sobre, Contato;
- Seletor de idioma (PT-BR / EN-US / ES) sempre visível no menu;
- Rodapé com dados fictícios da empresa e redes sociais;
- Botão de acesso à área administrativa disponível no rodapé, sem aparecer em destaque para o visitante comum.
