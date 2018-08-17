-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Tempo de geração: 17/08/2018 às 05:53
-- Versão do servidor: 5.6.38
-- Versão do PHP: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Banco de dados: `CRUD`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `Category`
--

CREATE TABLE `Category` (
  `id` int(11) NOT NULL,
  `name` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Fazendo dump de dados para tabela `Category`
--

INSERT INTO `Category` (`id`, `name`) VALUES
(1, 'Categoria 1'),
(2, 'Categoria 2');

-- --------------------------------------------------------

--
-- Estrutura para tabela `Products`
--

CREATE TABLE `Products` (
  `id` int(100) NOT NULL,
  `name` varchar(50) NOT NULL,
  `description` varchar(200) NOT NULL,
  `image` varchar(100) NOT NULL,
  `price` varchar(20) NOT NULL,
  `category` int(100) DEFAULT NULL,
  `updated_at` date NOT NULL,
  `created_at` date NOT NULL,
  `active` int(1) DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Fazendo dump de dados para tabela `Products`
--

INSERT INTO `Products` (`id`, `name`, `description`, `image`, `price`, `category`, `updated_at`, `created_at`, `active`) VALUES
(6, 'testezão dos brother', 'qw', '', '..,', 1, '2018-08-16', '0000-00-00', 0),
(7, 'qw', 'q', 'q', 'q', 1, '2018-08-16', '0000-00-00', 0),
(8, 'testezão', 'qw', 'qw', 'qw', 1, '2018-08-16', '0000-00-00', 0),
(9, 'qw', 'q', 'q', 'q', 1, '2018-08-16', '0000-00-00', 0),
(10, 'testezão', 'qw', 'qw', 'qw', 1, '2018-08-16', '0000-00-00', 0),
(11, 'qw', 'q', 'q', 'q', 1, '2018-08-16', '0000-00-00', 0),
(12, 'testezão', 'qw', 'qw', 'qw', 1, '2018-08-16', '0000-00-00', 0),
(13, 'qw', 'q', 'q', 'q', 1, '2018-08-16', '0000-00-00', 0),
(14, 'testezão', 'qw', 'qw', 'qw', 1, '2018-08-16', '0000-00-00', 0),
(48, 'asas', 'assas', 'Captura de Tela 2018-08-03 às 02.31.15.png', '..,', 1, '2018-08-17', '2018-08-16', 0),
(49, 'asas', 'assas', 'Captura de Tela 2018-08-03 às 02.31.15.png', '111', 1, '2018-08-16', '2018-08-16', 0),
(50, 'asassss', 'teste', 'Captura de Tela 2018-08-03 às 02.27.36.png', '1.11', 1, '2018-08-17', '2018-08-16', 0),
(51, 'asassss', '121212121212', 'Captura de Tela 2018-08-03 às 02.48.36.png', '1.111.1', 1, '2018-08-17', '2018-08-17', 0),
(52, 'Product1', 'Teste dos testes\r\n			\r\n			\r\n			', 'Captura de Tela 2018-08-03 às 02.27.36.png', '1.000', 1, '2018-08-17', '2018-08-17', 1),
(53, 'Product2', 'Outro teste', '516240472.jpg', '12,22', 2, '2018-08-17', '2018-08-17', 1),
(54, 'Product3', 'Teste final', 'IMG_4998.JPG', '950,00', 2, '2018-08-17', '2018-08-17', 1);

--
-- Índices de tabelas apagadas
--

--
-- Índices de tabela `Category`
--
ALTER TABLE `Category`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `Products`
--
ALTER TABLE `Products`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas apagadas
--

--
-- AUTO_INCREMENT de tabela `Category`
--
ALTER TABLE `Category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `Products`
--
ALTER TABLE `Products`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;
