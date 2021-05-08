CREATE DATABASE Locadora;

USE Locadora;


-- --------------------------------------------------------

--
-- Estrutura da tabela `cliente`
--

CREATE TABLE `cliente` (
  `id` INT PRIMARY KEY NOT NULL,
  `telefone` varchar(20) NOT NULL,
  `habilitacao` varchar(2) NOT NULL,
  `dataEntrada` DATE NOT NULL,
  `dataSaida` DATE NOT NULL,
  
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Estrutura da tabela `automoveis_locacao`
--

CREATE TABLE `automoveis_locacao` (
  `id` INT PRIMARY KEY NOT NULL  AUTO_INCREMENT,
  `marca` varchar(20) NOT NULL,
  `modelo` varchar(20) NOT NULL,
  `cor` varchar(20) NOT NULL,  
  `ano` INT NOT NULL,
  `km` INT NOT NULL,
  `placa` varchar(20) NOT NULL,
  `valor_do_aluguel_do_aluguel` INT NOT NULL,
  `fk_locacao`  INT NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--

-- Inserindo dados da tabela `automoveis_locacao`
--
INSERT INTO `automoveis_locacao` (`id`,`marca`, `modelo`, `cor`, `ano`, `km`, `placa`,`valor_do_aluguel`, `fk_locacao`) VALUES (NULL, 'FIAT', 'UNO', 'BRANCO', '2015', '56023', 'QWE-8956', 89.9, '1');
INSERT INTO `automoveis_locacao` (`id`,`marca`, `modelo`, `cor`, `ano`, `km`, `placa`,`valor_do_aluguel`, `fk_locacao`) VALUES (NULL, 'FIAT','PALIO', 'PRATA', '2020', '20012', 'GHU-8923',130.5, '1');
INSERT INTO `automoveis_locacao` (`id`,`marca`, `modelo`, `cor`, `ano`, `km`, `placa`,`valor_do_aluguel`, `fk_locacao`) VALUES (NULL, 'FIAT','MOBI', 'PRATA', '2015', '165581', 'DFE-9023',159.99, '1');

INSERT INTO `automoveis_locacao` (`id`,`marca`, `modelo`, `cor`, `ano`, `km`, `placa`,`valor_do_aluguel`, `fk_locacao`) VALUES (NULL, 'FORD', 'FIESTA', 'VERMELHO', '2016', '58236', 'OIU-5620', 156.89, '2');
INSERT INTO `automoveis_locacao` (`id`,`marca`, `modelo`, `cor`, `ano`, `km`, `placa`,`valor_do_aluguel`, `fk_locacao`) VALUES (NULL, 'FORD', 'ECOESPORT', 'VERMELHO', '2018', '56003', 'TRF-9632',140.55, '2');
INSERT INTO `automoveis_locacao` (`id`,`marca`, `modelo`, `cor`, `ano`, `km`, `placa`,`valor_do_aluguel`, `fk_locacao`) VALUES (NULL, 'FORD', 'KA', 'BRANCO', '2018', '20156', 'UYT-8012',300, '2');

INSERT INTO `automoveis_locacao` (`id`,`marca`, `modelo`, `cor`, `ano`, `km`, `placa`,`valor_do_aluguel`, `fk_locacao`) VALUES (NULL, 'GM', 'CORSA', 'PRATA', '2012', '30156', 'GHT-8524', 198.89, '3');
INSERT INTO `automoveis_locacao` (`id`,`marca`, `modelo`, `cor`, `ano`, `km`, `placa`,`valor_do_aluguel`, `fk_locacao`) VALUES (NULL, 'GM', 'CELTA', 'PRETO', '2020', '00156', 'POU-7412', 106.89, '3');
INSERT INTO `automoveis_locacao` (`id`,`marca`, `modelo`, `cor`, `ano`, `km`, `placa`,`valor_do_aluguel`, `fk_locacao`) VALUES (NULL, 'GM', 'ONIX', 'AZUL', '2019', '10156', 'RTD-8965', 200.89, '3');

INSERT INTO `automoveis_locacao` (`id`,`marca`, `modelo`, `cor`, `ano`, `km`, `placa`,`valor_do_aluguel`, `fk_locacao`) VALUES (NULL, 'VW', 'FOX', 'PRATA', '2012', '20156', 'MKJ-8524', 156.89, '4');
INSERT INTO `automoveis_locacao` (`id`,`marca`, `modelo`, `cor`, `ano`, `km`, `placa`,`valor_do_aluguel`, `fk_locacao`) VALUES (NULL, 'VW', 'GOL', 'PRETO', '2020', '50156', 'DVA-7412',140.55, '4');
INSERT INTO `automoveis_locacao` (`id`,`marca`, `modelo`, `cor`, `ano`, `km`, `placa`,`valor_do_aluguel`, `fk_locacao`) VALUES (NULL, 'VW', 'GOLF', 'AZUL', '2019', '40156', 'DSR-8965',300, '4');

-- Ateração do ID
ALTER TABLE `automoveis_locacao`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;