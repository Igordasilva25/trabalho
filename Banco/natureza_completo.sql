-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 22-Abr-2018 às 17:42
-- Versão do servidor: 10.1.30-MariaDB
-- PHP Version: 7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `natureza`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `fotospublicdas`
--

CREATE TABLE `fotospublicdas` (
  `ID` int(11) NOT NULL,
  `NomeDaFoto` varchar(200) DEFAULT NULL,
  `CaminhoDaFoto` varchar(200) DEFAULT NULL,
  `UsuarioQuePublicou` int(11) DEFAULT NULL,
  `Data` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `fotospublicdas`
--

INSERT INTO `fotospublicdas` (`ID`, `NomeDaFoto`, `CaminhoDaFoto`, `UsuarioQuePublicou`, `Data`) VALUES
(5, 'A natureza como sempre foi', '1c8794aea9969cca3e7fd7ff2c8cf082.jpg', 9, '2018-04-22'),
(6, 'O Entardecer ', 'f3bfb631157fea1b852706208ce4a830.jpg', 9, '2018-04-22'),
(7, 'Outra Foto', 'bc91191e6568958e7b9fffd179c4142c.jpg', 10, '2018-04-22'),
(9, 'Socorrooo! Medo', '357b4cf6945fc6f4bf870ae253b17c84.jpg', 10, '2018-04-22'),
(10, 'Finalizando Teste', 'be669660063b90e4dc6bc55cf06b819d.jpg', 11, '2018-04-22');

-- --------------------------------------------------------

--
-- Estrutura da tabela `users`
--

CREATE TABLE `users` (
  `ID` int(11) NOT NULL,
  `Nome` varchar(200) NOT NULL,
  `Email` varchar(200) NOT NULL,
  `Senha` varchar(200) NOT NULL,
  `Foto` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `users`
--

INSERT INTO `users` (`ID`, `Nome`, `Email`, `Senha`, `Foto`) VALUES
(9, 'Barbara Rodrigues', 'barbara@gmail.com', '7c222fb2927d828af22f592134e8932480637c0d', '5d14de7a71d84b3980a7b52b4de2d09c.jpg'),
(10, 'Saymon Balbino', 'saymon@gmail.com', '7c222fb2927d828af22f592134e8932480637c0d', '71e9f923dcc77949e698a077d031ac21.jpg'),
(11, 'Vitoria Costa', 'vitoria@gmail.com', '7c222fb2927d828af22f592134e8932480637c0d', 'a2002f39d46ff26f3c0559cd82f2fb85.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `fotospublicdas`
--
ALTER TABLE `fotospublicdas`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `FotosPublicadas` (`UsuarioQuePublicou`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `fotospublicdas`
--
ALTER TABLE `fotospublicdas`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `fotospublicdas`
--
ALTER TABLE `fotospublicdas`
  ADD CONSTRAINT `FotosPublicadas` FOREIGN KEY (`UsuarioQuePublicou`) REFERENCES `users` (`ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
