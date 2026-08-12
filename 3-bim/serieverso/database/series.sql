-- SérieVerso — banco de dados de exemplo
-- Projeto didático inspirado na estrutura do projeto de referência (Tre Fratelli)
--
-- Observação: título, gênero, ano, número de temporadas e nota são baseados
-- em dados públicos conhecidos do IMDb, usados apenas como exemplo didático.
-- As sinopses foram escritas com nossas próprias palavras.

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

-- --------------------------------------------------------

--
-- Estrutura para tabela `series`
--

CREATE TABLE `series` (
  `series_id` int(11) NOT NULL,
  `title` varchar(120) NOT NULL,
  `genre` varchar(80) NOT NULL,
  `release_year` smallint(4) NOT NULL,
  `seasons` smallint(3) NOT NULL,
  `imdb_rating` decimal(3,1) NOT NULL,
  `synopsis` text NOT NULL,
  `poster` varchar(120) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `series`
--

INSERT INTO `series` (`series_id`, `title`, `genre`, `release_year`, `seasons`, `imdb_rating`, `synopsis`, `poster`, `created_at`) VALUES
(1, 'Breaking Bad', 'Drama / Crime', 2008, 5, 9.5, 'Um professor de química diagnosticado com câncer entra no mundo da fabricação de drogas para garantir o futuro da família e, aos poucos, se transforma em outra pessoa.', 'breaking-bad.svg', CURRENT_TIMESTAMP),
(2, 'Game of Thrones', 'Fantasia / Drama', 2011, 8, 9.2, 'Várias famílias nobres disputam o controle de um reino dividido, em meio a traições, guerras e uma ameaça sobrenatural que se aproxima do norte.', 'game-of-thrones.svg', CURRENT_TIMESTAMP),
(3, 'Stranger Things', 'Ficção Científica / Terror', 2016, 5, 8.6, 'Em uma pequena cidade dos anos 80, o desaparecimento de um garoto revela experimentos secretos e uma dimensão paralela cheia de perigos.', 'stranger-things.svg', CURRENT_TIMESTAMP),
(4, 'Chernobyl', 'Drama histórico', 2019, 1, 9.3, 'Uma reconstituição dos eventos ao redor do desastre nuclear de 1986 e do esforço humano para conter suas consequências.', 'chernobyl.svg', CURRENT_TIMESTAMP),
(5, 'The Wire', 'Drama policial', 2002, 5, 9.3, 'Um retrato da cidade de Baltimore através dos olhos da polícia, do tráfico, dos portos, da política e do sistema escolar.', 'the-wire.svg', CURRENT_TIMESTAMP),
(6, 'Friends', 'Comédia', 1994, 10, 8.9, 'Seis amigos dividem as alegrias e dificuldades da vida adulta em Nova York, entre relacionamentos, carreiras e muito humor.', 'friends.svg', CURRENT_TIMESTAMP),
(7, 'The Office', 'Comédia', 2005, 9, 9.0, 'O dia a dia bizarro dos funcionários de uma empresa de papel é registrado em formato de falso documentário.', 'the-office.svg', CURRENT_TIMESTAMP),
(8, 'Dark', 'Ficção Científica / Suspense', 2017, 3, 8.8, 'O desaparecimento de crianças em uma pequena cidade alemã expõe segredos de família ligados a viagens no tempo.', 'dark.svg', CURRENT_TIMESTAMP),
(9, 'Peaky Blinders', 'Drama policial', 2013, 6, 8.8, 'Uma família de gângsteres comanda as ruas de Birmingham após a Primeira Guerra Mundial, expandindo seu poder e seus inimigos.', 'peaky-blinders.svg', CURRENT_TIMESTAMP),
(10, 'The Crown', 'Drama histórico', 2016, 6, 8.6, 'Os bastidores políticos e pessoais do reinado da rainha Elizabeth II, desde os anos 1950 até tempos mais recentes.', 'the-crown.svg', CURRENT_TIMESTAMP),
(11, 'Better Call Saul', 'Drama / Crime', 2015, 6, 8.9, 'A trajetória de um advogado batalhador que, aos poucos, se aproxima do mundo do crime e se transforma no futuro Saul Goodman.', 'better-call-saul.svg', CURRENT_TIMESTAMP),
(12, 'Fargo', 'Drama / Crime', 2014, 5, 8.9, 'Antologia de histórias independentes cheias de crimes inesperados, personagens peculiares e o clima gelado do meio-oeste americano.', 'fargo.svg', CURRENT_TIMESTAMP),
(13, 'The Mandalorian', 'Ficção Científica / Aventura', 2019, 3, 8.7, 'Um caçador de recompensas solitário assume a missão de proteger uma misteriosa criança em uma galáxia distante.', 'the-mandalorian.svg', CURRENT_TIMESTAMP),
(14, 'Wednesday', 'Comédia de Terror', 2022, 2, 8.1, 'A filha mais sombria da família Addams enfrenta mistérios sobrenaturais enquanto tenta se adaptar a uma nova escola.', 'wednesday.svg', CURRENT_TIMESTAMP);

--
-- Índices para tabelas despejadas
--

ALTER TABLE `series`
  ADD PRIMARY KEY (`series_id`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

ALTER TABLE `series`
  MODIFY `series_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;
