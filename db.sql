CREATE DATABASE Locadora;

USE Locadora;

CREATE TABLE marca_carros VALUES(id int PRIMARY KEY NOT NULL AUTO_INCREMENT, nomes varchar(30));

CREATE TABLE automoveis VALUES(id_auto int PRIMARY KEY NOT NULL AUTO_INCREMENT, nomes varchar(30));


ALTER TABLE automoveis
ADD CONSTRAINT fk_marca_carro FOREIGN KEY (id_auto) REFERENCES marca_carros (id_marca)ON DELETE RESTRICT ON UPDATE RESTRICT;


INSERT INTO `automoveis` (`id_auto`, `modelo`, `cor`, `ano`, `km_atual`, `placa`, `fk_marca_carros`) VALUES (NULL, 'CORSA', 'PRATA', '2012', '30156', 'GHT-8524', '3');
INSERT INTO `automoveis` (`id_auto`, `modelo`, `cor`, `ano`, `km_atual`, `placa`, `fk_marca_carros`) VALUES (NULL, 'CELTA', 'PRETO', '2020', '00156', 'POU-7412', '3');
INSERT INTO `automoveis` (`id_auto`, `modelo`, `cor`, `ano`, `km_atual`, `placa`, `fk_marca_carros`) VALUES (NULL, 'ONIX', 'AZUL', '2019', '10156', 'RTD-8965', '3');

INSERT INTO `automoveis` (`id_auto`, `modelo`, `cor`, `ano`, `km_atual`, `placa`,`valor`, `fk_marca_carros`) VALUES (NULL, 'FOX', 'PRATA', '2012', '20156', 'MKJ-8524', 156.89, '4');
INSERT INTO `automoveis` (`id_auto`, `modelo`, `cor`, `ano`, `km_atual`, `placa`,`valor`, `fk_marca_carros`) VALUES (NULL, 'GOL', 'PRETO', '2020', '50156', 'DVA-7412',140.55, '4');
INSERT INTO `automoveis` (`id_auto`, `modelo`, `cor`, `ano`, `km_atual`, `placa`,`valor`, `fk_marca_carros`) VALUES (NULL, 'GOLF', 'AZUL', '2019', '40156', 'DSR-8965',300, '4');