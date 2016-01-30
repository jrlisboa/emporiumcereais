-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: 17-Dez-2015 às 02:19
-- Versão do servidor: 5.6.26
-- PHP Version: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `emporium`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `produtos`
--

CREATE TABLE IF NOT EXISTS `produtos` (
  `id` int(11) NOT NULL,
  `categoria` varchar(50) NOT NULL,
  `imagem` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `produtos`
--

INSERT INTO `produtos` (`id`, `categoria`, `imagem`) VALUES
(1, 'DIET', 'produtos/1.JPG'),
(2, 'AZEITES', 'produtos/2.JPG'),
(3, 'BISCOITOS', 'produtos/3.JPG'),
(4, 'CASTANHAS', 'produtos/4.JPG'),
(5, 'CEREAIS MATINAIS', 'produtos/5.JPG'),
(6, 'CHAS ', 'produtos/6.JPG'),
(7, 'CONSERVAS', 'produtos/7.JPG'),
(8, 'DERIVADOS DA SOJA', 'produtos/8.JPG'),
(9, 'DOCES', 'produtos/9.JPG'),
(10, 'FARINACEOS', 'produtos/10.JPG'),
(11, 'FRUTAS SECAS', 'produtos/11.JPG'),
(12, 'GRAOS', 'produtos/12.JPG'),
(13, 'LATICINEOS', 'produtos/13.JPG'),
(14, 'MEL', 'produtos/14.JPG'),
(15, 'PRODUTOS SEM GLUTEM', 'produtos/15.JPG'),
(16, 'SEMENTES', 'produtos/16.JPG'),
(17, 'DIVERSOS', 'produtos/17.JPG'),
(18, 'VEGANOS', 'produtos/18.JPG');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `produtos`
--
ALTER TABLE `produtos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `produtos`
--
ALTER TABLE `produtos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=19;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
