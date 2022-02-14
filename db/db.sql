
CREATE DATABASE IF NOT EXISTS xPaper;
use xPaper;
DROP TABLE IF EXISTS `bobinas`;
CREATE TABLE `bobinas` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `inicio` Datetime,
  `fim` Datetime,
  `total` float NOT NULL,
  `velocidade` float NOT NULL,
  `turno` varchar(1) ,
  `local` int,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;




DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE `usuarios` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `email` varchar(64),
  `senha` varchar(64),
  `nome`  varchar(64),
  `usuario` varchar(64),
  `status` int(1),
   PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;