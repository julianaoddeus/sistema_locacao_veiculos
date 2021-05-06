CREATE DATABASE Locadora;

USE Locadora;


-- --------------------------------------------------------

--
-- Estrutura da tabela `cliente`
--

CREATE TABLE `cliente` (
  `id_cliente` INT PRIMARY KEY NOT NULL,
  `telefone` varchar(20) NOT NULL,
  `habilitacao` varchar(2) NOT NULL,
  `marca` varchar(20) NOT NULL,
  `modelo` varchar(20) NOT NULL,
  `cor` varchar(20) NOT NULL,
  `placa` varchar(20) NOT NULL,
  `ano` INT NOT NULL,
  `km` INT NOT NULL,
  `dataEntrada` DATA NOT NULL,
  `dataSaida` DATA NOT NULL,
  `fk_cadastro` INT NOT NULL,
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Estrutura da tabela `automoveis`
--

CREATE TABLE `automoveis` (
  `id_auto` INT PRIMARY KEY NOT NULL,
  `marca` varchar(20) NOT NULL,
  `modelo` varchar(20) NOT NULL,
  `cor` varchar(20) NOT NULL,
  `placa` varchar(20) NOT NULL,
  `ano` INT NOT NULL,
  `km` INT NOT NULL,
  `dataEntrada` DATA NOT NULL,
  `dataSaida` DATA NOT NULL,
  `fk_marca_carros` INT NOT NULL,
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Estrutura da tabela `marca_carros`
--
CREATE TABLE `marca_carros` (
  `id_marca` INT PRIMARY KEY NOT NULL,
  `nome` varchar(20) NOT NULL,
  
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
--
--
-- Inserindo dados da tabela `automoveis`
--
INSERT INTO `automoveis` (`id_auto`, `modelo`, `cor`, `ano`, `km_atual`, `placa`,`valor`, `fk_marca_carros`) VALUES (NULL, 'UNO', 'BRANCO', '2015', '56023', 'QWE-8956', 89.9, '1');
INSERT INTO `automoveis` (`id_auto`, `modelo`, `cor`, `ano`, `km_atual`, `placa`,`valor`, `fk_marca_carros`) VALUES (NULL, 'PALIO', 'PRATA', '2020', '20012', 'GHU-8923',130.5, '1');
INSERT INTO `automoveis` (`id_auto`, `modelo`, `cor`, `ano`, `km_atual`, `placa`,`valor`, `fk_marca_carros`) VALUES (NULL, 'MOBI', 'PRATA', '2015', '165581', 'DFE-9023',159.99, '1');

INSERT INTO `automoveis` (`id_auto`, `modelo`, `cor`, `ano`, `km_atual`, `placa`,`valor`, `fk_marca_carros`) VALUES (NULL, 'FIESTA', 'VERMELHO', '2016', '58236', 'OIU-5620', 156.89, '2');
INSERT INTO `automoveis` (`id_auto`, `modelo`, `cor`, `ano`, `km_atual`, `placa`,`valor`, `fk_marca_carros`) VALUES (NULL, 'ECOESPORT', 'VERMELHO', '2018', '56003', 'TRF-9632',140.55, '2');
INSERT INTO `automoveis` (`id_auto`, `modelo`, `cor`, `ano`, `km_atual`, `placa`,`valor`, `fk_marca_carros`) VALUES (NULL, 'KA', 'BRANCO', '2018', '20156', 'UYT-8012',300, '2');

INSERT INTO `automoveis` (`id_auto`, `modelo`, `cor`, `ano`, `km_atual`, `placa`,`valor`, `fk_marca_carros`) VALUES (NULL, 'CORSA', 'PRATA', '2012', '30156', 'GHT-8524', 198.89, '3');
INSERT INTO `automoveis` (`id_auto`, `modelo`, `cor`, `ano`, `km_atual`, `placa`,`valor`, `fk_marca_carros`) VALUES (NULL, 'CELTA', 'PRETO', '2020', '00156', 'POU-7412', 106.89, '3');
INSERT INTO `automoveis` (`id_auto`, `modelo`, `cor`, `ano`, `km_atual`, `placa`,`valor`, `fk_marca_carros`) VALUES (NULL, 'ONIX', 'AZUL', '2019', '10156', 'RTD-8965', 200.89, '3');

INSERT INTO `automoveis` (`id_auto`, `modelo`, `cor`, `ano`, `km_atual`, `placa`,`valor`, `fk_marca_carros`) VALUES (NULL, 'FOX', 'PRATA', '2012', '20156', 'MKJ-8524', 156.89, '4');
INSERT INTO `automoveis` (`id_auto`, `modelo`, `cor`, `ano`, `km_atual`, `placa`,`valor`, `fk_marca_carros`) VALUES (NULL, 'GOL', 'PRETO', '2020', '50156', 'DVA-7412',140.55, '4');
INSERT INTO `automoveis` (`id_auto`, `modelo`, `cor`, `ano`, `km_atual`, `placa`,`valor`, `fk_marca_carros`) VALUES (NULL, 'GOLF', 'AZUL', '2019', '40156', 'DSR-8965',300, '4');


