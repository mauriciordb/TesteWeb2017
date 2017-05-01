CREATE DATABASE `db_web` /*!40100 DEFAULT CHARACTER SET utf8 */;
CREATE TABLE `tb_mercadoria` (
  `cd_mercadoria` int(11) NOT NULL,
  `tp_mercadoria` varchar(45) NOT NULL,
  `nm_mercadoria` varchar(45) NOT NULL,
  `qt_mercadoria` int(11) NOT NULL,
  `vl_mercadoria` float NOT NULL,
  `tp_negocio` varchar(45) NOT NULL,
  PRIMARY KEY (`cd_mercadoria`),
  UNIQUE KEY `cd_mercadoria_UNIQUE` (`cd_mercadoria`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
