create database sistemadevendas;
use sistemadevendas;

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";




--
-- Banco de dados: `sistemadevendas`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `produto`
--

CREATE TABLE `produto` (
  `idProduto` int(11) NOT NULL auto_increment,
  `nomeProduto` varchar(40) NOT NULL,
  `preco` float NOT NULL,
  `quantidade` int(11) NOT NULL,
  `nomeUsuario` varchar(40) NOT NULL,
  PRIMARY KEY (idProduto),
  foreign key (`nomeUsuario`) references `usuarios`(`idUsuario`)
) ENGINE=InnoDB;

CREATE TABLE `usuario` (
  `idUsuario` int(11) NOT NULL auto_increment primary key,
  `email` varchar(30) DEFAULT NULL,
  `nome` varchar(30) DEFAULT NULL,
  `senha` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `produto`
--

INSERT INTO `produto` (`idProduto`, `nomeProduto`, `preco`, `quantidade`, `idUser`) VALUES
(1, 'neca', 1.99, 2, 12),
(3, 'Melao', 4.99, 40, 5),
(4, 'Melancia', 10.5, 60, 10),
(5, 'Carva', 20.99, 5, 5),
(6, 'Arroz', 19.99, 45, 5),
(7, 'Aveia', 41, 30, 10);

-- --------------------------------------------------------

--
-- Estrutura para tabela `usuarios`
--



--
-- Despejando dados para a tabela `usuarios`
--

INSERT INTO `usuarios` (`idUsuario`, `email`, `nome`, `senha`) VALUES
(5, 'Betani@gmail.com', 'Betanie', '123'),
(6, 'Gio@gmail.com', 'Giovanna', '1345'),
(7, 'admin@admin', 'admin', 'admin'),
(10, 'zezin@gmail.com', 'Ze', '2020'),
(12, 'fe@gmail.com', 'fefe', 'fezinha123'),
(13, 'jose@gmail.com', 'josezinho', '123');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `produto`
--
ALTER TABLE `produto`
  ADD KEY `idUser` (`idUser`);

--
-- Índices de tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`idUsuario`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `usuarios`
--


/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
