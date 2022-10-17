-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 17-Out-2022 às 02:17
-- Versão do servidor: 10.4.25-MariaDB
-- versão do PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `formulario-cadastro`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nome` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `data_nascimento` date NOT NULL,
  `cidade` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `estado` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `endereco` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telefone` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(110) COLLATE utf8mb4_unicode_ci NOT NULL,
  `senha` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nomePai` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nomeMae` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rg` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cpf` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `nome`, `data_nascimento`, `cidade`, `estado`, `endereco`, `telefone`, `email`, `senha`, `nomePai`, `nomeMae`, `rg`, `cpf`) VALUES
(4, 'marina', '2000-02-05', 'brejão', 'pe', '1234', '981386994', 'emillyraiane2@hotmail.com', '56432', 'jose', 'lane', '875462', '215404645'),
(11, 'emilly', '1999-08-02', 'brejão', 'pe', 'tals', 'tals', 'jose@hotmail.com', '548724584', 'renato', 'lane', '34567', '07125841457'),
(12, 'Alice', '1988-03-28', 'correntes', 'pe', 'tals', 'tals', 'alice@hotmail.com', 'alice1234', 'renato', 'lane', '34567', '712.897.344-37'),
(13, 'emilly raiane', '2005-01-03', 'garanhus', 'pe', 'zona rural', '981386994', 'emillyraiane2@hotmail.com', 'mila1234', 'renato', 'lane', '34567', '7543345678'),
(14, 'teste2', '0200-10-25', 'teste', 'teste', 'tal', 'tal', 'teste@gmail.com', 'teste123', 'tal', 'tal', '23456', '987654');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
