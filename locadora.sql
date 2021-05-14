CREATE DATABASE Locadora;

USE Locadora;


-- --------------------------------------------------------

--
-- Estrutura da tabela `detalhes da locação`
--

CREATE TABLE `detalhes_locacao` (
  `id` INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
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
  `id` INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
  `modelo` varchar(20) NOT NULL,
  `cor` varchar(20) NOT NULL,  
  `ano` INT NOT NULL,
  `km` INT NOT NULL,
  `placa` varchar(20) NOT NULL,
  `valor_do_aluguel` INT NOT NULL,
  `marca_id` INT NOT NULL,
   PRIMARY KEY (`id`)  
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- Inserindo dados da tabela `descricao_veiculo`
--
INSERT INTO `descricao_veiculo` (`id`, `modelo`, `cor`, `ano`, `km`, `placa`,`valor_do_aluguel`) VALUES (NULL, 'FIAT', 'UNO', 'BRANCO', '2015', '56023', 'QWE-8956', 89.9, 1);
INSERT INTO `descricao_veiculo` (`id`, `modelo`, `cor`, `ano`, `km`, `placa`,`valor_do_aluguel`) VALUES (NULL, 'FIAT','PALIO', 'PRATA', '2020', '20012', 'GHU-8923',130.5, 1);
INSERT INTO `descricao_veiculo` (`id`, `modelo`, `cor`, `ano`, `km`, `placa`,`valor_do_aluguel`) VALUES (1, 'FIAT','MOBI', 'PRATA', '2015', '165581', 'DFE-9023',159.99, 1);

INSERT INTO `descricao_veiculo` (`id`, `modelo`, `cor`, `ano`, `km`, `placa`,`valor_do_aluguel`) VALUES (NULL, 'FORD', 'FIESTA', 'VERMELHO', '2016', '58236', 'OIU-5620', 156.89, 2);
INSERT INTO `descricao_veiculo` (`id`, `modelo`, `cor`, `ano`, `km`, `placa`,`valor_do_aluguel`) VALUES (NULL, 'FORD', 'ECOESPORT', 'VERMELHO', '2018', '56003', 'TRF-9632',140.55, 2);
INSERT INTO `descricao_veiculo` (`id`, `modelo`, `cor`, `ano`, `km`, `placa`,`valor_do_aluguel`) VALUES (NULL, 'FORD', 'KA', 'BRANCO', '2018', '20156', 'UYT-8012',300, 2);

INSERT INTO `descricao_veiculo` (`id`, `modelo`, `cor`, `ano`, `km`, `placa`,`valor_do_aluguel`) VALUES (NULL, 'GM', 'CORSA', 'PRATA', '2012', '30156', 'GHT-8524', 198.89, 3);
INSERT INTO `descricao_veiculo` (`id`, `modelo`, `cor`, `ano`, `km`, `placa`,`valor_do_aluguel`) VALUES (NULL, 'GM', 'CELTA', 'PRETO', '2020', '00156', 'POU-7412', 106.89, 3);
INSERT INTO `descricao_veiculo` (`id`, `modelo`, `cor`, `ano`, `km`, `placa`,`valor_do_aluguel`) VALUES (NULL, 'GM', 'ONIX', 'AZUL', '2019', '10156', 'RTD-8965', 200.8, 3);

INSERT INTO `descricao_veiculo` (`id`, `modelo`, `cor`, `ano`, `km`, `placa`,`valor_do_aluguel`) VALUES (NULL, 'VW', 'FOX', 'PRATA', '2012', '20156', 'MKJ-8524', 156.89, 4);
INSERT INTO `descricao_veiculo` (`id`, `modelo`, `cor`, `ano`, `km`, `placa`,`valor_do_aluguel`) VALUES (NULL, 'VW', 'GOL', 'PRETO', '2020', '50156', 'DVA-7412',140.55, 4);
INSERT INTO `descricao_veiculo` (`id`, `modelo`, `cor`, `ano`, `km`, `placa`,`valor_do_aluguel`) VALUES (NULL, 'VW', 'GOLF', 'AZUL', '2019', '40156', 'DSR-8965',300, 4);

--
-- Estrutura da tabela `marca_veiculo`
--
--
CREATE TABLE `marca_veiculos` (
  `id` INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
  `nome_veiculos` varchar(20) NOT NULL  
) ENGINE=MyISAM DEFAULT CHARSET=latin1;


-- Inserindo dados da tabela `marca_veiculo`
INSERT INTO `marca_veiculos`(`id`, `nome_veiculos`) VALUES (NULL, 'FIAT');
INSERT INTO `marca_veiculos`(`id`, `nome_veiculos`) VALUES (NULL, 'FORD');
INSERT INTO `marca_veiculos`(`id`, `nome_veiculos`) VALUES (NULL, 'GM');
INSERT INTO `marca_veiculos`(`id`, `nome_veiculos`) VALUES (NULL, 'VW');





 





      