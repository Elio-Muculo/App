-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jan 17, 2020 at 12:43 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.0

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
-- Table structure for table `Agenda`
--

CREATE TABLE `Agenda` (
  `id` int(11) NOT NULL,
  `data` date NOT NULL,
  `descricao` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `Agenda`
--

INSERT INTO `Agenda` (`id`, `data`, `descricao`) VALUES
(1, '2019-04-27', 'Elliot to the society'),
(2, '2019-11-06', 'stranger things'),
(3, '2019-12-19', 'Mr.Aldersson'),
(4, '2019-10-31', 'Entrega da aplicaÃ§Ã£o'),
(5, '2020-01-23', 'Back on Track');

-- --------------------------------------------------------

--
-- Table structure for table `categoria`
--

CREATE TABLE `categoria` (
  `id` int(11) NOT NULL,
  `categoria` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `msg`
--

CREATE TABLE `msg` (
  `id` int(11) NOT NULL,
  `mensagem` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `msg`
--

INSERT INTO `msg` (`id`, `mensagem`) VALUES
(1, 'ola'),
(2, 'Flex containers and items are able to be modified further with additional flex properties.'),
(3, 'SELECT * FROM msg ORDER BY id ASC LIMIT 1'),
(4, 'SELECT * FROM `upload_slides` WHERE 1\r\n'),
(5, 'SELECT * FROM `upload_slides` WHERE 1');

-- --------------------------------------------------------

--
-- Table structure for table `noticias`
--

CREATE TABLE `noticias` (
  `id` int(11) NOT NULL,
  `titulo` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `subtitulo` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `texto` text COLLATE utf8_unicode_ci NOT NULL,
  `data` datetime NOT NULL,
  `autor` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `foto` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `noticias`
--

INSERT INTO `noticias` (`id`, `titulo`, `subtitulo`, `texto`, `data`, `autor`, `foto`) VALUES
(1, 'Primeira Noticia', 'Testando a primeira noticia do sistema', 'The .form-group class is the easiest way to add some structure to forms. It provides a flexible class that encourages proper grouping of labels, controls, optional help text, and form validation messaging. By default it only applies margin-bottom, but it picks up additional styles in .form-inline as needed. Use it with &lt;fieldset&gt;s, &lt;div&gt;s, or nearly any other eleme', '2019-09-30 18:11:28', 'Elio Paulo Muculo', 'b48895a212bf9b9796b0abaa5a0f76a8.jpg'),
(2, 'Amor e eternidade', 'mundo numa breve oraÃ§Ã£o pela paz', 'qualquer coisa', '2019-09-30 23:55:29', 'Lizzy Gouveia', 'dc03eb07e4cfcc37baaa567b0fd01c97.jpg'),
(3, 'verificando integridade', 'Testando outros modulos do sistema', 'teste numero 2', '2019-10-04 20:53:47', 'Elio Paulo Muculo', '29c904292db99919f3ec35cbe89b1772.png');

-- --------------------------------------------------------

--
-- Table structure for table `upload_slides`
--

CREATE TABLE `upload_slides` (
  `id` int(11) NOT NULL,
  `arquivo` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `data` datetime NOT NULL,
  `descricao` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `upload_slides`
--

INSERT INTO `upload_slides` (`id`, `arquivo`, `data`, `descricao`) VALUES
(1, '263db9fb44ffa5905d822f913a9c8e05.png', '2019-09-26 17:31:37', 'TAF'),
(2, '2ed75c662ee90d4608392a43c2c3ef3c.jpg', '2019-09-26 17:32:46', 'Mr.Aldersson'),
(3, 'ac7bcb9298ab450b776632b784fe6e49.jpg', '2019-09-26 17:49:40', 'neymar'),
(4, '8bb9621427018ea19c6054a9310f643f.jpg', '2019-09-26 17:50:13', 'stranger things'),
(5, '51e7f7196b700863388d3b5f9896fe79.jpg', '2019-09-26 17:50:30', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Agenda`
--
ALTER TABLE `Agenda`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categoria`
--
ALTER TABLE `categoria`
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
-- Indexes for table `upload_slides`
--
ALTER TABLE `upload_slides`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Agenda`
--
ALTER TABLE `Agenda`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `categoria`
--
ALTER TABLE `categoria`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `msg`
--
ALTER TABLE `msg`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `noticias`
--
ALTER TABLE `noticias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `upload_slides`
--
ALTER TABLE `upload_slides`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
