# 📚 Fontes de Dados — SérieVerso

## Origem dos dados de exemplo
Os dados usados para popular o catálogo (`database/series.sql`) — título, gênero, ano de lançamento, nota e número de temporadas — foram inspirados em informações públicas amplamente conhecidas do **IMDb (Internet Movie Database)**, usadas aqui apenas como exemplo didático de conteúdo real para preencher o banco de dados.

As **sinopses foram reescritas com nossas próprias palavras**, de forma resumida, para fins de estudo — não são cópias do texto do IMDb ou de qualquer outra fonte.

## Por que não consumimos a API do IMDb diretamente
O IMDb não oferece uma API pública e gratuita oficial. Por isso, nesta primeira versão didática, os dados foram cadastrados manualmente no banco de dados MySQL (`database/series.sql`), do mesmo jeito que o projeto de referência (Tre Fratelli) cadastrou seus produtos manualmente.

## Evolução futura
Para uma versão mais avançada do projeto, o grupo pretende estudar a integração com uma API pública de dados de filmes/séries (como a OMDb API, que é compatível com o formato de dados do IMDb) para atualizar o catálogo automaticamente, em vez de cadastro manual.
