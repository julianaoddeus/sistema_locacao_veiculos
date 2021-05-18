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
  `fk_marca` INT NOT NULL,
  `fk_modelo` Varchar(20) NOT NULL
) ENGINE=INNODB DEFAULT CHARSET=latin1;

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
) ENGINE=INNODB DEFAULT CHARSET=latin1;

-- Inserindo dados da tabela `descricao_veiculo`
--
INSERT INTO `descricao_veiculo` (`id`, `modelo`, `cor`, `ano`, `km`, `placa`,`valor_do_aluguel`, `marca_id`) VALUES (NULL, 'UNO', 'BRANCO', '2015', '56023', 'QWE-8956', 89.9, 1);
INSERT INTO `descricao_veiculo` (`id`, `modelo`, `cor`, `ano`, `km`, `placa`,`valor_do_aluguel`, `marca_id`) VALUES (NULL, 'PALIO', 'PRATA', '2020', '20012', 'GHU-8923',130.5, 1);
INSERT INTO `descricao_veiculo` (`id`, `modelo`, `cor`, `ano`, `km`, `placa`,`valor_do_aluguel`, `marca_id`) VALUES (NULL, 'MOBI', 'PRATA', '2015', '165581', 'DFE-9023',159.99, 1);

INSERT INTO `descricao_veiculo` (`id`, `modelo`, `cor`, `ano`, `km`, `placa`,`valor_do_aluguel`, `marca_id`) VALUES (NULL, 'FIESTA', 'VERMELHO', '2016', '58236', 'OIU-5620', 156.89, 2);
INSERT INTO `descricao_veiculo` (`id`, `modelo`, `cor`, `ano`, `km`, `placa`,`valor_do_aluguel`, `marca_id`) VALUES (NULL, 'ECOESPORT', 'VERMELHO', '2018', '56003', 'TRF-9632',140.55, 2);
INSERT INTO `descricao_veiculo` (`id`, `modelo`, `cor`, `ano`, `km`, `placa`,`valor_do_aluguel`, `marca_id`) VALUES (NULL, 'KA', 'BRANCO', '2018', '20156', 'UYT-8012',300, 2);

INSERT INTO `descricao_veiculo` (`id`, `modelo`, `cor`, `ano`, `km`, `placa`,`valor_do_aluguel`, `marca_id`) VALUES (NULL, 'CORSA', 'PRATA', '2012', '30156', 'GHT-8524', 198.89, 3);
INSERT INTO `descricao_veiculo` (`id`, `modelo`, `cor`, `ano`, `km`, `placa`,`valor_do_aluguel`, `marca_id`) VALUES (NULL, 'CELTA', 'PRETO', '2020', '00156', 'POU-7412', 106.89, 3);
INSERT INTO `descricao_veiculo` (`id`, `modelo`, `cor`, `ano`, `km`, `placa`,`valor_do_aluguel`, `marca_id`) VALUES (NULL, 'ONIX', 'AZUL', '2019', '10156', 'RTD-8965', 200.8, 3);

INSERT INTO `descricao_veiculo` (`id`, `modelo`, `cor`, `ano`, `km`, `placa`,`valor_do_aluguel`, `marca_id`) VALUES (NULL, 'FOX', 'PRATA', '2012', '20156', 'MKJ-8524', 156.89, 4);
INSERT INTO `descricao_veiculo` (`id`, `modelo`, `cor`, `ano`, `km`, `placa`,`valor_do_aluguel`, `marca_id`) VALUES (NULL, 'GOL', 'PRETO', '2020', '50156', 'DVA-7412',140.55, 4);
INSERT INTO `descricao_veiculo` (`id`, `modelo`, `cor`, `ano`, `km`, `placa`,`valor_do_aluguel`, `marca_id`) VALUES (NULL, 'GOLF', 'AZUL', '2019', '40156', 'DSR-8965',300, 4);

--
-- Estrutura da tabela `marca_veiculo`
--
--
CREATE TABLE `marca_veiculos` (
  `id` INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
  `marca` varchar(20) NOT NULL  
) ENGINE=INNODB DEFAULT CHARSET=latin1;


-- Inserindo dados da tabela `marca_veiculo`
INSERT INTO `marca_veiculos`(`id`, `marca`) VALUES (NULL, 'FIAT');
INSERT INTO `marca_veiculos`(`id`, `marca`) VALUES (NULL, 'FORD');
INSERT INTO `marca_veiculos`(`id`, `marca`) VALUES (NULL, 'GM');
INSERT INTO `marca_veiculos`(`id`, `marca`) VALUES (NULL, 'VW');




--JOIN ENTRE DUAS TABELAS DESCRIÇÃO VEICULOS E MARCA VEÍCULOS

`SELECT detalhes_locacao.nome, detalhes_locacao.telefone, detalhes_locacao.habilitacao, detalhes_locacao.dataEntrada, detalhes_locacao.dataSaida, marca_veiculos.marca FROM  detalhes_locacao JOIN marca_veiculos`;

-- JOIN ON DE 3 TABELAS DESCRIÇÃO VEICULOS, MARCA VEÍCULOS e DETALHES LOCAÇAO

`SELECT l.nome, l.telefone, l.habilitacao, l.dataEntrada, l.dataSaida, m.marca, v.modelo, v.cor, v.ano, v.km, v.placa, v.valor FROM detalhes_locacao l JOIN marca_veiculos  m ON l.fk_marca = m.id JOIN descricao_veiculo v ON l.fk_modelo = v.modelo`

