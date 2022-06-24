--
-- Banco de dados: `animed`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `pet`
--

CREATE TABLE `pet` (
  `id` int NOT NULL,
  `nome` varchar(45) NOT NULL,
  `especie` varchar(45) NOT NULL,
  `raca` varchar(45) NOT NULL,
  `idade` varchar(45) NOT NULL,
  `peso` float NOT NULL,
  `comprimento` int NOT NULL,
  `idDono` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `servicos`
--

CREATE TABLE `servicos` (
  `id` int NOT NULL,
  `nome` varchar(20) NOT NULL,
  `descricao` text NOT NULL,
  `imagem` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Extraindo dados da tabela `servicos`
--

INSERT INTO `servicos` (`id`, `nome`, `descricao`, `imagem`) VALUES
(
  1, 
  'Consultas', '
  Oferecemos atendimento 24 horas para cães e gatos todos os dias da semana. Os atendimentos clínicos e cirúrgicos podem ser realizados a qualquer hora do dia, por ordem de chegada, não sendo necessário o agendamento prévio.

  O hospital possui horário de plantão para atendimento preferencialmente dedicado aos casos emergenciais, mas, os casos clínicos de rotina, também poderão ser atendidos. O atendimento no horário de plantão possui preços diferenciados.
  ', 
  'img/consultas.png'
),
(
  2, 
  'UTI', 
  'Atendemos com excelência os pacientes que necessitam de suporte de uma Unidade de Terapia Intensiva (UTI), desenvolvendo um serviço impar na admissão e manutenção do paciente crítico.

  O investimento em tecnologia e um corpo clinico multidisciplinar foram decisivos para a elaboração de um setor com uma estrutura física apropriada, segura e confortável, com equipamentos que proporcionam a aplicação de técnicas inovadoras e eficazes. Composto por seis médicos veterinários, que se revezam 24 horas por dia, a Animed está pronta para garantir o melhor para os pacientes.
  ', 
  'img/uti.png'
),
(
  3,
  'Exames laboratoriais', 
  '
  Ir a diversos locais para a realização de bateria de exames em seu bichinho de estimação já não é mais necessário. Contamos com toda estrutura para a realização de grande variedade de exames, para diversos tipos de animais. São mais de 50 tipos de análises clinicas, dentre elas: hematologia, bioquímica clínica, urinálise, citologia, histopatologia, parasitologia, microbiologia, endocrinologia, imunologia e necropsia. Possuímos equipamentos modernos, com segurança e precisão dos resultados, a maioria dos exames conta com resultados imediatos, facilitando o diagnóstico e o rápido tratamento dos pacientes.
  ', 
  'img/exames.png'
),
(
  4, 
  'Cirurgias', 
  '
  Contamos com atendimento de veterinários cirurgiões para cães e gatos. A equipe é formada por veterinários qualificados para realizar as mais diferentes modalidades de cirurgias, quer seja para cirurgias abdominais, ortopédicas,  oftálmicas, oncológicas, de boca, de tórax, de pele, entre outras.

  O centro cirúrgico é o local onde o paciente recebe tratamento necessário para recuperar-se de doenças graves ou tratar de lesões indesejáveis. No Hospital Veterinário Animed dispomos de um centro cirúrgico com equipamentos de última geração para garantir a total segurança de seu animal durante a operação. Durante os procedimentos os pacientes podem contar com anestesias inalatórias, monitores cardíacos, oximetria, aparelhos de pressão arterial, controle de temperatura, aspirador cirúrgico e videoscopia.

  Os equipamentos são todos preparados em técnicas assépticas (esterilização de instrumentais e panos em autoclave, desinfecção da sala com desinfetantes hospitalares, uso de gorro e mascara, preparação adequada do paciente), visando evitar qualquer risco de contaminação.
  ', 
  'img/cirurgias.png'
),
(
  5, 
  'Taxi Pet', 
  '
  Em casos de necessidade de remoção de seu bichinho em empresa, casa ou apartamento, os clientes da Animed contam com um serviço de transporte para remoção do paciente do local de origem até o atendimento veterinário no Hospital.
  ', 
  'img/taxi.png'
),
(
  6, 
  'Farmácia Veterinária', 
  '
  O Hospital Veterinário Animed oferece aos clientes uma fármacia Veterinária completa, com as melhores marcas de medicamentos e rações para pets, aberta 24h.
  ', 
  'img/farmacia.png'
);

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE `usuario` (
  `id` int NOT NULL,
  `nome` varchar(200) NOT NULL,
  `email` varchar(150) NOT NULL,
  `endereco` varchar(150) NOT NULL,
  `telefone` varchar(16) NOT NULL,
  `senha` varchar(32) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `pet`
--
ALTER TABLE `pet`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idDono` (`idDono`);

--
-- Índices para tabela `servicos`
--
ALTER TABLE `servicos`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `pet`
--
ALTER TABLE `pet`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `servicos`
--
ALTER TABLE `servicos`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de tabela `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `pet`
--
ALTER TABLE `pet`
  ADD CONSTRAINT `pet_ibfk_1` FOREIGN KEY (`idDono`) REFERENCES `usuario` (`id`);
COMMIT;