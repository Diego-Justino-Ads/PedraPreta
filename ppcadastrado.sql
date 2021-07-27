-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jul 27, 2021 at 03:00 AM
-- Server version: 5.7.33
-- PHP Version: 7.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pedrapreta`
--

-- --------------------------------------------------------

--
-- Table structure for table `ppcadastrado`
--

CREATE TABLE `ppcadastrado` (
  `id` int(11) NOT NULL,
  `nome` varchar(200) NOT NULL,
  `RG` varchar(12) NOT NULL,
  `sexo` char(1) NOT NULL,
  `endereco` varchar(150) NOT NULL,
  `bairro` varchar(40) NOT NULL,
  `cidade` varchar(100) NOT NULL,
  `estado` char(2) NOT NULL,
  `CEP` varchar(9) NOT NULL,
  `telCel` char(11) NOT NULL,
  `telFixo` char(10) NOT NULL,
  `numero` varchar(5) NOT NULL,
  `cpf` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `ppcadastrado`
--

INSERT INTO `ppcadastrado` (`id`, `nome`, `RG`, `sexo`, `endereco`, `bairro`, `cidade`, `estado`, `CEP`, `telCel`, `telFixo`, `numero`, `cpf`) VALUES
(1, 'Teste', '', '', 'rua teste', '', '', '', '', '11123456789', '', '43534', '34565434566');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ppcadastrado`
--
ALTER TABLE `ppcadastrado`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ppcadastrado`
--
ALTER TABLE `ppcadastrado`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
