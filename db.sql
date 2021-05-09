CREATE DATABASE Locadora;

USE Locadora;


-- --------------------------------------------------------

--
-- Estrutura da tabela `detalhes da locação`
--

CREATE TABLE `detalhes_locacao` (
  `id` INT PRIMARY KEY NOT NULL,
  `nome` varchar(100) NOT NULL,
  `telefone` varchar(20) NOT NULL,
  `habilitacao` varchar(2) NOT NULL,
  `dataEntrada` DATE NOT NULL,
  `dataSaida` DATE NOT NULL,
  `fk_veiculos` INT NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Estrutura da tabela `descrição do veiculo`
--
--
CREATE TABLE `descricao_veiculo` (
  `id` INT PRIMARY KEY NOT NULL,
  `marca` varchar(20) NOT NULL,
  `modelo` varchar(20) NOT NULL,
  `cor` varchar(20) NOT NULL,  
  `ano` INT NOT NULL,
  `km` INT NOT NULL,
  `placa` varchar(20) NOT NULL,
  `valor_do_aluguel` INT NOT NULL 
) ENGINE=MyISAM DEFAULT CHARSET=latin1;



-- Inserindo dados da tabela `descricao_veiculo`
--
INSERT INTO `descricao_veiculo` (`id`,`marca`, `modelo`, `cor`, `ano`, `km`, `placa`,`valor_do_aluguel`) VALUES (1, 'FIAT', 'UNO', 'BRANCO', '2015', '56023', 'QWE-8956', 89.9);
INSERT INTO `descricao_veiculo` (`id`,`marca`, `modelo`, `cor`, `ano`, `km`, `placa`,`valor_do_aluguel`) VALUES (1, 'FIAT','PALIO', 'PRATA', '2020', '20012', 'GHU-8923',130.5);
INSERT INTO `descricao_veiculo` (`id`,`marca`, `modelo`, `cor`, `ano`, `km`, `placa`,`valor_do_aluguel`) VALUES (1, 'FIAT','MOBI', 'PRATA', '2015', '165581', 'DFE-9023',159.99);

INSERT INTO `descricao_veiculo` (`id`,`marca`, `modelo`, `cor`, `ano`, `km`, `placa`,`valor_do_aluguel`) VALUES (2, 'FORD', 'FIESTA', 'VERMELHO', '2016', '58236', 'OIU-5620', 156.89);
INSERT INTO `descricao_veiculo` (`id`,`marca`, `modelo`, `cor`, `ano`, `km`, `placa`,`valor_do_aluguel`) VALUES (2, 'FORD', 'ECOESPORT', 'VERMELHO', '2018', '56003', 'TRF-9632',140.55);
INSERT INTO `descricao_veiculo` (`id`,`marca`, `modelo`, `cor`, `ano`, `km`, `placa`,`valor_do_aluguel`) VALUES (2, 'FORD', 'KA', 'BRANCO', '2018', '20156', 'UYT-8012',300);

INSERT INTO `descricao_veiculo` (`id`,`marca`, `modelo`, `cor`, `ano`, `km`, `placa`,`valor_do_aluguel`) VALUES (3, 'GM', 'CORSA', 'PRATA', '2012', '30156', 'GHT-8524', 198.89);
INSERT INTO `descricao_veiculo` (`id`,`marca`, `modelo`, `cor`, `ano`, `km`, `placa`,`valor_do_aluguel`) VALUES (3, 'GM', 'CELTA', 'PRETO', '2020', '00156', 'POU-7412', 106.89);
INSERT INTO `descricao_veiculo` (`id`,`marca`, `modelo`, `cor`, `ano`, `km`, `placa`,`valor_do_aluguel`) VALUES (3, 'GM', 'ONIX', 'AZUL', '2019', '10156', 'RTD-8965', 200.8);

INSERT INTO `descricao_veiculo` (`id`,`marca`, `modelo`, `cor`, `ano`, `km`, `placa`,`valor_do_aluguel`) VALUES (4, 'VW', 'FOX', 'PRATA', '2012', '20156', 'MKJ-8524', 156.89);
INSERT INTO `descricao_veiculo` (`id`,`marca`, `modelo`, `cor`, `ano`, `km`, `placa`,`valor_do_aluguel`) VALUES (4, 'VW', 'GOL', 'PRETO', '2020', '50156', 'DVA-7412',140.55);
INSERT INTO `descricao_veiculo` (`id`,`marca`, `modelo`, `cor`, `ano`, `km`, `placa`,`valor_do_aluguel`) VALUES (4, 'VW', 'GOLF', 'AZUL', '2019', '40156', 'DSR-8965',300);

