-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 14-Ago-2024 às 13:46
-- Versão do servidor: 10.4.22-MariaDB
-- versão do PHP: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `logistica`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `aluno`
--

CREATE TABLE `aluno` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `turma_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `aluno`
--

INSERT INTO `aluno` (`id`, `username`, `password`, `turma_id`) VALUES
(1, 'joao_teste', '1234', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `armazem_limite`
--

CREATE TABLE `armazem_limite` (
  `id` int(11) NOT NULL,
  `quantidade_atual` int(11) NOT NULL,
  `limite_maximo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `avaliacao_pedidos`
--

CREATE TABLE `avaliacao_pedidos` (
  `id` int(11) NOT NULL,
  `produto` varchar(50) NOT NULL,
  `qtd` int(11) NOT NULL,
  `valor_unit` float NOT NULL,
  `valor_total` float NOT NULL,
  `faltando` tinyint(1) NOT NULL,
  `avariado` tinyint(1) NOT NULL,
  `turma_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `avaliacao_pedidos`
--

INSERT INTO `avaliacao_pedidos` (`id`, `produto`, `qtd`, `valor_unit`, `valor_total`, `faltando`, `avariado`, `turma_id`) VALUES
(33, 'tesoura', 5, 9, 45, 1, 0, 1),
(34, '', 0, 0, 0, 0, 0, 1),
(35, 'Borracha', 25, 2, 50, 0, 0, 1),
(37, 'Caneta', 8, 4, 32, 0, 0, 1),
(38, 'Borracha', 20, 10, 200, 0, 0, 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `docas`
--

CREATE TABLE `docas` (
  `id_doca` int(11) NOT NULL,
  `id_carga` int(11) NOT NULL,
  `id_aluno` int(11) NOT NULL,
  `id_turma` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `nota_fiscal_criada`
--

CREATE TABLE `nota_fiscal_criada` (
  `id_notafiscal` int(11) NOT NULL,
  `id_atividade` int(11) NOT NULL,
  `id_turma` int(11) NOT NULL,
  `data_hora_envio` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `pedidos`
--

CREATE TABLE `pedidos` (
  `id` int(11) NOT NULL,
  `nota_fiscal` varchar(45) NOT NULL,
  `pedido_compra` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `pedidos`
--

INSERT INTO `pedidos` (`id`, `nota_fiscal`, `pedido_compra`) VALUES
(1, 'teste1', 'teste2');

-- --------------------------------------------------------

--
-- Estrutura da tabela `produtos`
--

CREATE TABLE `produtos` (
  `id` int(11) NOT NULL,
  `nome_produto` varchar(45) NOT NULL,
  `preco` float NOT NULL,
  `UN` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `produtos`
--

INSERT INTO `produtos` (`id`, `nome_produto`, `preco`, `UN`) VALUES
(1, 'Pulseira', 5, 'unidade');

-- --------------------------------------------------------

--
-- Estrutura da tabela `professor`
--

CREATE TABLE `professor` (
  `id` int(11) NOT NULL,
  `username` varchar(255) CHARACTER SET latin1 COLLATE latin1_bin NOT NULL,
  `password` varchar(65) CHARACTER SET latin1 COLLATE latin1_bin NOT NULL,
  `turma_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `professor`
--

INSERT INTO `professor` (`id`, `username`, `password`, `turma_id`) VALUES
(1, 'professor', '1234', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `rnc`
--

CREATE TABLE `rnc` (
  `id` int(11) NOT NULL,
  `nome_produto` varchar(255) NOT NULL,
  `preco` float(10,2) NOT NULL,
  `UN` varchar(4) NOT NULL,
  `Quantidade` int(11) NOT NULL,
  `turma_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `rnc`
--

INSERT INTO `rnc` (`id`, `nome_produto`, `preco`, `UN`, `Quantidade`, `turma_id`) VALUES
(1, 'Tesoura', 3.00, 'unit', 1, 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `situacao`
--

CREATE TABLE `situacao` (
  `id` int(11) NOT NULL,
  `id_transporte` int(11) NOT NULL,
  `id_turma` int(11) NOT NULL,
  `id_aluno` int(11) NOT NULL,
  `sem_lona` tinyint(1) NOT NULL DEFAULT 0,
  `container_desgastado` tinyint(1) NOT NULL DEFAULT 0,
  `avaria_lateral_direita` tinyint(1) NOT NULL DEFAULT 0,
  `avaria_lateral_esquerda` tinyint(1) NOT NULL DEFAULT 0,
  `avaria_teto` tinyint(1) NOT NULL DEFAULT 0,
  `avaria_frente` tinyint(1) NOT NULL DEFAULT 0,
  `sem_lacre` tinyint(1) NOT NULL DEFAULT 0,
  `adesivos_avariados` tinyint(1) NOT NULL DEFAULT 0,
  `excesso_altura` tinyint(1) NOT NULL DEFAULT 0,
  `excesso_direita` tinyint(1) NOT NULL DEFAULT 0,
  `excesso_esquerda` tinyint(1) NOT NULL DEFAULT 0,
  `excesso_frontal` tinyint(1) NOT NULL DEFAULT 0,
  `painel_avariado` tinyint(1) NOT NULL DEFAULT 0,
  `sem_cabo_de_energia` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `transporte`
--

CREATE TABLE `transporte` (
  `id_container` int(11) NOT NULL,
  `cliente` varchar(255) NOT NULL,
  `placa` varchar(30) NOT NULL,
  `transporte` varchar(30) NOT NULL,
  `carga` varchar(30) NOT NULL,
  `nome_motorista` varchar(255) NOT NULL,
  `tipo` varchar(30) NOT NULL,
  `lacre` varchar(30) NOT NULL,
  `lacre SIF` varchar(30) NOT NULL,
  `NOnu` varchar(30) NOT NULL,
  `temperatura` int(11) NOT NULL,
  `IMO` varchar(30) NOT NULL,
  `turma_id` int(11) NOT NULL,
  `situacao` char(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `transporte`
--

INSERT INTO `transporte` (`id_container`, `cliente`, `placa`, `transporte`, `carga`, `nome_motorista`, `tipo`, `lacre`, `lacre SIF`, `NOnu`, `temperatura`, `IMO`, `turma_id`, `situacao`) VALUES
(9, 'cliente1', 'placa1', 'container1', 'navio1', 'motorista1', 'tipo1', '12345', '', '1234', 20, '123', 0, NULL),
(15, 'Cliente2', 'Placa2', 'Transporte', 'Carga2', 'Motorista', 'Tipo', 'Lacre', '', '', 0, '', 1, NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `turma`
--

CREATE TABLE `turma` (
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `turma`
--

INSERT INTO `turma` (`id`) VALUES
(1),
(2);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `aluno`
--
ALTER TABLE `aluno`
  ADD PRIMARY KEY (`id`),
  ADD KEY `turma_id` (`turma_id`);

--
-- Índices para tabela `armazem_limite`
--
ALTER TABLE `armazem_limite`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `avaliacao_pedidos`
--
ALTER TABLE `avaliacao_pedidos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `turma_id` (`turma_id`);

--
-- Índices para tabela `docas`
--
ALTER TABLE `docas`
  ADD PRIMARY KEY (`id_doca`),
  ADD KEY `FK_docas_aluno` (`id_aluno`),
  ADD KEY `FK_docas_turma` (`id_turma`);

--
-- Índices para tabela `nota_fiscal_criada`
--
ALTER TABLE `nota_fiscal_criada`
  ADD PRIMARY KEY (`id_notafiscal`),
  ADD KEY `id_atividade` (`id_atividade`),
  ADD KEY `id_turma` (`id_turma`);

--
-- Índices para tabela `pedidos`
--
ALTER TABLE `pedidos`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `produtos`
--
ALTER TABLE `produtos`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `professor`
--
ALTER TABLE `professor`
  ADD PRIMARY KEY (`id`),
  ADD KEY `turma_id` (`turma_id`);

--
-- Índices para tabela `rnc`
--
ALTER TABLE `rnc`
  ADD PRIMARY KEY (`id`),
  ADD KEY `turma_id` (`turma_id`);

--
-- Índices para tabela `situacao`
--
ALTER TABLE `situacao`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_turma` (`id_turma`),
  ADD KEY `id_aluno` (`id_aluno`),
  ADD KEY `id_transporte` (`id_transporte`);

--
-- Índices para tabela `transporte`
--
ALTER TABLE `transporte`
  ADD PRIMARY KEY (`id_container`),
  ADD KEY `turma_id` (`turma_id`);

--
-- Índices para tabela `turma`
--
ALTER TABLE `turma`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `aluno`
--
ALTER TABLE `aluno`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=351;

--
-- AUTO_INCREMENT de tabela `armazem_limite`
--
ALTER TABLE `armazem_limite`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `avaliacao_pedidos`
--
ALTER TABLE `avaliacao_pedidos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT de tabela `docas`
--
ALTER TABLE `docas`
  MODIFY `id_doca` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `nota_fiscal_criada`
--
ALTER TABLE `nota_fiscal_criada`
  MODIFY `id_notafiscal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT de tabela `pedidos`
--
ALTER TABLE `pedidos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `produtos`
--
ALTER TABLE `produtos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `professor`
--
ALTER TABLE `professor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `rnc`
--
ALTER TABLE `rnc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `transporte`
--
ALTER TABLE `transporte`
  MODIFY `id_container` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de tabela `turma`
--
ALTER TABLE `turma`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=670;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `aluno`
--
ALTER TABLE `aluno`
  ADD CONSTRAINT `aluno_ibfk_1` FOREIGN KEY (`turma_id`) REFERENCES `turma` (`id`);

--
-- Limitadores para a tabela `avaliacao_pedidos`
--
ALTER TABLE `avaliacao_pedidos`
  ADD CONSTRAINT `FK_carga_turma` FOREIGN KEY (`turma_id`) REFERENCES `turma` (`id`);

--
-- Limitadores para a tabela `docas`
--
ALTER TABLE `docas`
  ADD CONSTRAINT `FK_docas_aluno` FOREIGN KEY (`id_aluno`) REFERENCES `aluno` (`id`),
  ADD CONSTRAINT `FK_docas_turma` FOREIGN KEY (`id_turma`) REFERENCES `turma` (`id`);

--
-- Limitadores para a tabela `nota_fiscal_criada`
--
ALTER TABLE `nota_fiscal_criada`
  ADD CONSTRAINT `nota_fiscal_criada_ibfk_1` FOREIGN KEY (`id_atividade`) REFERENCES `avaliacao_pedidos` (`id`),
  ADD CONSTRAINT `nota_fiscal_criada_ibfk_2` FOREIGN KEY (`id_turma`) REFERENCES `turma` (`id`);

--
-- Limitadores para a tabela `professor`
--
ALTER TABLE `professor`
  ADD CONSTRAINT `professor_ibfk_1` FOREIGN KEY (`turma_id`) REFERENCES `turma` (`id`);

--
-- Limitadores para a tabela `rnc`
--
ALTER TABLE `rnc`
  ADD CONSTRAINT `rnc_ibfk_1` FOREIGN KEY (`turma_id`) REFERENCES `turma` (`id`);

--
-- Limitadores para a tabela `transporte`
--
ALTER TABLE `transporte`
  ADD CONSTRAINT `transporte_ibfk_1` FOREIGN KEY (`turma_id`) REFERENCES `turma` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
