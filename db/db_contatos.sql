-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 13-Fev-2020 às 17:31
-- Versão do servidor: 10.4.11-MariaDB
-- versão do PHP: 7.2.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `db_contatos`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbl_contato`
--

CREATE TABLE `tbl_contato` (
  `CD_CONTATO` int(11) NOT NULL,
  `NM_CONTATO` varchar(70) COLLATE utf8_bin NOT NULL,
  `DS_OBSERVACAO` varchar(500) COLLATE utf8_bin DEFAULT NULL,
  `NR_DDD_FONE` int(11) DEFAULT NULL,
  `NR_FONE` bigint(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `tbl_contato`
--
ALTER TABLE `tbl_contato`
  ADD PRIMARY KEY (`CD_CONTATO`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `tbl_contato`
--
ALTER TABLE `tbl_contato`
  MODIFY `CD_CONTATO` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
