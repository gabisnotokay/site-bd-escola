-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 11-Dez-2022 às 21:05
-- Versão do servidor: 10.4.24-MariaDB
-- versão do PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `bd_escola`
--
-- Database: `bd_escola`
CREATE DATABASE `bd_escola`;
use `bd_escola`;
-- --------------------------------------------------------

--
-- Estrutura da tabela `alunos`
--

CREATE TABLE `alunos` (
  `MATRICULA` varchar(5) NOT NULL,
  `NOME` varchar(50) NOT NULL,
  `ENDERECO` varchar(50) NOT NULL,
  `CIDADE` varchar(30) NOT NULL,
  `COD_CURSO` varchar(2) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `alunos`
--

INSERT INTO `alunos` (`MATRICULA`, `NOME`, `ENDERECO`, `CIDADE`, `COD_CURSO`) VALUES
('10001', 'Marcos Moraes', 'Rua Pe Raque, 2057', 'Mogi Mirim', '01'),
('10002', 'Maria Conceição Lopes', 'Rua Araras,23', 'Mogi Guaçu', '01'),
('10003', 'Ana Carina Lopes', 'Rua Peraltas,222', 'Santos', '01'),
('10004', 'Carlos Aguiar', 'Rua Botafogo,33', 'Santos', '01'),
('10005', 'André Luiz dos Santos', 'Rua Lopes Conte,3343', 'Sapucaí', '01'),
('10006', 'Pedro Antonio Pimenta', 'Rua Altair Lopes,33', 'Itapira', '02'),
('10007', 'Rita de Cássia da Silva', 'Rua Eletromais,33', 'Itapira', '02'),
('10008', 'Caique dos Santos', 'Rua das Amoreiras,55', 'Campinas', '02'),
('10009', 'Carlos Tavares', 'Rua Peixe,99', 'Santos', '02'),
('10010', 'Antonio Carlos Caetano', 'Rua Josefina Alface,987', 'Campinas', '02'),
('10011', 'Ricardo Moreira', 'Rua do Pinhal,332', 'Aparecida', '03'),
('10012', 'Richardson S. P. Campeao', 'Rua do Tricolor,433', 'São Paulo', '03'),
('10013', 'Junior Camisa Seis', 'Rua do Morumbi,433', 'São Paulo', '03'),
('10014', 'Carina Melo', 'Rua Osvaldo Ramos,88', 'Mogi Guaçu', '03'),
('10015', 'Pedro Mello', 'Rua Itororó,3999 ', 'Mogi Mirim', '03');

-- --------------------------------------------------------

--
-- Estrutura da tabela `cursos`
--

CREATE TABLE `cursos` (
  `COD_CURSO` varchar(2) NOT NULL,
  `NOME` varchar(50) NOT NULL,
  `CODDISC1` varchar(2) NOT NULL,
  `CODDISC2` varchar(2) NOT NULL,
  `CODDISC3` varchar(2) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `cursos`
--

INSERT INTO `cursos` (`COD_CURSO`, `NOME`, `CODDISC1`, `CODDISC2`, `CODDISC3`) VALUES
('01', 'Auxiliar de Informática', '11', '12', '13'),
('02', 'Programador de Computadores', '21', '22', '23'),
('03', 'Técnico em Informática', '31', '32', '33');

-- --------------------------------------------------------

--
-- Estrutura da tabela `disciplina`
--

CREATE TABLE `disciplina` (
  `COD_DISCIPLINA` varchar(2) NOT NULL,
  `NOME_DISCIPLINA` varchar(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `disciplina`
--

INSERT INTO `disciplina` (`COD_DISCIPLINA`, `NOME_DISCIPLINA`) VALUES
('11', 'Banco de Dados'),
('12', 'Lógica de Programação'),
('13', 'Desenvolvimento de Software1'),
('21', 'Banco de Dados2'),
('22', 'Desenvolvimento de Software2'),
('23', 'Programação de Computadores1'),
('31', 'Banco de Dados3'),
('32', 'Programação de Computadores2'),
('33', 'Desenvolvimento de Software3');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE `usuario` (
  `MATRICULA` int(5) NOT NULL,
  `SENHA` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `alunos`
--
ALTER TABLE `alunos`
  ADD PRIMARY KEY (`MATRICULA`);

--
-- Índices para tabela `cursos`
--
ALTER TABLE `cursos`
  ADD PRIMARY KEY (`COD_CURSO`);

--
-- Índices para tabela `disciplina`
--
ALTER TABLE `disciplina`
  ADD PRIMARY KEY (`COD_DISCIPLINA`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
