-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Tempo de geração: 23/07/2021 às 21:54
-- Versão do servidor: 10.4.17-MariaDB
-- Versão do PHP: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `av2daw`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `produtos`
--

CREATE TABLE `produtos` (
  `id` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `codigobarra` int(50) NOT NULL,
  `fabricante` varchar(50) NOT NULL,
  `categoria` varchar(50) NOT NULL,
  `preco` float NOT NULL,
  `quantidade` int(10) NOT NULL,
  `peso` int(20) NOT NULL,
  `descricao` varchar(200) NOT NULL,
  `linkimg` varchar(200) NOT NULL,
  `data` date NOT NULL,
  `ativo` tinyint(1) DEFAULT NULL,
  `tipoprod` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Despejando dados para a tabela `produtos`
--

INSERT INTO `produtos` (`id`, `nome`, `codigobarra`, `fabricante`, `categoria`, `preco`, `quantidade`, `peso`, `descricao`, `linkimg`, `data`, `ativo`, `tipoprod`) VALUES
(2, 'Bomba de água', 784512, 'Wonder', 'Categoria1', 150, 10, 1500, 'Bomba D&#39; Água Periférica 370W 1/2CV Bivolt 110/220V FERRARI-BA-40', 'img/784512.jpg', '2021-07-23', 1, 'Tipo1'),
(3, 'Motosserra', 789542, 'Vulcan', 'Categoria2', 829.9, 15, 2580, 'Motosserra a Gasolina 2T 55cc 3HP com Sabre de 18 Po - VULCAN-VSL550', 'img/789542.jpg', '2021-07-23', 1, 'Tipo2'),
(4, 'Pulverizador', 753159, 'Jacto', 'Categoria3', 199.99, 25, 1850, 'Pulverizador Manual Costal 16 Litros - JACTO-XP16', 'img/753159.jpg', '2021-07-13', 1, 'Tipo3'),
(5, 'Escada', 741258, 'Cogumelo', 'Categoria3', 739.59, 5, 7500, 'Escada Extensível Vazada Laranja 6 Metros 19 Degraus Tipo D - COGUMELO-EFV-19', 'img/741258.jpg', '2021-07-12', 1, 'Tipo3'),
(6, 'Macaco Hidraulico', 745896, 'Fort', 'Categoria5', 899.99, 3, 10000, 'Macaco Hidráulico Tipo Jacaré 2 Ton. com Rodas de Ferro - FORTG-MJ2M-F', 'img/745896.jpg', '2021-07-03', 1, 'Tipo5'),
(7, 'Furadeira/Parafusadeira', 759852, 'Vonder', 'Categoria4', 249.99, 12, 800, 'Parafusadeira/Furadeira Vonder PFV012 3/8 Pol. 12V à Bateria Lition com Maleta e 12 Acessórios + Trena + Óculos - VONDER-K254', 'img/759852.jpg', '2021-04-29', 1, 'Tipo4'),
(8, 'Esmeril', 789632, 'Hammer', 'Categoria1', 181.45, 9, 1250, 'Kit Esmerilhadeira Angular Hammer EM710 4.1/2 Pol. 710W + 10 x Discos de Corte de Aço Inox - HAMMER-K42', 'img/789632.jpg', '2021-07-23', 1, 'Tipo4');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `produtos`
--
ALTER TABLE `produtos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `produtos`
--
ALTER TABLE `produtos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
