-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 27-Nov-2017 às 10:48
-- Versão do servidor: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `imob`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `categoria`
--

CREATE TABLE `categoria` (
  `id` int(11) NOT NULL,
  `nome` varchar(50) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `categoria`
--

INSERT INTO `categoria` (`id`, `nome`) VALUES
(14, NULL),
(13, NULL),
(12, 'Prédio Residencial '),
(11, 'Casa'),
(10, 'Apartamento');

-- --------------------------------------------------------

--
-- Estrutura da tabela `cliente`
--

CREATE TABLE `cliente` (
  `idCliente` int(11) NOT NULL,
  `nomeCliente` varchar(60) DEFAULT NULL,
  `sobrenome` varchar(50) NOT NULL,
  `email` varchar(30) DEFAULT NULL,
  `telefone` varchar(15) DEFAULT NULL,
  `endereco` varchar(40) DEFAULT NULL,
  `cidade` varchar(50) NOT NULL,
  `cpf` int(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `cliente`
--

INSERT INTO `cliente` (`idCliente`, `nomeCliente`, `sobrenome`, `email`, `telefone`, `endereco`, `cidade`, `cpf`) VALUES
(1, 'asd', '', 'ad', 'asd', 'asd', '', 0),
(2, 'Vinícius Diehl de Franceschi', '', 'v.f.diehl@gmail.com', '(51) 99331-5081', 'Rua Oscar Lamb', '', 0),
(3, 'Pamella Brayner', '', 'pambrayner.r@gmail.com', '51993315081', 'Av. Agulhas Negras, 92', '', 0),
(4, NULL, '', NULL, NULL, NULL, '', 0),
(5, NULL, '', NULL, NULL, NULL, '', 0),
(6, 'asdasd', '', NULL, NULL, NULL, '', 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `imagens`
--

CREATE TABLE `imagens` (
  `id` int(11) NOT NULL,
  `nome` varchar(50) DEFAULT NULL,
  `tipo` tinyint(1) DEFAULT NULL,
  `id_propriedade` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `propriedade`
--

CREATE TABLE `propriedade` (
  `id` int(11) NOT NULL,
  `nome` varchar(70) DEFAULT NULL,
  `descricao` text,
  `localizacao` varchar(50) DEFAULT NULL,
  `cidade` varchar(25) DEFAULT NULL,
  `quartos` varchar(15) DEFAULT NULL,
  `banheiros` varchar(15) DEFAULT NULL,
  `garagem` varchar(15) DEFAULT NULL,
  `area` varchar(15) DEFAULT NULL,
  `id_categoria` int(11) DEFAULT NULL,
  `id_cliente` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE `usuario` (
  `id` int(11) NOT NULL,
  `nome` varchar(200) COLLATE utf8_bin NOT NULL,
  `email` varchar(200) COLLATE utf8_bin NOT NULL,
  `img` longtext COLLATE utf8_bin NOT NULL,
  `user` varchar(50) COLLATE utf8_bin NOT NULL,
  `senha` longtext COLLATE utf8_bin NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`id`, `nome`, `email`, `img`, `user`, `senha`) VALUES
(1, 'Vinícius Diehl de Franceschi', 'v.f.diehl@gmail.com', '', 'admin', 'admin'),
(6, 'Vinícius Diehl de Franceschi', 'pambrayner@hotmail.com', './assets/backend/images/usuarios', '123', '123'),
(7, 'Gabriel ', 'v.f.diehl@gmail.com', 'd41d8cd98f00b204e9800998ecf8427e.png', 'asd', 'asd'),
(8, 'Pamella', 'pambrayner.r@gmail.com', 'd41d8cd98f00b204e9800998ecf8427e.png', 'pam', '123'),
(9, 'Pamella', 'pambrayner@hotmail.com', 'd41d8cd98f00b204e9800998ecf8427e.png', 'pam', '123'),
(10, 'Pamella', 'pambrayner@hotmail.com', 'd41d8cd98f00b204e9800998ecf8427e.png', 'pam', '123'),
(11, 'Malu', 'admin@admin.com', 'd41d8cd98f00b204e9800998ecf8427e.png', 'malu', '123'),
(12, 'asd', 'asd@asd', '', 'asd', 'asd'),
(13, 'asd', 'admin@admin.com', '', 'asd', 'asd'),
(14, 'asda', 'v.f.diehl@gmail.com', '', 'asd', 'asd'),
(15, 'Pamella', 'v.f.diehl@gmail.com', './uploads//2017/10/logo.png', '123', '123'),
(16, 'Enar', 'v.f.diehl@gmail.com', './uploads//2017/10/logomkaer.png', '123', '123'),
(17, 'Pamella Brayner', 'pambrayner.r@gmail.com', './uploads//2017/10/img-7035.JPG', '123', '123'),
(18, 'Pamella Brayner', 'pambrayner.r@gmail.com', './uploads//2017/10/img-7035-1507072451.JPG', '123', '123'),
(19, 'Pamella Brayner', 'pambrayner.r@gmail.com', './uploads//2017/10/img-7035-1507072463.JPG', '123', '123'),
(20, 'Pamella Brayner', 'pambrayner.r@gmail.com', './uploads//2017/10/img-7035-1507072470.JPG', '123', '123'),
(21, 'Pamella', 'v.f.diehl@gmail.com', './uploads//2017/10/img-6959.JPG', '321', '123'),
(22, 'Enar', 'v@v.com', './uploads//2017/11/avatar1.jpg', '123', '123'),
(23, 'asdasdasdasd', 'v.f.diehl@gmail.com', './uploads//2017/11/014b8f90902ffb7563d91db9ec37c076.jpg', 'asd', 'asd');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`idCliente`);

--
-- Indexes for table `imagens`
--
ALTER TABLE `imagens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_propriedade` (`id_propriedade`);

--
-- Indexes for table `propriedade`
--
ALTER TABLE `propriedade`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_categoria` (`id_categoria`),
  ADD KEY `id_cliente` (`id_cliente`);

--
-- Indexes for table `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categoria`
--
ALTER TABLE `categoria`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `cliente`
--
ALTER TABLE `cliente`
  MODIFY `idCliente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `imagens`
--
ALTER TABLE `imagens`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `propriedade`
--
ALTER TABLE `propriedade`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
