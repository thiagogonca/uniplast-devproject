-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 31-Out-2017 às 17:38
-- Versão do servidor: 5.6.24
-- PHP Version: 5.5.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `uniplast`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `carousel`
--

CREATE TABLE IF NOT EXISTS `carousel` (
  `id` int(11) NOT NULL,
  `imagem` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `carousel`
--

INSERT INTO `carousel` (`id`, `imagem`) VALUES
(1, 'carrossel1.png'),
(2, 'carrossel2.png'),
(3, 'carrossel3.png');

-- --------------------------------------------------------

--
-- Estrutura da tabela `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `ID_login` int(11) NOT NULL,
  `usuario` varchar(100) NOT NULL,
  `senha` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `login`
--

INSERT INTO `login` (`ID_login`, `usuario`, `senha`) VALUES
(1, 'Rogerio', '1234');

-- --------------------------------------------------------

--
-- Estrutura da tabela `produtos`
--

CREATE TABLE IF NOT EXISTS `produtos` (
  `CD_PRODUTO` varchar(50) NOT NULL,
  `DS_PRODUTO` text NOT NULL,
  `DS_LINHA` text NOT NULL,
  `DS_COR` text NOT NULL,
  `DS_MATERIAL` text NOT NULL,
  `DS_APLIC_PRODUTO` text NOT NULL,
  `DS_DETALHES` text NOT NULL,
  `IMAGEM` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `produtos`
--

INSERT INTO `produtos` (`CD_PRODUTO`, `DS_PRODUTO`, `DS_LINHA`, `DS_COR`, `DS_MATERIAL`, `DS_APLIC_PRODUTO`, `DS_DETALHES`, `IMAGEM`) VALUES
('0431', 'Acabamento para revestimento cerâmico', 'Construção Civil', 'Branco, Bege, Cinza e Marfim', 'PVC rígido', 'Hospitais, Residências', 'Excelente para acabamentos onde os cantos de pisos e revestimentos ficam aparentes ou com o visual prejudicado, este produto tem fácil aplicação e como o próprio nome sugere proporciona um ótimo acabamento além de trazer leveza ao ambiente onde é aplicado. Desenvolvido especialmente para a construção civil a superfície de contato é estampada em formato “U” para aderir melhor à massa e se enquadrar bem a sua função.', '1.png'),
('0432', 'Cantoneira 19x19x1,5mm', 'Cantoneiras de PVC', 'Branco', 'PVC', 'Camaras Frigoríficas, Salas Limpas', 'Utilizado para acabamento em cantos de salas limpas, furgões frigoríficos, colunas, escadas etc. O perfil cantoneira é de fácil aplicação e também elimina os cantos vivos, facilitando a limpeza do local onde está instalado.', '2_11_43.jpg'),
('0433', 'Tubo 13x1,8', 'Comunicação Visual, Perfis Plásticos, Tubos Plásticos', 'Cinza, Branco, Amarelo', 'Plástico', 'Banners, Displays', 'O produto tubo 13 x 1,8 é utilizado em display e banners mantendo a propaganda visível.', '2_11_29.jpg'),
('0434', 'Perfil p/ carrinho', 'Movimentação de Materiais, Perfis Plásticos', 'Branco', 'Plástico', 'Carrinho de Transporte', 'Serve como Trilho para acondicionar molduras plásticas durante o transporte nos carrinhos utilizados dentro do chão de fábrica.', '1_12_12.jpg'),
('0435', 'Canaleta U', 'Refrigeração, Perfis Plásticos', 'Preto', 'Plástico', 'Refrigeradores', 'Tem como finalidade dar o acabamento no produto.', '1_12_27.jpg'),
('0436', 'Borda rigida', 'Moveleiro, Perfis Plásticos', 'Preto, Cinza', 'Plástico PVC', 'Móveis diversos', 'Aplicado em móveis diversos o perfil Borda Rígida tem como função realizar o acabamento em forma de testeira em mesas, roupeiros, móveis escolares e moveis de escritório. Este perfil pode ser confeccionado na cor solicitada pelo cliente (mediante compra de lote mínimo). Comprimento: 3000 mm e 6000 mm.', '1_12_28.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `carousel`
--
ALTER TABLE `carousel`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`ID_login`);

--
-- Indexes for table `produtos`
--
ALTER TABLE `produtos`
  ADD PRIMARY KEY (`CD_PRODUTO`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `carousel`
--
ALTER TABLE `carousel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `ID_login` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
