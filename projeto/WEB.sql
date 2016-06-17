-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Máquina: localhost
-- Data de Criação: 17-Jun-2016 às 13:03
-- Versão do servidor: 5.5.47-0ubuntu0.14.04.1
-- versão do PHP: 5.5.9-1ubuntu4.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de Dados: `WEB`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `clientes`
--

CREATE TABLE IF NOT EXISTS `clientes` (
  `IdCliente` int(11) NOT NULL AUTO_INCREMENT,
  `nomeCliente` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `dataCadastro` datetime NOT NULL,
  PRIMARY KEY (`IdCliente`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Extraindo dados da tabela `clientes`
--

INSERT INTO `clientes` (`IdCliente`, `nomeCliente`, `email`, `dataCadastro`) VALUES
(2, 'Mário', 'mario.wilyan@hotmail.com', '1998-08-15 00:00:00'),
(3, 'João', 'joao@hotmail.com', '1964-08-25 00:00:00');

-- --------------------------------------------------------

--
-- Estrutura da tabela `fornecedores`
--

CREATE TABLE IF NOT EXISTS `fornecedores` (
  `IdFornecedor` int(11) NOT NULL AUTO_INCREMENT,
  `nomeFornecedor` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `dataFundacao` datetime NOT NULL,
  PRIMARY KEY (`IdFornecedor`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Extraindo dados da tabela `fornecedores`
--

INSERT INTO `fornecedores` (`IdFornecedor`, `nomeFornecedor`, `email`, `dataFundacao`) VALUES
(1, 'Ceitel', 'cei@hotmail.com', '1960-10-15 00:00:00'),
(3, 'João', 'joao@hotmail.com', '2011-01-15 00:00:00');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
