-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 26-Jul-2020 às 00:03
-- Versão do servidor: 10.4.13-MariaDB
-- versão do PHP: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `primeira_demanda`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `state`
--

CREATE TABLE `state` (
  `Id` int(10) UNSIGNED NOT NULL,
  `Country_Id` int(11) UNSIGNED NOT NULL,
  `Initials` varchar(5) NOT NULL,
  `Name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `state`
--

INSERT INTO `state` (`Id`, `Country_Id`, `Initials`, `Name`) VALUES
(11, 1058, 'RO', 'Rondônia'),
(12, 1058, 'AC', 'Acre'),
(13, 1058, 'AM', 'Amazonas'),
(14, 1058, 'RR', 'Roraima'),
(15, 1058, 'PA', 'Pará'),
(16, 1058, 'AP', 'Amapá'),
(17, 1058, 'TO', 'Tocantins'),
(21, 1058, 'MA', 'Maranhão'),
(22, 1058, 'PI', 'Piauí'),
(23, 1058, 'CE', 'Ceará'),
(24, 1058, 'RN', 'Rio Grande do Norte'),
(25, 1058, 'PB', 'Paraíba'),
(26, 1058, 'PE', 'Pernambuco'),
(27, 1058, 'AL', 'Alagoas'),
(28, 1058, 'SE', 'Sergipe'),
(29, 1058, 'BA', 'Bahia'),
(31, 1058, 'MS', 'Minas Gerais'),
(32, 1058, 'ES', 'Espírito Santo'),
(33, 1058, 'RJ', 'Rio de Janeiro'),
(35, 1058, 'SP', 'São Paulo'),
(41, 1058, 'PR', 'Paraná'),
(42, 1058, 'SC', 'Santa Catarina'),
(43, 1058, 'RS', 'Rio Grande do Sul'),
(50, 1058, 'MT', 'Mato Grosso do Sul'),
(51, 1058, 'MS', 'Mato Grosso'),
(52, 1058, 'GO', 'Goiás'),
(53, 1058, 'DF', 'Distrito Federal');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `state`
--
ALTER TABLE `state`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `Country_Id` (`Country_Id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `state`
--
ALTER TABLE `state`
  MODIFY `Id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `state`
--
ALTER TABLE `state`
  ADD CONSTRAINT `state_ibfk_1` FOREIGN KEY (`Country_Id`) REFERENCES `country` (`Id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
