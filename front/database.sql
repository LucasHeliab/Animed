CREATE TABLE `servicos` (
  `id` int NOT NULL,
  `nome` varchar(20) NOT NULL,
  `descricao` varchar(500) NOT NULL,
  `imagem` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

CREATE TABLE `usuario` (
  `id` int NOT NULL,
  `nome` varchar(200) NOT NULL,
  `email` varchar(150) NOT NULL,
  `endereco` varchar(150) NOT NULL,
  `telefone` varchar(16) NOT NULL,
  `senha` varchar(32) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

ALTER TABLE `servicos` ADD PRIMARY KEY (`id`);

ALTER TABLE `usuario` ADD PRIMARY KEY (`id`);

INSERT INTO `servicos` (`id`, `nome`, `descricao`, `imagem`) VALUES
(1, 'Consultas', 'Texto sobre as consultas ofertadas', ''),
(2, 'UTI', 'Texto sobre o funcionento da UTI.', ''),
(3, 'Exames laboratoriais', 'Texto sobre os exames ofertados', ''),
(4, 'Cirurgias', 'Texto sobre as cirurgias.', ''),
(5, 'Taxi Pet', 'Texto sobre o Taxi pet', ''),
(6, 'Farmácia Veterinária', 'Texto sobre a farmácia veterinária.', '');