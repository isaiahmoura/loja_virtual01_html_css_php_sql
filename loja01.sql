-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 14-Dez-2021 às 15:51
-- Versão do servidor: 10.4.21-MariaDB
-- versão do PHP: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `loja01`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `categorias_acessorios`
--

CREATE TABLE `categorias_acessorios` (
  `id` int(11) NOT NULL,
  `titulo` varchar(20) NOT NULL,
  `categoria` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `categorias_acessorios`
--

INSERT INTO `categorias_acessorios` (`id`, `titulo`, `categoria`) VALUES
(1, 'Anéis', 'Acessorios'),
(2, 'Braceletes', 'Acessorios'),
(3, 'Colares', 'Acessorios'),
(4, 'Brincos', 'Acessorios');

-- --------------------------------------------------------

--
-- Estrutura da tabela `categorias_calçados`
--

CREATE TABLE `categorias_calçados` (
  `id` int(11) NOT NULL,
  `titulo` varchar(20) NOT NULL,
  `categoria` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `categorias_calçados`
--

INSERT INTO `categorias_calçados` (`id`, `titulo`, `categoria`) VALUES
(1, 'Chinelas', 'Calçados'),
(2, 'Tênis', 'Calçados'),
(3, 'Sapatos', 'Calçados');

-- --------------------------------------------------------

--
-- Estrutura da tabela `categorias_roupas`
--

CREATE TABLE `categorias_roupas` (
  `id` int(11) NOT NULL,
  `titulo` varchar(20) NOT NULL,
  `categoria` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `categorias_roupas`
--

INSERT INTO `categorias_roupas` (`id`, `titulo`, `categoria`) VALUES
(1, 'Chapeus', 'Roupas'),
(2, 'Camisas', 'Roupas'),
(3, 'Calças', 'Roupas'),
(4, 'Calções', 'Roupas');

-- --------------------------------------------------------

--
-- Estrutura da tabela `produtos`
--

CREATE TABLE `produtos` (
  `id` int(11) NOT NULL,
  `nome_produto` varchar(13) NOT NULL,
  `categoria` varchar(3222) NOT NULL,
  `img_produto` varchar(100) NOT NULL,
  `preco_produto` float NOT NULL,
  `quantidade_produto` int(11) NOT NULL,
  `descricao_produto` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `produtos`
--

INSERT INTO `produtos` (`id`, `nome_produto`, `categoria`, `img_produto`, `preco_produto`, `quantidade_produto`, `descricao_produto`) VALUES
(1, 'Boné Preto 01', 'Roupas', 'bone_preto01.jpg', 12, 548, 'Boné preto muito bom para quem gosta de preto'),
(2, 'Boné Preto 02', 'Roupas', 'bone_preto02.jpg', 15, 548, 'Bone preto'),
(3, 'Boné Rosa 01', 'Roupas', 'bone_rosa01.jpg', 34, 548, 'Bone rosa'),
(4, 'Boné Branco 0', 'Roupas', 'bone_branco01.jpg', 15, 548, 'Bone Branco'),
(5, 'Calça 01', 'Roupas', 'calca01.jpg', 34, 123, 'Calça para usar na rua \'-\''),
(6, 'Calça 02', 'Roupas', 'calca02.jpg', 45, 23, 'Calça 02'),
(7, 'Camisa Preta ', 'Roupas', 'camisa_preta01.jpg', 56, 548, 'Camisa Preta '),
(8, 'Jaqueta 01', 'Roupas', 'jaqueta_preta01.jpg', 234, 22, 'Jaqueta');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nome` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `senha` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `nome`, `email`, `senha`) VALUES
(1, 'Isaias Moura', 'isaiasmoura123@gmail.com', '202cb962ac59075b964b07152d234b70'),
(2, 'Mascos', 'marcos123@gmail.com', '202cb962ac59075b964b07152d234b70'),
(3, 'Paulo', 'paulo123@gmail.com', '202cb962ac59075b964b07152d234b70');

-- --------------------------------------------------------

--
-- Estrutura da tabela `vendas`
--

CREATE TABLE `vendas` (
  `id` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `id_produto` int(11) NOT NULL,
  `quantidade` int(11) NOT NULL,
  `endereço` text NOT NULL,
  `valor_total` float NOT NULL,
  `forma_pg` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `categorias_acessorios`
--
ALTER TABLE `categorias_acessorios`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `categorias_calçados`
--
ALTER TABLE `categorias_calçados`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `categorias_roupas`
--
ALTER TABLE `categorias_roupas`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `produtos`
--
ALTER TABLE `produtos`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `vendas`
--
ALTER TABLE `vendas`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `categorias_acessorios`
--
ALTER TABLE `categorias_acessorios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `categorias_calçados`
--
ALTER TABLE `categorias_calçados`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de tabela `categorias_roupas`
--
ALTER TABLE `categorias_roupas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `produtos`
--
ALTER TABLE `produtos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `vendas`
--
ALTER TABLE `vendas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
