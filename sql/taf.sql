-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: 31-Mar-2020 às 18:09
-- Versão do servidor: 10.1.37-MariaDB
-- versão do PHP: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `TAF`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `agenda`
--

CREATE TABLE `agenda` (
  `id` int(11) NOT NULL,
  `data` date NOT NULL,
  `descricao` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `agenda`
--

INSERT INTO `agenda` (`id`, `data`, `descricao`) VALUES
(1, '2019-04-27', 'Elliot to the society'),
(2, '2019-11-06', 'stranger things'),
(3, '2019-12-19', 'Mr.Aldersson'),
(5, '2020-01-23', 'Back on Track'),
(6, '2020-03-31', 'Entrega da AplicaÃ§Ã£o'),
(7, '2020-03-03', 'Momento de oraÃ§Ã£o'),
(8, '2020-03-04', 'Inicio de Aulas'),
(9, '2020-03-12', 'Arte de DanÃ§ar');

-- --------------------------------------------------------

--
-- Estrutura da tabela `categoria`
--

CREATE TABLE `categoria` (
  `id` int(11) NOT NULL,
  `categoria` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `departamentos`
--

CREATE TABLE `departamentos` (
  `id` int(11) NOT NULL,
  `arquivo` varchar(50) NOT NULL,
  `data` datetime NOT NULL,
  `descricao` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `departamentos`
--

INSERT INTO `departamentos` (`id`, `arquivo`, `data`, `descricao`) VALUES
(1, '963c97618032763747d47e990a78ca45.png', '2020-03-17 19:14:04', 'teste departamentos pais'),
(2, '8a47c08d67c81cd70b07aa627cfa91f2.png', '2020-03-17 19:23:47', 'Back on Track'),
(3, '72e3aef8a7e7dcd9a791a2bb3028d0ce.png', '2020-03-17 19:24:38', 'Pais com visao'),
(4, 'ca7f89fa8903c1ff414886a6f478480d.png', '2020-03-17 19:25:55', 'Metodos cientificos de estudo'),
(5, '81b423dc720b9a174eca4f146e9f890d.png', '2020-03-17 19:28:25', 'Back on Track 2.0');

-- --------------------------------------------------------

--
-- Estrutura da tabela `departamentosadol`
--

CREATE TABLE `departamentosadol` (
  `id` int(11) NOT NULL,
  `arquivo` varchar(50) NOT NULL,
  `data` datetime NOT NULL,
  `descricao` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `departamentosadol`
--

INSERT INTO `departamentosadol` (`id`, `arquivo`, `data`, `descricao`) VALUES
(1, '963c97618032763747d47e990a78ca45.png', '2020-03-17 19:14:04', 'teste departamentos pais'),
(2, '8a47c08d67c81cd70b07aa627cfa91f2.png', '2020-03-17 19:23:47', 'Back on Track'),
(3, '72e3aef8a7e7dcd9a791a2bb3028d0ce.png', '2020-03-17 19:24:38', 'Pais com visao'),
(4, 'ca7f89fa8903c1ff414886a6f478480d.png', '2020-03-17 19:25:55', 'Metodos cientificos de estudo'),
(5, '81b423dc720b9a174eca4f146e9f890d.png', '2020-03-17 19:28:25', 'Back on Track 2.0');

-- --------------------------------------------------------

--
-- Estrutura da tabela `departamentospower`
--

CREATE TABLE `departamentospower` (
  `id` int(11) NOT NULL,
  `arquivo` varchar(50) NOT NULL,
  `data` datetime NOT NULL,
  `descricao` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `departamentospower`
--

INSERT INTO `departamentospower` (`id`, `arquivo`, `data`, `descricao`) VALUES
(1, '963c97618032763747d47e990a78ca45.png', '2020-03-17 19:14:04', 'teste departamentos pais'),
(2, '8a47c08d67c81cd70b07aa627cfa91f2.png', '2020-03-17 19:23:47', 'Back on Track'),
(3, '72e3aef8a7e7dcd9a791a2bb3028d0ce.png', '2020-03-17 19:24:38', 'Pais com visao'),
(4, 'ca7f89fa8903c1ff414886a6f478480d.png', '2020-03-17 19:25:55', 'Metodos cientificos de estudo'),
(5, '81b423dc720b9a174eca4f146e9f890d.png', '2020-03-17 19:28:25', 'Back on Track 2.0'),
(6, '5eadc06b465b3c0ff9c34b136431fc12.png', '2020-03-17 20:00:24', 'Jovens Com Força');

-- --------------------------------------------------------

--
-- Estrutura da tabela `departamentoswomen`
--

CREATE TABLE `departamentoswomen` (
  `id` int(11) NOT NULL,
  `arquivo` varchar(50) NOT NULL,
  `data` datetime NOT NULL,
  `descricao` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `departamentoswomen`
--

INSERT INTO `departamentoswomen` (`id`, `arquivo`, `data`, `descricao`) VALUES
(1, '963c97618032763747d47e990a78ca45.png', '2020-03-17 19:14:04', 'teste departamentos pais'),
(2, '8a47c08d67c81cd70b07aa627cfa91f2.png', '2020-03-17 19:23:47', 'Back on Track'),
(3, '72e3aef8a7e7dcd9a791a2bb3028d0ce.png', '2020-03-17 19:24:38', 'Pais com visao'),
(4, 'ca7f89fa8903c1ff414886a6f478480d.png', '2020-03-17 19:25:55', 'Metodos cientificos de estudo'),
(5, '81b423dc720b9a174eca4f146e9f890d.png', '2020-03-17 19:28:25', 'Back on Track 2.0'),
(6, '68363c2279a2f88ec8205e00ce47fc4f.png', '2020-03-17 20:03:07', 'Mulher  com visão');

-- --------------------------------------------------------

--
-- Estrutura da tabela `msg`
--

CREATE TABLE `msg` (
  `id` int(11) NOT NULL,
  `mensagem` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `msg`
--

INSERT INTO `msg` (`id`, `mensagem`) VALUES
(1, 'ola'),
(2, 'Flex containers and items are able to be modified further with additional flex properties.'),
(3, 'SELECT * FROM msg ORDER BY id ASC LIMIT 1'),
(4, 'SELECT * FROM `upload_slides` WHERE 1\r\n'),
(5, 'SELECT * FROM `upload_slides` WHERE 1'),
(6, 'Bom dia Programador 2.0!'),
(7, 'bom dia programaÃ§Ã£o');

-- --------------------------------------------------------

--
-- Estrutura da tabela `noticias`
--

CREATE TABLE `noticias` (
  `id` int(11) NOT NULL,
  `titulo` varchar(255) NOT NULL,
  `subtitulo` varchar(255) NOT NULL,
  `texto` text NOT NULL,
  `data` datetime NOT NULL,
  `autor` varchar(60) NOT NULL,
  `foto` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `noticias`
--

INSERT INTO `noticias` (`id`, `titulo`, `subtitulo`, `texto`, `data`, `autor`, `foto`) VALUES
(1, 'Primeira Noticia', 'Testando a primeira noticia do sistema', 'The .form-group class is the easiest way to add some structure to forms. It provides a flexible class that encourages proper grouping of labels, controls, optional help text, and form validation messaging. By default it only applies margin-bottom, but it picks up additional styles in .form-inline as needed. Use it with &lt;fieldset&gt;s, &lt;div&gt;s, or nearly any other eleme', '2019-09-30 18:11:28', 'Elio Paulo Muculo', 'b48895a212bf9b9796b0abaa5a0f76a8.jpg'),
(2, 'Amor e eternidade', 'mundo numa breve oração pela paz', 'qualquer coisa', '2019-09-30 23:55:29', 'Lizzy Gouveia', 'dc03eb07e4cfcc37baaa567b0fd01c97.jpg');

-- --------------------------------------------------------

--
-- Estrutura da tabela `pdfupload`
--

CREATE TABLE `pdfupload` (
  `id` int(11) NOT NULL,
  `arquivo` varchar(50) NOT NULL,
  `data` datetime NOT NULL,
  `descricao` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `pdfupload`
--

INSERT INTO `pdfupload` (`id`, `arquivo`, `data`, `descricao`) VALUES
(1, '978d16fd43442ad2078b2e919e2031e2.pdf', '2020-02-25 16:35:24', 'Back on Track'),
(2, 'df5597bcd19fe7fe39358bf002fa7441.pdf', '2020-02-25 16:45:26', 'teste 2');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tafvideos`
--

CREATE TABLE `tafvideos` (
  `id` int(11) NOT NULL,
  `arquivo` varchar(50) NOT NULL,
  `data` datetime NOT NULL,
  `descricao` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `tafvideos`
--

INSERT INTO `tafvideos` (`id`, `arquivo`, `data`, `descricao`) VALUES
(1, '300f1faf4bc5bc125e0ba0635f4e7521.mp4', '2020-03-21 05:09:28', 'Back on Track');

-- --------------------------------------------------------

--
-- Estrutura da tabela `upload_slides`
--

CREATE TABLE `upload_slides` (
  `id` int(11) NOT NULL,
  `arquivo` varchar(50) NOT NULL,
  `data` datetime NOT NULL,
  `descricao` varchar(255) NOT NULL,
  `status` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `upload_slides`
--

INSERT INTO `upload_slides` (`id`, `arquivo`, `data`, `descricao`, `status`) VALUES
(1, 'b15bdfa31b20b5a963b7e3b8bbf0e177.png', '2020-03-22 16:44:01', 'TAF', 0),
(4, '01fd44085734ff665ba67b0a1fbe0ae9.png', '2020-03-22 16:51:14', 'teste', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `senha` varchar(255) NOT NULL,
  `status` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `users`
--

INSERT INTO `users` (`id`, `nome`, `email`, `senha`, `status`) VALUES
(6, 'admin', 'Igrejataf@gmail.com', '$2y$10$Krylml5MtZKSlbEwJcprkujSDeeUL4qFcaMMA.zTjqCyQNbueOarC', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `vidas`
--

CREATE TABLE `vidas` (
  `id` int(11) NOT NULL,
  `titulo` varchar(255) NOT NULL,
  `subtitulo` varchar(255) NOT NULL,
  `texto` text NOT NULL,
  `data` datetime NOT NULL,
  `autor` varchar(60) NOT NULL,
  `foto` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `vidas`
--

INSERT INTO `vidas` (`id`, `titulo`, `subtitulo`, `texto`, `data`, `autor`, `foto`) VALUES
(1, 'Vida Transformada', 'partilhar historia da minha vida', 'Bem - vindo! cadastre novas historias de vida transformadas e deixe seus seguidores actualizados', '2020-03-13 18:15:57', 'Elio Muculo', '33e17e032d15d68119fa78b1c969413b.png'),
(2, 'Vida Transformada', 'partilhar historia da minha vida ', 'Bem - vindo! cadastre novas historias de vida transformadas e deixe seus seguidores actualizados', '2020-03-13 18:19:45', 'Elio Muculo', 'a12553944448faf18fb7f3d191bab0e0.png'),
(3, 'Vida Transformada', 'partilhar historia da minha vida ', 'Bem - vindo! cadastre novas historias de vida transformadas e deixe seus seguidores actualizados', '2020-03-13 18:21:34', 'Elio Muculo', 'de1b8ab4b445ff658d63cdde7501e384.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `agenda`
--
ALTER TABLE `agenda`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `departamentos`
--
ALTER TABLE `departamentos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `departamentosadol`
--
ALTER TABLE `departamentosadol`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `departamentospower`
--
ALTER TABLE `departamentospower`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `departamentoswomen`
--
ALTER TABLE `departamentoswomen`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `msg`
--
ALTER TABLE `msg`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `noticias`
--
ALTER TABLE `noticias`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pdfupload`
--
ALTER TABLE `pdfupload`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tafvideos`
--
ALTER TABLE `tafvideos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `upload_slides`
--
ALTER TABLE `upload_slides`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vidas`
--
ALTER TABLE `vidas`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `agenda`
--
ALTER TABLE `agenda`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `categoria`
--
ALTER TABLE `categoria`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `departamentos`
--
ALTER TABLE `departamentos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `departamentosadol`
--
ALTER TABLE `departamentosadol`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `departamentospower`
--
ALTER TABLE `departamentospower`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `departamentoswomen`
--
ALTER TABLE `departamentoswomen`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `msg`
--
ALTER TABLE `msg`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `noticias`
--
ALTER TABLE `noticias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `pdfupload`
--
ALTER TABLE `pdfupload`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tafvideos`
--
ALTER TABLE `tafvideos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `upload_slides`
--
ALTER TABLE `upload_slides`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `vidas`
--
ALTER TABLE `vidas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
