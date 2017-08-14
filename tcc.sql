/*
SQLyog Enterprise - MySQL GUI v8.12 
MySQL - 5.5.5-10.1.13-MariaDB : Database - tcc
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

CREATE DATABASE /*!32312 IF NOT EXISTS*/`tcc` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `tcc`;

/*Table structure for table `civil` */

DROP TABLE IF EXISTS `civil`;

CREATE TABLE `civil` (
  `CIV_ID` int(11) NOT NULL AUTO_INCREMENT,
  `CIV_NOME` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`CIV_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

/*Data for the table `civil` */

LOCK TABLES `civil` WRITE;

insert  into `civil`(`CIV_ID`,`CIV_NOME`) values (1,'Solteiro'),(2,'Casado'),(3,'Outros');

UNLOCK TABLES;

/*Table structure for table `cliente` */

DROP TABLE IF EXISTS `cliente`;

CREATE TABLE `cliente` (
  `CLI_ID` int(11) NOT NULL AUTO_INCREMENT,
  `CLI_CODIGO` int(11) DEFAULT NULL,
  `CLI_COD_PESSOA` int(11) DEFAULT NULL,
  `CLI_PESSOA` varchar(5) DEFAULT NULL,
  `CLI_COMPRADOR` varchar(50) DEFAULT NULL,
  `CLI_EMPREGO` varchar(50) DEFAULT NULL,
  `CLI_RENDA` decimal(10,0) DEFAULT NULL,
  `CLI_LIMITE` decimal(10,0) DEFAULT NULL,
  `CLI_TEL_CONFIRMACAO1` int(50) DEFAULT NULL,
  `CLI_CONTATO1` varchar(50) DEFAULT NULL,
  `CLI_TEL_CONFIRMACAO2` int(50) DEFAULT NULL,
  `CLI_CONTATO2` varchar(50) DEFAULT NULL,
  `CLI_TEL_CONFIRMACAO3` int(50) DEFAULT NULL,
  `CLI_CONTATO3` varchar(50) DEFAULT NULL,
  `CLI_OBSERVACAO` text,
  `CLI_DATA_CADASTRO` date DEFAULT NULL,
  `CLI_HORA_CADASTRO` time DEFAULT NULL,
  `CLI_SESSION_CAD` varchar(50) DEFAULT NULL,
  `CLI_IP_CADASTRO` varchar(50) DEFAULT NULL,
  `CLI_DATA_ALTTERACAO` date DEFAULT NULL,
  `CLI_HORA_ALTERACAO` time DEFAULT NULL,
  `CLI_SESSION_ALTER` varchar(50) DEFAULT NULL,
  `CLI_IP_ALTERACAO` varchar(50) DEFAULT NULL,
  `CLI_ID_ALTER` int(11) DEFAULT NULL,
  `CLI_ID_CAD` int(11) DEFAULT NULL,
  PRIMARY KEY (`CLI_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

/*Data for the table `cliente` */

LOCK TABLES `cliente` WRITE;

insert  into `cliente`(`CLI_ID`,`CLI_CODIGO`,`CLI_COD_PESSOA`,`CLI_PESSOA`,`CLI_COMPRADOR`,`CLI_EMPREGO`,`CLI_RENDA`,`CLI_LIMITE`,`CLI_TEL_CONFIRMACAO1`,`CLI_CONTATO1`,`CLI_TEL_CONFIRMACAO2`,`CLI_CONTATO2`,`CLI_TEL_CONFIRMACAO3`,`CLI_CONTATO3`,`CLI_OBSERVACAO`,`CLI_DATA_CADASTRO`,`CLI_HORA_CADASTRO`,`CLI_SESSION_CAD`,`CLI_IP_CADASTRO`,`CLI_DATA_ALTTERACAO`,`CLI_HORA_ALTERACAO`,`CLI_SESSION_ALTER`,`CLI_IP_ALTERACAO`,`CLI_ID_ALTER`,`CLI_ID_CAD`) values (7,1,7,'pf','giovana','motorista','2000','500',36244845,'danilo',70,'80',90,'00','00123\r\n','2017-04-19','01:31:01','qom442p0sqc0duohfd04uibb57','::1','2017-06-19','04:48:48','e2engo3puda0fcoj3id10e03o2','::1',2,2),(8,2,3,'pj','0','9','8','7',6,'5',4,'3',2,'1','321','2017-04-19','01:32:54','qom442p0sqc0duohfd04uibb57','::1','2017-04-19','01:32:54','qom442p0sqc0duohfd04uibb57','::1',2,2),(9,3,4,'pj','4','4','44','4',44,'4',44,'44',44,'4','4','2017-04-19','01:33:55','qom442p0sqc0duohfd04uibb57','::1','2017-04-19','01:33:55','qom442p0sqc0duohfd04uibb57','::1',2,2),(10,4,3,'pj','Roberto Soares','Pedreiro','2500','750',1436215878,'Gustavo',1436264578,'Bruno',1436227854,'Maria','Primeira compra','2017-06-27','06:46:25','mrio5jtfb9ujbsgafkuln0c785','::1','2017-06-27','06:46:25','mrio5jtfb9ujbsgafkuln0c785','::1',2,2);

UNLOCK TABLES;

/*Table structure for table `contap` */

DROP TABLE IF EXISTS `contap`;

CREATE TABLE `contap` (
  `CAP_ID` int(11) NOT NULL AUTO_INCREMENT,
  `CAP_CODIGO` int(11) DEFAULT NULL,
  `CAP_DESCRICAO` varchar(100) DEFAULT NULL,
  `CAP_CREDOR` varchar(100) DEFAULT NULL,
  `CAP_DOCUMENTO` varchar(50) DEFAULT NULL,
  `CAP_DT_VEN` date DEFAULT NULL,
  `CAP_VALOR` decimal(10,2) DEFAULT NULL,
  `CAP_N_P` int(11) DEFAULT NULL,
  `CAP_T_P` int(11) DEFAULT NULL,
  `CAP_VL_PAGO` decimal(10,2) DEFAULT NULL,
  `CAP_PAGO` varchar(20) DEFAULT NULL,
  `CAP_DT_PAGO` date DEFAULT NULL,
  `CAP_OBSERVACAO` text,
  `CAP_DATA_CADASTRO` date DEFAULT NULL,
  `CAP_HORA_CADASTRO` time DEFAULT NULL,
  `CAP_SESSION_CAD` varchar(50) DEFAULT NULL,
  `CAP_IP_CADASTRO` varchar(50) DEFAULT NULL,
  `CAP_DATA_ALTTERACAO` date DEFAULT NULL,
  `CAP_HORA_ALTERACAO` time DEFAULT NULL,
  `CAP_SESSION_ALTER` varchar(50) DEFAULT NULL,
  `CAP_IP_ALTERACAO` varchar(50) DEFAULT NULL,
  `CAP_ID_ALTER` int(11) DEFAULT NULL,
  `CAP_ID_CAD` int(11) DEFAULT NULL,
  PRIMARY KEY (`CAP_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=latin1;

/*Data for the table `contap` */

LOCK TABLES `contap` WRITE;

insert  into `contap`(`CAP_ID`,`CAP_CODIGO`,`CAP_DESCRICAO`,`CAP_CREDOR`,`CAP_DOCUMENTO`,`CAP_DT_VEN`,`CAP_VALOR`,`CAP_N_P`,`CAP_T_P`,`CAP_VL_PAGO`,`CAP_PAGO`,`CAP_DT_PAGO`,`CAP_OBSERVACAO`,`CAP_DATA_CADASTRO`,`CAP_HORA_CADASTRO`,`CAP_SESSION_CAD`,`CAP_IP_CADASTRO`,`CAP_DATA_ALTTERACAO`,`CAP_HORA_ALTERACAO`,`CAP_SESSION_ALTER`,`CAP_IP_ALTERACAO`,`CAP_ID_ALTER`,`CAP_ID_CAD`) values (14,2,'luz','CPFL','01.0000/0001-00','2017-06-24','500.00',1,1,'500.00','SIM','2017-06-24','TESTE1','2017-06-24','05:27:16','ci9qk36t0e3naqpunv8qc43jn2','::1','2017-06-24','05:37:20','ci9qk36t0e3naqpunv8qc43jn2','::1',2,2),(15,3,'CHOCOLATE','NESTLE','02000/0001-02','2017-07-24','500.00',1,5,'500.00','SIM','2017-06-15','TESTSE','2017-06-24','05:28:24','ci9qk36t0e3naqpunv8qc43jn2','::1','2017-06-24','05:38:18','ci9qk36t0e3naqpunv8qc43jn2','::1',2,2),(16,3,'CHOCOLATE','NESTLE','02000/0001-02','2017-08-24','500.00',2,5,'500.00','sim','2017-06-08','','2017-06-24','05:28:24','ci9qk36t0e3naqpunv8qc43jn2','::1','2017-06-24','05:54:22','ci9qk36t0e3naqpunv8qc43jn2','::1',2,2),(17,3,'CHOCOLATE','NESTLE','02000/0001-02','2017-09-24','500.00',3,5,NULL,'NÃƒO',NULL,'','2017-06-24','05:28:24','ci9qk36t0e3naqpunv8qc43jn2','::1','2017-06-24','05:28:24','ci9qk36t0e3naqpunv8qc43jn2','::1',2,2),(18,3,'CHOCOLATE','NESTLE','02000/0001-02','2017-10-24','500.00',4,5,NULL,'NÃƒO',NULL,'','2017-06-24','05:28:24','ci9qk36t0e3naqpunv8qc43jn2','::1','2017-06-24','05:28:24','ci9qk36t0e3naqpunv8qc43jn2','::1',2,2),(19,3,'CHOCOLATE','NESTLE','02000/0001-02','2017-11-24','500.00',5,5,NULL,'NÃƒO',NULL,'','2017-06-24','05:28:24','ci9qk36t0e3naqpunv8qc43jn2','::1','2017-06-24','05:28:24','ci9qk36t0e3naqpunv8qc43jn2','::1',2,2),(20,4,'ASDF','ASDF','AFSD','2017-06-07','1235.00',1,1,NULL,'NÃƒO',NULL,'FDSA','2017-06-24','05:30:22','ci9qk36t0e3naqpunv8qc43jn2','::1','2017-06-24','05:30:22','ci9qk36t0e3naqpunv8qc43jn2','::1',2,2);

UNLOCK TABLES;

/*Table structure for table `controle_de_acesso` */

DROP TABLE IF EXISTS `controle_de_acesso`;

CREATE TABLE `controle_de_acesso` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `usuario` varchar(20) DEFAULT NULL,
  `senha` varchar(20) DEFAULT NULL,
  `codigo_funcionario` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `controle_de_acesso` */

LOCK TABLES `controle_de_acesso` WRITE;

insert  into `controle_de_acesso`(`id`,`usuario`,`senha`,`codigo_funcionario`) values (1,'xand','1',8);

UNLOCK TABLES;

/*Table structure for table `entradamc` */

DROP TABLE IF EXISTS `entradamc`;

CREATE TABLE `entradamc` (
  `MCA_ID` int(11) NOT NULL AUTO_INCREMENT,
  `MCA_CODIGO` int(11) DEFAULT NULL,
  `MCA_NOTA` varchar(100) DEFAULT NULL,
  `MCA_COD_PESSOA` varchar(100) DEFAULT NULL,
  `MCA_PEDIDO` varchar(50) DEFAULT NULL,
  `MCA_RECEBIDO` int(11) DEFAULT NULL,
  `MCA_CONT_FISCO` varchar(200) DEFAULT NULL,
  `MCA_SERIE` varchar(50) DEFAULT NULL,
  `MCA_PAGINA` varchar(50) DEFAULT NULL,
  `MCA_NAT_OP` varchar(100) DEFAULT NULL,
  `MCA_CH_NFE` varchar(200) DEFAULT NULL,
  `MCA_DT_EMISSAO` date DEFAULT NULL,
  `MCA_DT_SAIDA` date DEFAULT NULL,
  `MCA_HR_SAIDA` time DEFAULT NULL,
  `MCA_OBSERVACAO` text,
  `MCA_DATA_CADASTRO` date DEFAULT NULL,
  `MCA_HORA_CADASTRO` time DEFAULT NULL,
  `MCA_SESSION_CAD` varchar(50) DEFAULT NULL,
  `MCA_IP_CADASTRO` varchar(50) DEFAULT NULL,
  `MCA_DATA_ALTTERACAO` date DEFAULT NULL,
  `MCA_HORA_ALTERACAO` time DEFAULT NULL,
  `MCA_SESSION_ALTER` varchar(50) DEFAULT NULL,
  `MCA_IP_ALTERACAO` varchar(50) DEFAULT NULL,
  `MCA_ID_ALTER` int(11) DEFAULT NULL,
  `MCA_ID_CAD` int(11) DEFAULT NULL,
  `MCA_IMAGEM` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`MCA_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

/*Data for the table `entradamc` */

LOCK TABLES `entradamc` WRITE;

insert  into `entradamc`(`MCA_ID`,`MCA_CODIGO`,`MCA_NOTA`,`MCA_COD_PESSOA`,`MCA_PEDIDO`,`MCA_RECEBIDO`,`MCA_CONT_FISCO`,`MCA_SERIE`,`MCA_PAGINA`,`MCA_NAT_OP`,`MCA_CH_NFE`,`MCA_DT_EMISSAO`,`MCA_DT_SAIDA`,`MCA_HR_SAIDA`,`MCA_OBSERVACAO`,`MCA_DATA_CADASTRO`,`MCA_HORA_CADASTRO`,`MCA_SESSION_CAD`,`MCA_IP_CADASTRO`,`MCA_DATA_ALTTERACAO`,`MCA_HORA_ALTERACAO`,`MCA_SESSION_ALTER`,`MCA_IP_ALTERACAO`,`MCA_ID_ALTER`,`MCA_ID_CAD`,`MCA_IMAGEM`) values (12,3,'00150','3','6548',2,'7898498789449878','1','1','Venda de Mercadoria','919849848549884981984651984984151984','2017-06-02','2017-07-03','12:00:00','Recebido\r\n','2017-06-09','11:00:24','kk34qlpcab5p5fj444dvpn13o2','::1','2017-06-27','09:20:46','p9vc181q6vb702t74ksbfa9rp7','::1',2,2,'Nfe.png'),(13,4,'789','2','456',2,'123','789','456','aaaaaaaa','vvvvvvv','2017-06-16','2017-06-15','05:05:00','aleluia\r\n\r\n','2017-06-09','11:01:44','kk34qlpcab5p5fj444dvpn13o2','::1','2017-06-10','12:13:55','2e1aekc0jkro808t24ni1ldpg3','::1',2,2,'Chrysanthemum.jpg');

UNLOCK TABLES;

/*Table structure for table `entradapa` */

DROP TABLE IF EXISTS `entradapa`;

CREATE TABLE `entradapa` (
  `EPA_ID` int(11) NOT NULL AUTO_INCREMENT,
  `EPA_CODIGO` int(11) DEFAULT NULL,
  `EPA_NOTA` varchar(100) DEFAULT NULL,
  `EPA_COD_PESSOA` varchar(100) DEFAULT NULL,
  `EPA_PEDIDO` varchar(50) DEFAULT NULL,
  `EPA_RECEBIDO` int(11) DEFAULT NULL,
  `EPA_CONT_FISCO` varchar(200) DEFAULT NULL,
  `EPA_SERIE` varchar(50) DEFAULT NULL,
  `EPA_PAGINA` varchar(50) DEFAULT NULL,
  `EPA_NAT_OP` varchar(100) DEFAULT NULL,
  `EPA_CH_NFE` varchar(200) DEFAULT NULL,
  `EPA_DT_EMISSAO` date DEFAULT NULL,
  `EPA_DT_SAIDA` date DEFAULT NULL,
  `EPA_HR_SAIDA` time DEFAULT NULL,
  `EPA_OBSERVACAO` text,
  `EPA_DATA_CADASTRO` date DEFAULT NULL,
  `EPA_HORA_CADASTRO` time DEFAULT NULL,
  `EPA_SESSION_CAD` varchar(50) DEFAULT NULL,
  `EPA_IP_CADASTRO` varchar(50) DEFAULT NULL,
  `EPA_DATA_ALTTERACAO` date DEFAULT NULL,
  `EPA_HORA_ALTERACAO` time DEFAULT NULL,
  `EPA_SESSION_ALTER` varchar(50) DEFAULT NULL,
  `EPA_IP_ALTERACAO` varchar(50) DEFAULT NULL,
  `EPA_ID_ALTER` int(11) DEFAULT NULL,
  `EPA_ID_CAD` int(11) DEFAULT NULL,
  `EPA_IMAGEM` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`EPA_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=latin1;

/*Data for the table `entradapa` */

LOCK TABLES `entradapa` WRITE;

insert  into `entradapa`(`EPA_ID`,`EPA_CODIGO`,`EPA_NOTA`,`EPA_COD_PESSOA`,`EPA_PEDIDO`,`EPA_RECEBIDO`,`EPA_CONT_FISCO`,`EPA_SERIE`,`EPA_PAGINA`,`EPA_NAT_OP`,`EPA_CH_NFE`,`EPA_DT_EMISSAO`,`EPA_DT_SAIDA`,`EPA_HR_SAIDA`,`EPA_OBSERVACAO`,`EPA_DATA_CADASTRO`,`EPA_HORA_CADASTRO`,`EPA_SESSION_CAD`,`EPA_IP_CADASTRO`,`EPA_DATA_ALTTERACAO`,`EPA_HORA_ALTERACAO`,`EPA_SESSION_ALTER`,`EPA_IP_ALTERACAO`,`EPA_ID_ALTER`,`EPA_ID_CAD`,`EPA_IMAGEM`) values (15,1,'123','2','123',2,'456','456','456','AE FDP','456','2017-06-21','2017-06-08','05:05:00','9999\r\n','2017-12-05','08:33:31','dra0tu2s1sspc90efb0qaj1s00','::1','2017-06-09','10:14:19','kk34qlpcab5p5fj444dvpn13o2','::1',2,2,NULL),(17,2,'789','3','456',3,'123','456','789','SFAD','dfsa','2017-06-08','2017-06-21','05:55:00','','2017-06-09','11:12:30','kk34qlpcab5p5fj444dvpn13o2','::1','2017-06-09','11:12:30','kk34qlpcab5p5fj444dvpn13o2','::1',2,2,NULL),(18,3,'24456','2','456',2,'456','23','456','FDSAF','fdsaf','2017-06-14','2017-06-22','22:05:00','','2017-06-09','12:35:14','kk34qlpcab5p5fj444dvpn13o2','::1','2017-06-09','12:35:14','kk34qlpcab5p5fj444dvpn13o2','::1',2,2,NULL),(19,4,'2314','2','1243',3,'1234','1234','4321','rewq','fsa','2017-06-22','2017-06-29','04:04:00','','2017-06-09','08:14:26','kk34qlpcab5p5fj444dvpn13o2','::1','2017-06-09','08:14:26','kk34qlpcab5p5fj444dvpn13o2','::1',2,2,'empresa.jpg'),(20,5,'4546','2','4546',2,'456','456','45','FSDAD','FDSA','2017-06-22','2017-06-22','05:05:00','','2017-06-09','08:15:56','kk34qlpcab5p5fj444dvpn13o2','::1','2017-06-09','09:06:21','kk34qlpcab5p5fj444dvpn13o2','::1',2,2,'Jellyfish.jpg');

UNLOCK TABLES;

/*Table structure for table `fornecedor` */

DROP TABLE IF EXISTS `fornecedor`;

CREATE TABLE `fornecedor` (
  `FOR_ID` int(11) NOT NULL AUTO_INCREMENT,
  `FOR_CODIGO` int(11) DEFAULT NULL,
  `FOR_PESSOA` varchar(10) DEFAULT NULL,
  `FOR_COD_PESSOA` varchar(100) DEFAULT NULL,
  `FOR_VENDEDOR` varchar(50) DEFAULT NULL,
  `FOR_VENCIMENTO` date DEFAULT NULL,
  `FOR_LIMITE` decimal(10,2) DEFAULT NULL,
  `FOR_GERENTE` varchar(50) DEFAULT NULL,
  `FOR_OBSERVACAO` text,
  `FOR_DATA_CADASTRO` date DEFAULT NULL,
  `FOR_HORA_CADASTRO` time DEFAULT NULL,
  `FOR_SESSION_CAD` varchar(50) DEFAULT NULL,
  `FOR_IP_CADASTRO` varchar(50) DEFAULT NULL,
  `FOR_DATA_ALTTERACAO` date DEFAULT NULL,
  `FOR_HORA_ALTERACAO` time DEFAULT NULL,
  `FOR_SESSION_ALTER` varchar(50) DEFAULT NULL,
  `FOR_IP_ALTERACAO` varchar(50) DEFAULT NULL,
  `FOR_ID_ALTER` int(11) DEFAULT NULL,
  `FOR_ID_CAD` int(11) DEFAULT NULL,
  PRIMARY KEY (`FOR_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

/*Data for the table `fornecedor` */

LOCK TABLES `fornecedor` WRITE;

insert  into `fornecedor`(`FOR_ID`,`FOR_CODIGO`,`FOR_PESSOA`,`FOR_COD_PESSOA`,`FOR_VENDEDOR`,`FOR_VENCIMENTO`,`FOR_LIMITE`,`FOR_GERENTE`,`FOR_OBSERVACAO`,`FOR_DATA_CADASTRO`,`FOR_HORA_CADASTRO`,`FOR_SESSION_CAD`,`FOR_IP_CADASTRO`,`FOR_DATA_ALTTERACAO`,`FOR_HORA_ALTERACAO`,`FOR_SESSION_ALTER`,`FOR_IP_ALTERACAO`,`FOR_ID_ALTER`,`FOR_ID_CAD`) values (10,1,'pf','8','fasdf','2017-05-26','1000.00','asdf','','2017-05-25','06:02:32','gure09lppavd07m9rgpi6h6a37','::1','2017-05-30','02:48:28','okgua3rk589e7lbsca7t8odfv7','::1',2,2),(12,2,'pj','4','sfsadf','2017-05-19','3543.00','rqwer','','2017-05-30','06:04:16','okgua3rk589e7lbsca7t8odfv7','::1','2017-05-30','06:04:16','okgua3rk589e7lbsca7t8odfv7','::1',2,2),(13,3,'pf','8','fadsf','2017-06-23','3254.00','fasdf','','2017-06-06','06:51:46','hb3eampjh5lvl8b8jsd51qm383','::1','2017-06-06','06:51:46','hb3eampjh5lvl8b8jsd51qm383','::1',2,2),(14,4,'pf','7','fsdfsad','2017-06-06','4232.00','asdfas','','2017-06-06','06:52:34','hb3eampjh5lvl8b8jsd51qm383','::1','2017-06-06','06:52:34','hb3eampjh5lvl8b8jsd51qm383','::1',2,2);

UNLOCK TABLES;

/*Table structure for table `funcinario` */

DROP TABLE IF EXISTS `funcinario`;

CREATE TABLE `funcinario` (
  `FUN_ID` int(11) NOT NULL AUTO_INCREMENT,
  `FUN_CODIGO` int(11) DEFAULT NULL,
  `FUN_COD_PEF` int(11) DEFAULT NULL,
  `FUN_SITUACAO` varchar(5) DEFAULT NULL,
  `FUN_SETOR` varchar(30) DEFAULT NULL,
  `FUN_CARGO` varchar(30) DEFAULT NULL,
  `FUN_FUNCAO` varchar(100) DEFAULT NULL,
  `FUN_CARTEIRA_TRAB` varchar(50) DEFAULT NULL,
  `FUN_SERIE_CT` varchar(50) DEFAULT NULL,
  `FUN_FGTS` varchar(50) DEFAULT NULL,
  `FUN_PIS` varchar(50) DEFAULT NULL,
  `FUN_CBO` varchar(50) DEFAULT NULL,
  `FUN_DESC_CBO` varchar(100) DEFAULT NULL,
  `FUN_CNH` varchar(50) DEFAULT NULL,
  `FUN_CNH_VENC` date DEFAULT NULL,
  `FUN_CATEGORIA` varchar(50) DEFAULT NULL,
  `FUN_TITULO_ELEITOR` varchar(50) DEFAULT NULL,
  `FUN_ZONA` varchar(50) DEFAULT NULL,
  `FUN_SECAO` varchar(50) DEFAULT NULL,
  `FUN_CONJUGE` varchar(100) DEFAULT NULL,
  `FUN_CERT_CASAMENTO` varchar(100) DEFAULT NULL,
  `FUN_FILHOS` varchar(20) DEFAULT NULL,
  `FUN_EXAME_MEDICO` date DEFAULT NULL,
  `FUN_PROX_EXAME_MED` date DEFAULT NULL,
  `FUN_EXAME_AUDIOMETRIA` date DEFAULT NULL,
  `FUN_PROX_EXAME_AUD` date DEFAULT NULL,
  `FUN_EXAME_EPI` date DEFAULT NULL,
  `FUN_REVOGACAO` date DEFAULT NULL,
  `FUN_EXAME_ADMICAO` date DEFAULT NULL,
  `FUN_VENC1_EXP` date DEFAULT NULL,
  `FUN_VENC2_EXP` date DEFAULT NULL,
  `FUN_SALARIO_CARTEIRA` varchar(50) DEFAULT NULL,
  `FUN_COMISSAO` varchar(50) DEFAULT NULL,
  `FUN_VALOR_HORA` varchar(50) DEFAULT NULL,
  `FUN_SALARIO_FAMILIA` varchar(50) DEFAULT NULL,
  `FUN_COMP_SAL` varchar(50) DEFAULT NULL,
  `FUN_BASE_FERIAS` varchar(50) DEFAULT NULL,
  `FUN_BASE_13` varchar(50) DEFAULT NULL,
  `FUN_ESCOLARIDADE` varchar(100) DEFAULT NULL,
  `FUN_ENTRADA` time DEFAULT NULL,
  `FUN_ALMOCO` time DEFAULT NULL,
  `FUN_ALMOCO_VOLT` time DEFAULT NULL,
  `FUN_SAIDA` time DEFAULT NULL,
  `FUN_CARG_HOR_DIA` varchar(50) DEFAULT NULL,
  `FUN_CARG_HOR_SEM` varchar(50) DEFAULT NULL,
  `FUN_DIA_REPOUSO` varchar(50) DEFAULT NULL,
  `FUN_HOR_VAG` varchar(50) DEFAULT NULL,
  `FUN_SENHA_CAT` varchar(50) DEFAULT NULL,
  `FUN_APOSENTADO` varchar(5) DEFAULT NULL,
  `FUN_DEFICIENTE` varchar(5) DEFAULT NULL,
  `FUN_DEFICIENTE_DESC` varchar(50) DEFAULT NULL,
  `FUN_N_CAMISA` varchar(50) DEFAULT NULL,
  `FUN_N_CALCA` varchar(50) DEFAULT NULL,
  `FUN_N_CALCADO` varchar(50) DEFAULT NULL,
  `FUN_DATA_AVISO` date DEFAULT NULL,
  `FUN_DATA_DEM` date DEFAULT NULL,
  `FUN_RAZAO` varchar(50) DEFAULT NULL,
  `FUN_OBSERVACAO` text,
  `FUN_DATA_CADASTRO` date DEFAULT NULL,
  `FUN_HORA_CADASTRO` time DEFAULT NULL,
  `FUN_SESSION_CAD` varchar(50) DEFAULT NULL,
  `FUN_IP_CADASTRO` varchar(50) DEFAULT NULL,
  `FUN_DATA_ALTTERACAO` date DEFAULT NULL,
  `FUN_HORA_ALTERACAO` time DEFAULT NULL,
  `FUN_SESSION_ALTER` varchar(50) DEFAULT NULL,
  `FUN_IP_ALTERACAO` varchar(50) DEFAULT NULL,
  `FUN_ID_ALTER` int(11) DEFAULT NULL,
  `FUN_ID_CAD` int(11) DEFAULT NULL,
  `FUN_USUARIO` varchar(50) DEFAULT NULL,
  `FUN_SENHA` varchar(50) DEFAULT NULL,
  `FUN_NIVEL` varchar(5) DEFAULT NULL,
  PRIMARY KEY (`FUN_ID`),
  KEY `FK_funcinario_pef` (`FUN_CODIGO`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

/*Data for the table `funcinario` */

LOCK TABLES `funcinario` WRITE;

insert  into `funcinario`(`FUN_ID`,`FUN_CODIGO`,`FUN_COD_PEF`,`FUN_SITUACAO`,`FUN_SETOR`,`FUN_CARGO`,`FUN_FUNCAO`,`FUN_CARTEIRA_TRAB`,`FUN_SERIE_CT`,`FUN_FGTS`,`FUN_PIS`,`FUN_CBO`,`FUN_DESC_CBO`,`FUN_CNH`,`FUN_CNH_VENC`,`FUN_CATEGORIA`,`FUN_TITULO_ELEITOR`,`FUN_ZONA`,`FUN_SECAO`,`FUN_CONJUGE`,`FUN_CERT_CASAMENTO`,`FUN_FILHOS`,`FUN_EXAME_MEDICO`,`FUN_PROX_EXAME_MED`,`FUN_EXAME_AUDIOMETRIA`,`FUN_PROX_EXAME_AUD`,`FUN_EXAME_EPI`,`FUN_REVOGACAO`,`FUN_EXAME_ADMICAO`,`FUN_VENC1_EXP`,`FUN_VENC2_EXP`,`FUN_SALARIO_CARTEIRA`,`FUN_COMISSAO`,`FUN_VALOR_HORA`,`FUN_SALARIO_FAMILIA`,`FUN_COMP_SAL`,`FUN_BASE_FERIAS`,`FUN_BASE_13`,`FUN_ESCOLARIDADE`,`FUN_ENTRADA`,`FUN_ALMOCO`,`FUN_ALMOCO_VOLT`,`FUN_SAIDA`,`FUN_CARG_HOR_DIA`,`FUN_CARG_HOR_SEM`,`FUN_DIA_REPOUSO`,`FUN_HOR_VAG`,`FUN_SENHA_CAT`,`FUN_APOSENTADO`,`FUN_DEFICIENTE`,`FUN_DEFICIENTE_DESC`,`FUN_N_CAMISA`,`FUN_N_CALCA`,`FUN_N_CALCADO`,`FUN_DATA_AVISO`,`FUN_DATA_DEM`,`FUN_RAZAO`,`FUN_OBSERVACAO`,`FUN_DATA_CADASTRO`,`FUN_HORA_CADASTRO`,`FUN_SESSION_CAD`,`FUN_IP_CADASTRO`,`FUN_DATA_ALTTERACAO`,`FUN_HORA_ALTERACAO`,`FUN_SESSION_ALTER`,`FUN_IP_ALTERACAO`,`FUN_ID_ALTER`,`FUN_ID_CAD`,`FUN_USUARIO`,`FUN_SENHA`,`FUN_NIVEL`) values (3,2,8,'2','teste','teste','teste','2343243','2342sp','teste','666666','234234','teste','','0000-00-00','','','','','','','','0000-00-00','0000-00-00','0000-00-00','0000-00-00','0000-00-00','0000-00-00','0000-00-00','0000-00-00','0000-00-00','2234234','','','','','','','','00:00:00','00:00:00','00:00:00','00:00:00','','','Segunda-feira','','','2','1','','','','','0000-00-00','0000-00-00','','teste','2016-11-08','04:42:07','hidh0fu49qd6si455o7dor5rj1','::1','2017-04-17','12:33:03','han63lms8is735fig64gb330h1','::1',2,2,'xand','1','1'),(4,3,9,'1','dsfad','asdf','asdfsa','352234','etwet','','2345','2354','','','0000-00-00','','','','','','','','0000-00-00',NULL,'0000-00-00',NULL,'0000-00-00',NULL,'0000-00-00','0000-00-00',NULL,'2345','','','','','','','','00:00:00','00:00:00','00:00:00','00:00:00','','','DomÃ­ngo','','','2','2','','','','',NULL,NULL,NULL,'','2016-11-08','04:46:41','hidh0fu49qd6si455o7dor5rj1','::1','2016-11-08','04:46:41','hidh0fu49qd6si455o7dor5rj1','::1',2,2,'teste','teste','3'),(6,4,7,'1','asdfsd','safdsf','asdfsd','345235','asdfs','','2342','2342423','','','0000-00-00','','','','','','','','0000-00-00',NULL,'0000-00-00',NULL,'0000-00-00',NULL,'0000-00-00','0000-00-00',NULL,'23424','','','','','','','','00:00:00','00:00:00','00:00:00','00:00:00','','','DomÃ­ngo','','','2','2','','','','',NULL,NULL,NULL,'','2017-04-16','12:39:55','df49645g43pig69l6b5kopk1v1','::1','2017-04-16','12:39:55','df49645g43pig69l6b5kopk1v1','::1',2,2,'teste','teste','1'),(7,5,7,'1','sadfsa','asdfa','asdf','1234','1234','','1234','1234','','','0000-00-00','','','','','','','','0000-00-00',NULL,'0000-00-00',NULL,'0000-00-00',NULL,'0000-00-00','0000-00-00',NULL,'1234','','','','','','','','00:00:00','00:00:00','00:00:00','00:00:00','','','DomÃ­ngo','','','2','2','','','','',NULL,NULL,NULL,'','2017-06-27','05:24:32','mrio5jtfb9ujbsgafkuln0c785','::1','2017-06-27','05:24:32','mrio5jtfb9ujbsgafkuln0c785','::1',2,2,'sdfg','dgfs','1'),(8,6,7,'1','123','123','123','123','123','','123','123','','','0000-00-00','','','','','','','','0000-00-00',NULL,'0000-00-00',NULL,'0000-00-00',NULL,'0000-00-00','0000-00-00',NULL,'123','','','','','','','','00:00:00','00:00:00','00:00:00','00:00:00','','','DomÃ­ngo','','','2','2','','','','',NULL,NULL,NULL,'','2017-06-27','06:17:03','mrio5jtfb9ujbsgafkuln0c785','::1','2017-06-27','06:17:03','mrio5jtfb9ujbsgafkuln0c785','::1',2,2,'132','456','1');

UNLOCK TABLES;

/*Table structure for table `itensmc` */

DROP TABLE IF EXISTS `itensmc`;

CREATE TABLE `itensmc` (
  `IMC_ID` int(11) NOT NULL AUTO_INCREMENT,
  `IMC_ENTRADAPA` int(11) DEFAULT NULL,
  `IMC_PRODUTO` int(11) DEFAULT NULL,
  `IMC_QUANTIDADE` decimal(10,2) DEFAULT NULL,
  `IMC_PRECOUN` decimal(10,2) DEFAULT NULL,
  `IMC_UN` varchar(10) DEFAULT NULL,
  `IMC_CST` varchar(200) DEFAULT NULL,
  `IMC_CFOP` varchar(50) DEFAULT NULL,
  `IMC_NCMSH` varchar(50) DEFAULT NULL,
  `IMC_SITUACAO` varchar(100) DEFAULT NULL,
  `IMC_OBSERVACAO` text,
  `IMC_DATA_CADASTRO` date DEFAULT NULL,
  `IMC_HORA_CADASTRO` time DEFAULT NULL,
  `IMC_SESSION_CAD` varchar(50) DEFAULT NULL,
  `IMC_IP_CADASTRO` varchar(50) DEFAULT NULL,
  `IMC_DATA_ALTTERACAO` date DEFAULT NULL,
  `IMC_HORA_ALTERACAO` time DEFAULT NULL,
  `IMC_SESSION_ALTER` varchar(50) DEFAULT NULL,
  `IMC_IP_ALTERACAO` varchar(50) DEFAULT NULL,
  `IMC_ID_ALTER` int(11) DEFAULT NULL,
  `IMC_ID_CAD` int(11) DEFAULT NULL,
  PRIMARY KEY (`IMC_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=latin1;

/*Data for the table `itensmc` */

LOCK TABLES `itensmc` WRITE;

insert  into `itensmc`(`IMC_ID`,`IMC_ENTRADAPA`,`IMC_PRODUTO`,`IMC_QUANTIDADE`,`IMC_PRECOUN`,`IMC_UN`,`IMC_CST`,`IMC_CFOP`,`IMC_NCMSH`,`IMC_SITUACAO`,`IMC_OBSERVACAO`,`IMC_DATA_CADASTRO`,`IMC_HORA_CADASTRO`,`IMC_SESSION_CAD`,`IMC_IP_CADASTRO`,`IMC_DATA_ALTTERACAO`,`IMC_HORA_ALTERACAO`,`IMC_SESSION_ALTER`,`IMC_IP_ALTERACAO`,`IMC_ID_ALTER`,`IMC_ID_CAD`) values (16,12,11,'50.00','100.00','a','','','','SIM',NULL,'2017-06-09','11:00:24','kk34qlpcab5p5fj444dvpn13o2','::1','2017-06-09','11:00:24','kk34qlpcab5p5fj444dvpn13o2','::1',2,2),(17,13,11,'5.00','6.00','SS','','','','SIM',NULL,'2017-06-09','11:01:44','kk34qlpcab5p5fj444dvpn13o2','::1','2017-06-09','11:01:44','kk34qlpcab5p5fj444dvpn13o2','::1',2,2),(26,12,12,'100.00','7.00','pt','789','789','789','SIM','','2017-06-09','11:00:24','kk34qlpcab5p5fj444dvpn13o2','::1','2017-06-14','06:12:48','1lv31iarrjtn65pnsj7c3ved63','::1',2,2);

UNLOCK TABLES;

/*Table structure for table `itenspa` */

DROP TABLE IF EXISTS `itenspa`;

CREATE TABLE `itenspa` (
  `IPA_ID` int(11) NOT NULL AUTO_INCREMENT,
  `IPA_ENTRADAPA` int(11) DEFAULT NULL,
  `IPA_PRODUTO` int(11) DEFAULT NULL,
  `IPA_QUANTIDADE` decimal(10,2) DEFAULT NULL,
  `IPA_PRECOUN` decimal(10,2) DEFAULT NULL,
  `IPA_UN` varchar(10) DEFAULT NULL,
  `IPA_CST` varchar(200) DEFAULT NULL,
  `IPA_CFOP` varchar(50) DEFAULT NULL,
  `IPA_NCMSH` varchar(50) DEFAULT NULL,
  `IPA_SITUACAO` varchar(100) DEFAULT NULL,
  `IPA_OBSERVACAO` text,
  `IPA_DATA_CADASTRO` date DEFAULT NULL,
  `IPA_HORA_CADASTRO` time DEFAULT NULL,
  `IPA_SESSION_CAD` varchar(50) DEFAULT NULL,
  `IPA_IP_CADASTRO` varchar(50) DEFAULT NULL,
  `IPA_DATA_ALTTERACAO` date DEFAULT NULL,
  `IPA_HORA_ALTERACAO` time DEFAULT NULL,
  `IPA_SESSION_ALTER` varchar(50) DEFAULT NULL,
  `IPA_IP_ALTERACAO` varchar(50) DEFAULT NULL,
  `IPA_ID_ALTER` int(11) DEFAULT NULL,
  `IPA_ID_CAD` int(11) DEFAULT NULL,
  PRIMARY KEY (`IPA_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=39 DEFAULT CHARSET=latin1;

/*Data for the table `itenspa` */

LOCK TABLES `itenspa` WRITE;

insert  into `itenspa`(`IPA_ID`,`IPA_ENTRADAPA`,`IPA_PRODUTO`,`IPA_QUANTIDADE`,`IPA_PRECOUN`,`IPA_UN`,`IPA_CST`,`IPA_CFOP`,`IPA_NCMSH`,`IPA_SITUACAO`,`IPA_OBSERVACAO`,`IPA_DATA_CADASTRO`,`IPA_HORA_CADASTRO`,`IPA_SESSION_CAD`,`IPA_IP_CADASTRO`,`IPA_DATA_ALTTERACAO`,`IPA_HORA_ALTERACAO`,`IPA_SESSION_ALTER`,`IPA_IP_ALTERACAO`,`IPA_ID_ALTER`,`IPA_ID_CAD`) values (26,15,11,'50.00','5.00','cx','456','456','456','SIM','','2017-06-07','08:33:31','dra0tu2s1sspc90efb0qaj1s00','::1','2017-06-19','01:47:41','e2engo3puda0fcoj3id10e03o2','::1',2,2),(27,15,12,'1.00','1.00','pt','123','123','123','SIM','','2017-06-07','08:33:31','dra0tu2s1sspc90efb0qaj1s00','::1','2017-06-11','01:43:40','59u9oj7c0jkefficqe4q4mvo80','::1',2,2),(30,17,11,'30.00','48.00','ds','','','','SIM',NULL,'2017-06-09','11:12:30','kk34qlpcab5p5fj444dvpn13o2','::1','2017-06-09','11:12:30','kk34qlpcab5p5fj444dvpn13o2','::1',2,2),(31,17,11,'78.00','21.00','sds','','','','SIM',NULL,'2017-06-09','11:12:30','kk34qlpcab5p5fj444dvpn13o2','::1','2017-06-09','11:12:30','kk34qlpcab5p5fj444dvpn13o2','::1',2,2),(32,18,11,'45.00','78.00','fd','','','','SIM',NULL,'2017-06-09','12:35:15','kk34qlpcab5p5fj444dvpn13o2','::1','2017-06-09','12:35:15','kk34qlpcab5p5fj444dvpn13o2','::1',2,2),(33,18,12,'45.00','789.00','fds','','','','SIM',NULL,'2017-06-09','12:35:15','kk34qlpcab5p5fj444dvpn13o2','::1','2017-06-09','12:35:15','kk34qlpcab5p5fj444dvpn13o2','::1',2,2),(34,19,12,'45.00','45.00','as','','','','SIM',NULL,'2017-06-09','08:14:26','kk34qlpcab5p5fj444dvpn13o2','::1','2017-06-09','08:14:26','kk34qlpcab5p5fj444dvpn13o2','::1',2,2),(35,19,11,'300.00','456.00','sd','','','','SIM',NULL,'2017-06-09','08:14:26','kk34qlpcab5p5fj444dvpn13o2','::1','2017-06-19','01:52:54','e2engo3puda0fcoj3id10e03o2','::1',2,2),(36,19,12,'300.00','45.00','fds','','','','SIM',NULL,'2017-06-09','08:14:26','kk34qlpcab5p5fj444dvpn13o2','::1','2017-06-19','01:52:54','e2engo3puda0fcoj3id10e03o2','::1',2,2),(37,20,11,'454.00','456.00','DSFD','','','','SIM',NULL,'2017-06-09','08:15:56','kk34qlpcab5p5fj444dvpn13o2','::1','2017-06-09','08:15:56','kk34qlpcab5p5fj444dvpn13o2','::1',2,2),(38,20,12,'455.00','456.00','FD','','','','SIM',NULL,'2017-06-09','08:15:56','kk34qlpcab5p5fj444dvpn13o2','::1','2017-06-09','08:15:56','kk34qlpcab5p5fj444dvpn13o2','::1',2,2);

UNLOCK TABLES;

/*Table structure for table `pedido` */

DROP TABLE IF EXISTS `pedido`;

CREATE TABLE `pedido` (
  `PED_ID` int(11) NOT NULL AUTO_INCREMENT,
  `PED_CODIGO` int(11) DEFAULT NULL,
  `PED_COD_FUN` int(11) DEFAULT NULL,
  `PED_TIPO` varchar(10) DEFAULT NULL,
  `PED_OBSERVACAO` text,
  `PED_DATA_CADASTRO` date DEFAULT NULL,
  `PED_HORA_CADASTRO` time DEFAULT NULL,
  `PED_SESSION_CAD` varchar(50) DEFAULT NULL,
  `PED_IP_CADASTRO` varchar(50) DEFAULT NULL,
  `PED_DATA_ALTTERACAO` date DEFAULT NULL,
  `PED_HORA_ALTERACAO` time DEFAULT NULL,
  `PED_SESSION_ALTER` varchar(50) DEFAULT NULL,
  `PED_IP_ALTERACAO` varchar(50) DEFAULT NULL,
  `PED_ID_ALTER` int(11) DEFAULT NULL,
  `PED_ID_CAD` int(11) DEFAULT NULL,
  `PED_ATENDIDO` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`PED_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=latin1;

/*Data for the table `pedido` */

LOCK TABLES `pedido` WRITE;

insert  into `pedido`(`PED_ID`,`PED_CODIGO`,`PED_COD_FUN`,`PED_TIPO`,`PED_OBSERVACAO`,`PED_DATA_CADASTRO`,`PED_HORA_CADASTRO`,`PED_SESSION_CAD`,`PED_IP_CADASTRO`,`PED_DATA_ALTTERACAO`,`PED_HORA_ALTERACAO`,`PED_SESSION_ALTER`,`PED_IP_ALTERACAO`,`PED_ID_ALTER`,`PED_ID_CAD`,`PED_ATENDIDO`) values (19,4,3,'sv',NULL,'2017-06-16','06:45:46','5ig5bd2bq5ptib51sukugcjk71','::1','2017-06-16','06:45:46','5ig5bd2bq5ptib51sukugcjk71','::1',2,2,'SIM'),(20,5,2,'P.A.',NULL,'2017-06-16','09:31:36','5ig5bd2bq5ptib51sukugcjk71','::1','2017-06-16','09:31:36','5ig5bd2bq5ptib51sukugcjk71','::1',2,2,'SIM'),(21,6,3,'M.C.',NULL,'2017-06-16','09:33:05','5ig5bd2bq5ptib51sukugcjk71','::1','2017-06-16','09:33:05','5ig5bd2bq5ptib51sukugcjk71','::1',2,2,'SIM'),(22,7,2,'P.A.',NULL,'2017-06-17','03:48:03','fg5ta7ccbci9u9iuatqmv8qon1','::1','2017-06-17','03:48:03','fg5ta7ccbci9u9iuatqmv8qon1','::1',2,2,'SIM'),(23,8,2,'P.A.',NULL,'2017-06-17','04:13:20','fg5ta7ccbci9u9iuatqmv8qon1','::1','2017-06-17','04:13:20','fg5ta7ccbci9u9iuatqmv8qon1','::1',2,2,'SIM');

UNLOCK TABLES;

/*Table structure for table `pedidoitens` */

DROP TABLE IF EXISTS `pedidoitens`;

CREATE TABLE `pedidoitens` (
  `PDI_ID` int(11) NOT NULL AUTO_INCREMENT,
  `PDI_PED_ID` int(11) DEFAULT NULL,
  `PDI_VALOR` decimal(10,2) DEFAULT NULL,
  `PDI_QUANT_TEMP` varchar(100) DEFAULT NULL,
  `PDI_DT_ENT_INI` date DEFAULT NULL,
  `PDI_PROD_DESC` varchar(500) DEFAULT NULL,
  `PDI_FOR_TER` int(11) DEFAULT NULL,
  `PDI_TIPO` varchar(10) DEFAULT NULL,
  `PDI_ATENDIDO` varchar(10) DEFAULT NULL,
  `PDI_OBSERVACAO` text,
  `PDI_DATA_CADASTRO` date DEFAULT NULL,
  `PDI_HORA_CADASTRO` time DEFAULT NULL,
  `PDI_SESSION_CAD` varchar(50) DEFAULT NULL,
  `PDI_IP_CADASTRO` varchar(50) DEFAULT NULL,
  `PDI_DATA_ALTTERACAO` date DEFAULT NULL,
  `PDI_HORA_ALTERACAO` time DEFAULT NULL,
  `PDI_SESSION_ALTER` varchar(50) DEFAULT NULL,
  `PDI_IP_ALTERACAO` varchar(50) DEFAULT NULL,
  `PDI_ID_ALTER` int(11) DEFAULT NULL,
  `PDI_ID_CAD` int(11) DEFAULT NULL,
  PRIMARY KEY (`PDI_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=latin1;

/*Data for the table `pedidoitens` */

LOCK TABLES `pedidoitens` WRITE;

insert  into `pedidoitens`(`PDI_ID`,`PDI_PED_ID`,`PDI_VALOR`,`PDI_QUANT_TEMP`,`PDI_DT_ENT_INI`,`PDI_PROD_DESC`,`PDI_FOR_TER`,`PDI_TIPO`,`PDI_ATENDIDO`,`PDI_OBSERVACAO`,`PDI_DATA_CADASTRO`,`PDI_HORA_CADASTRO`,`PDI_SESSION_CAD`,`PDI_IP_CADASTRO`,`PDI_DATA_ALTTERACAO`,`PDI_HORA_ALTERACAO`,`PDI_SESSION_ALTER`,`PDI_IP_ALTERACAO`,`PDI_ID_ALTER`,`PDI_ID_CAD`) values (19,19,'500.00','UM MES','2017-06-01','SEGURANÃ‡A',3,'sv','SIM',NULL,'2017-06-16','06:45:46','5ig5bd2bq5ptib51sukugcjk71','::1','2017-06-16','06:45:46','5ig5bd2bq5ptib51sukugcjk71','::1',2,2),(20,19,'5000.00','UM ANO','2017-06-01','LIMPEZA',2,'sv','SIM',NULL,'2017-06-16','06:45:46','5ig5bd2bq5ptib51sukugcjk71','::1','2017-06-16','06:45:46','5ig5bd2bq5ptib51sukugcjk71','::1',2,2),(21,20,'456.00','456','2017-06-20','2',2,'P.A.','SIM',NULL,'2017-06-16','09:31:36','5ig5bd2bq5ptib51sukugcjk71','::1','2017-06-16','09:31:36','5ig5bd2bq5ptib51sukugcjk71','::1',2,2),(22,20,'89.00','789','2017-06-20','3',3,'P.A.','SIM',NULL,'2017-06-16','09:31:36','5ig5bd2bq5ptib51sukugcjk71','::1','2017-06-16','09:31:36','5ig5bd2bq5ptib51sukugcjk71','::1',2,2),(23,21,'45.00','5456','2017-06-20','2',2,'M.C.','SIM',NULL,'2017-06-16','09:33:05','5ig5bd2bq5ptib51sukugcjk71','::1','2017-06-16','09:33:05','5ig5bd2bq5ptib51sukugcjk71','::1',2,2),(24,21,'8.00','45','2017-06-20','3',3,'M.C.','SIM',NULL,'2017-06-16','09:33:06','5ig5bd2bq5ptib51sukugcjk71','::1','2017-06-16','09:33:06','5ig5bd2bq5ptib51sukugcjk71','::1',2,2),(25,22,'2.00','22','2017-06-27','2',2,'P.A.','SIM',NULL,'2017-06-17','03:48:03','fg5ta7ccbci9u9iuatqmv8qon1','::1','2017-06-17','03:48:03','fg5ta7ccbci9u9iuatqmv8qon1','::1',2,2),(26,23,'2.00','2','2017-06-12','2',2,'P.A.','SIM',NULL,'2017-06-17','04:13:20','fg5ta7ccbci9u9iuatqmv8qon1','::1','2017-06-17','04:13:20','fg5ta7ccbci9u9iuatqmv8qon1','::1',2,2);

UNLOCK TABLES;

/*Table structure for table `pessoa_fisica` */

DROP TABLE IF EXISTS `pessoa_fisica`;

CREATE TABLE `pessoa_fisica` (
  `PEF_ID` int(11) NOT NULL AUTO_INCREMENT,
  `PEF_CODIGO` int(11) DEFAULT NULL,
  `PEF_SEXO` int(11) DEFAULT NULL,
  `PEF_ESTADO_CIVIL` int(11) DEFAULT NULL,
  `PEF_ID_USUARIO_ALTER` int(11) DEFAULT NULL,
  `PEF_ID_USUARIO` int(11) DEFAULT NULL,
  `PEF_CIDADE` varchar(100) DEFAULT NULL,
  `PEF_ESTADO` varchar(100) DEFAULT NULL,
  `PEF_NATURALIDADE` varchar(100) DEFAULT NULL,
  `PEF_NACIONALIDADE` varchar(100) DEFAULT NULL,
  `PEF_PAIS` varchar(100) DEFAULT NULL,
  `PEF_NOME` varchar(50) DEFAULT NULL,
  `PEF_TELEFONE` varchar(20) DEFAULT NULL,
  `PEF_CELULAR` varchar(20) DEFAULT NULL,
  `PEF_EMAIL` varchar(50) DEFAULT NULL,
  `PEF_CPF` varchar(20) DEFAULT NULL,
  `PEF_RG` varchar(20) DEFAULT NULL,
  `PEF_ORGEX` varchar(20) DEFAULT NULL,
  `PEF_DATA_NASCIMENTO` date DEFAULT NULL,
  `PEF_PAI` varchar(50) DEFAULT NULL,
  `PEF_MAE` varchar(50) DEFAULT NULL,
  `PEF_IMAGEM` varchar(100) DEFAULT NULL,
  `PEF_CEP` varchar(20) DEFAULT NULL,
  `PEF_BAIRRO` varchar(50) DEFAULT NULL,
  `PEF_ENDERECO` varchar(100) DEFAULT NULL,
  `PEF_NUMERO` varchar(9) DEFAULT NULL,
  `PEF_COMPLEMENTO` varchar(50) DEFAULT NULL,
  `PEF_DATA_CADASTRO` date DEFAULT NULL,
  `PEF_HORA_CADASTRO` time DEFAULT NULL,
  `PEF_SESSION` varchar(50) DEFAULT NULL,
  `PEF_IP_CADASTRO` varchar(50) DEFAULT NULL,
  `PEF_DATA_ALTERACAO` date DEFAULT NULL,
  `PEF_HORA_ALTERACAO` time DEFAULT NULL,
  `PEF_DATA_EXPEDICAO` date DEFAULT NULL,
  `PEF_SESSION_ALTER` varchar(50) DEFAULT NULL,
  `PEF_IP_ALTERACAO` varchar(50) DEFAULT NULL,
  `PEF_MOTIVO` text,
  PRIMARY KEY (`PEF_ID`),
  KEY `FK_pessoa_fisica_cidade` (`PEF_CIDADE`),
  KEY `FK_pessoa_fisica_estado` (`PEF_ESTADO`),
  KEY `FK_pessoa_fisica_pais` (`PEF_PAIS`),
  KEY `FK_pessoa_fisica_estado_civil` (`PEF_ESTADO_CIVIL`),
  KEY `FK_pessoa_fisica_sexo` (`PEF_SEXO`),
  CONSTRAINT `FK_pessoa_fisica_estado_civil` FOREIGN KEY (`PEF_ESTADO_CIVIL`) REFERENCES `civil` (`CIV_ID`),
  CONSTRAINT `FK_pessoa_fisica_sexo` FOREIGN KEY (`PEF_SEXO`) REFERENCES `sexo` (`SEX_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=latin1;

/*Data for the table `pessoa_fisica` */

LOCK TABLES `pessoa_fisica` WRITE;

insert  into `pessoa_fisica`(`PEF_ID`,`PEF_CODIGO`,`PEF_SEXO`,`PEF_ESTADO_CIVIL`,`PEF_ID_USUARIO_ALTER`,`PEF_ID_USUARIO`,`PEF_CIDADE`,`PEF_ESTADO`,`PEF_NATURALIDADE`,`PEF_NACIONALIDADE`,`PEF_PAIS`,`PEF_NOME`,`PEF_TELEFONE`,`PEF_CELULAR`,`PEF_EMAIL`,`PEF_CPF`,`PEF_RG`,`PEF_ORGEX`,`PEF_DATA_NASCIMENTO`,`PEF_PAI`,`PEF_MAE`,`PEF_IMAGEM`,`PEF_CEP`,`PEF_BAIRRO`,`PEF_ENDERECO`,`PEF_NUMERO`,`PEF_COMPLEMENTO`,`PEF_DATA_CADASTRO`,`PEF_HORA_CADASTRO`,`PEF_SESSION`,`PEF_IP_CADASTRO`,`PEF_DATA_ALTERACAO`,`PEF_HORA_ALTERACAO`,`PEF_DATA_EXPEDICAO`,`PEF_SESSION_ALTER`,`PEF_IP_ALTERACAO`,`PEF_MOTIVO`) values (14,7,1,1,2,2,'CuiabÃ¡','MT','FASFSD','FDSA','Brasil','JosÃ© Algusto Prado','1436221200','6598784512','xand0702@gmail.com','21917397808','123456789','sspmt','2011-01-21','JoÃ£o LourenÃ§o Prado','Joaquina da silva','','17208520','sÃ£o crispin','JosÃ© Moya','78','q3','2016-05-21','01:57:50','ei483nqqp649e7h491m48h1cr4','::1','2017-06-27','05:03:47','2004-06-08','mrio5jtfb9ujbsgafkuln0c785','::1','gerente de compras'),(15,8,1,1,2,2,'1','7','','1','1','Alexandre Danilo de Almeida','1463245018','234545475675','xand0702@gmail.com','13458397808','345667856786','sspsp','2006-09-21','jose','maria','','14207670','bela vista','Braz priori','23','q2','2016-01-21','02:04:56','ei483nqqp649e7h491m48h1cr4','::1','2017-06-27','04:49:34','2004-01-14','mrio5jtfb9ujbsgafkuln0c785','::1','alteraÃ§Ã£o do adm'),(17,9,2,1,2,2,'1','1','1','1','1','Creuza Silva do Nascimento','1436265548','12456789','creuza@teste.com','03485397808','789456','sspmt','2001-10-25','ajose','maria','','78050887','dom bosco','rua 13','2','q19','2016-10-24','04:07:01','rrmsehbsgjhqeqr8bjvcgr21v4','::1','2017-06-27','04:50:30','2008-10-12','mrio5jtfb9ujbsgafkuln0c785','::1','cad. func.'),(18,10,1,1,2,2,'cuiaba','mato grosso','paulistana','brasileira','brasil','Daniela Garcia','1436217845','45336251478','garcia@gmail.com','23156489778','427851258','sspmt','1987-06-10','jose carcia','maria garcia','','4456789','centro','rua tenete navarro','324','casa2','2016-11-01','08:21:50','fpni6aetr6oa6638an7vpshc56','::1','2017-06-27','04:47:23','2004-06-08','mrio5jtfb9ujbsgafkuln0c785','::1','cadastro vendedora'),(19,11,3,3,2,2,'','','','','','Evandro Garrido','1436224048','','','23123343423','','','0000-00-00','','','','','','','','','2016-11-01','08:24:01','fpni6aetr6oa6638an7vpshc56','::1','2017-06-27','04:47:43','0000-00-00','mrio5jtfb9ujbsgafkuln0c785','::1','cliente\r\n'),(21,12,1,1,2,2,'','','','','','Everaldo Oliveira','1436245025','','','21916349765','65456565','','0000-00-00','','','','','','','','','2017-03-04','03:05:39','vt0chd3q5jkhk56isbgqrkc9g0','::1','2017-06-27','04:51:02','0000-00-00','mrio5jtfb9ujbsgafkuln0c785','::1','');

UNLOCK TABLES;

/*Table structure for table `pessoa_juridica` */

DROP TABLE IF EXISTS `pessoa_juridica`;

CREATE TABLE `pessoa_juridica` (
  `PEJ_ID` int(11) NOT NULL AUTO_INCREMENT,
  `PEJ_CODIGO` int(11) DEFAULT NULL,
  `PEJ_PORTE` int(11) DEFAULT NULL,
  `PEJ_SEGMENTO` int(11) DEFAULT NULL,
  `PEJ_ID_ALTER` int(11) DEFAULT NULL,
  `PEJ_ID_CAD` int(11) DEFAULT NULL,
  `PEJ_TIPO` int(11) DEFAULT NULL,
  `PEJ_RAZAO_SOCIAL` varchar(100) DEFAULT NULL,
  `PEJ_CNPJ` varchar(30) DEFAULT NULL,
  `PEJ_INS_ESTATUAL` varchar(30) DEFAULT NULL,
  `PEJ_NOME_FANTASIA` varchar(100) DEFAULT NULL,
  `PEJ_TELEFONE1` varchar(30) DEFAULT NULL,
  `PEJ_CONTATO1` varchar(50) DEFAULT NULL,
  `PEJ_TELEFONE2` varchar(30) DEFAULT NULL,
  `PEJ_CONTATO2` varchar(50) DEFAULT NULL,
  `PEJ_TELEFONE3` varchar(30) DEFAULT NULL,
  `PEJ_CONTATO3` varchar(50) DEFAULT NULL,
  `PEJ_EMAIL` varchar(50) DEFAULT NULL,
  `PEJ_SITE` varchar(100) DEFAULT NULL,
  `PEJ_DATA_FUNDACAO` date DEFAULT NULL,
  `PEJ_FUNDADOR` varchar(100) DEFAULT NULL,
  `PEJ_PRESIDENTE` varchar(100) DEFAULT NULL,
  `PEJ_ATIVIDADE` varchar(100) DEFAULT NULL,
  `PEJ_IMAGEM` varchar(100) DEFAULT NULL,
  `PEJ_CEP` varchar(20) DEFAULT NULL,
  `PEJ_ENDERECO` varchar(100) DEFAULT NULL,
  `PEJ_NUMERO` varchar(100) DEFAULT NULL,
  `PEJ_COMPLEMENTO` varchar(50) DEFAULT NULL,
  `PEJ_BAIRRO` varchar(100) DEFAULT NULL,
  `PEJ_CIDADE` varchar(100) DEFAULT NULL,
  `PEJ_ESTADO` varchar(100) DEFAULT NULL,
  `PEJ_PAIS` varchar(100) DEFAULT NULL,
  `PEJ_DATA_CADASTRO` date DEFAULT NULL,
  `PEJ_HORA_CADASTRO` time DEFAULT NULL,
  `PEJ_SESSION` varchar(50) DEFAULT NULL,
  `PEJ_IP_CADASTRO` varchar(50) DEFAULT NULL,
  `PEJ_DATA_ALTERACAO` date DEFAULT NULL,
  `PEJ_HORA_ALTERACAO` time DEFAULT NULL,
  `PEJ_SESSION_ALTER` varchar(50) DEFAULT NULL,
  `PEJ_IP_ALTERACAO` varchar(50) DEFAULT NULL,
  `PEJ_MOTIVO` text,
  PRIMARY KEY (`PEJ_ID`),
  KEY `FK_pessoa_juridica_segmento` (`PEJ_SEGMENTO`),
  KEY `FK_pessoa_juridica_cad` (`PEJ_ID_CAD`),
  KEY `FK_pessoa_juridica_alt` (`PEJ_ID_ALTER`),
  KEY `FK_pessoa_juridica_tipo` (`PEJ_TIPO`),
  KEY `FK_pessoa_juridica_porte` (`PEJ_PORTE`),
  CONSTRAINT `FK_pessoa_juridica_porte` FOREIGN KEY (`PEJ_PORTE`) REFERENCES `porte` (`POR_ID`),
  CONSTRAINT `FK_pessoa_juridica_segmento` FOREIGN KEY (`PEJ_SEGMENTO`) REFERENCES `segmento` (`SEG_ID`),
  CONSTRAINT `FK_pessoa_juridica_tipo` FOREIGN KEY (`PEJ_TIPO`) REFERENCES `tipo_emp` (`TIP_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

/*Data for the table `pessoa_juridica` */

LOCK TABLES `pessoa_juridica` WRITE;

insert  into `pessoa_juridica`(`PEJ_ID`,`PEJ_CODIGO`,`PEJ_PORTE`,`PEJ_SEGMENTO`,`PEJ_ID_ALTER`,`PEJ_ID_CAD`,`PEJ_TIPO`,`PEJ_RAZAO_SOCIAL`,`PEJ_CNPJ`,`PEJ_INS_ESTATUAL`,`PEJ_NOME_FANTASIA`,`PEJ_TELEFONE1`,`PEJ_CONTATO1`,`PEJ_TELEFONE2`,`PEJ_CONTATO2`,`PEJ_TELEFONE3`,`PEJ_CONTATO3`,`PEJ_EMAIL`,`PEJ_SITE`,`PEJ_DATA_FUNDACAO`,`PEJ_FUNDADOR`,`PEJ_PRESIDENTE`,`PEJ_ATIVIDADE`,`PEJ_IMAGEM`,`PEJ_CEP`,`PEJ_ENDERECO`,`PEJ_NUMERO`,`PEJ_COMPLEMENTO`,`PEJ_BAIRRO`,`PEJ_CIDADE`,`PEJ_ESTADO`,`PEJ_PAIS`,`PEJ_DATA_CADASTRO`,`PEJ_HORA_CADASTRO`,`PEJ_SESSION`,`PEJ_IP_CADASTRO`,`PEJ_DATA_ALTERACAO`,`PEJ_HORA_ALTERACAO`,`PEJ_SESSION_ALTER`,`PEJ_IP_ALTERACAO`,`PEJ_MOTIVO`) values (3,3,3,4,2,2,1,'ALEXANDRE LTDA','42753000101','456789456','DDDD','1436211200','GUSTAVO','454564','EVANDRO','456','teste','contato@aledan.com.br','TESS','2005-07-27','Alexandre','Luan','6666','','1','2','5','2','6','5','4','5','2016-11-02','06:07:54','7dss7fu42hrh8lr82md0vk1ob3','::1','2017-06-27','09:09:10','p9vc181q6vb702t74ksbfa9rp7','::1','									fornecedor mp									'),(6,4,1,1,2,2,1,'BRUNO','4554','123','','','','','','','','','','0000-00-00','','','','','','','','','','','','','2016-11-04','11:27:32','kpto8hkvoebi9lubd4pll9en20','::1','2016-11-04','11:29:53','kpto8hkvoebi9lubd4pll9en20','::1','TESTE2'),(7,5,1,1,2,2,1,'teste123','6666666','888888','','','','','','','','','','0000-00-00','','','','','','','','','','','','','2017-03-04','03:01:36','vt0chd3q5jkhk56isbgqrkc9g0','::1','2017-03-04','03:40:12','vt0chd3q5jkhk56isbgqrkc9g0','::1','');

UNLOCK TABLES;

/*Table structure for table `porte` */

DROP TABLE IF EXISTS `porte`;

CREATE TABLE `porte` (
  `POR_ID` int(11) NOT NULL AUTO_INCREMENT,
  `POR_NOME` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`POR_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

/*Data for the table `porte` */

LOCK TABLES `porte` WRITE;

insert  into `porte`(`POR_ID`,`POR_NOME`) values (1,'Micro'),(2,'Pequena'),(3,'Média'),(4,'Grande');

UNLOCK TABLES;

/*Table structure for table `produto` */

DROP TABLE IF EXISTS `produto`;

CREATE TABLE `produto` (
  `PRO_ID` int(11) NOT NULL AUTO_INCREMENT,
  `PRO_CODIGO` int(11) DEFAULT NULL,
  `PRO_DESCRICAO` varchar(100) DEFAULT NULL,
  `PRO_AB_DESCRICAO` varchar(100) DEFAULT NULL,
  `PRO_UNIDADE` varchar(50) DEFAULT NULL,
  `PRO_COD_BARRA` int(100) DEFAULT NULL,
  `PRO_EST_MIN` decimal(10,2) DEFAULT NULL,
  `PRO_EST_MAX` decimal(10,2) DEFAULT NULL,
  `PRO_EST_CRIT` decimal(10,2) DEFAULT NULL,
  `PRO_FABRICANTE` varchar(50) DEFAULT NULL,
  `PRO_MARCA` varchar(50) DEFAULT NULL,
  `PRO_MODELO` varchar(50) DEFAULT NULL,
  `PRO_CATEGORIA` varchar(50) DEFAULT NULL,
  `PRO_PESO_BRUTO` decimal(10,2) DEFAULT NULL,
  `PRO_PESO_LIQ` decimal(10,2) DEFAULT NULL,
  `PRO_COMPRIMENTO` decimal(10,2) DEFAULT NULL,
  `PRO_LARGURA` decimal(10,2) DEFAULT NULL,
  `PRO_ALTURA` decimal(10,2) DEFAULT NULL,
  `PRO_GRADE` varchar(50) DEFAULT NULL,
  `PRO_AGRUPAMENTO` varchar(50) DEFAULT NULL,
  `PRO_DIAS_GARANT` int(11) DEFAULT NULL,
  `PRO_SIT_TRIB` varchar(50) DEFAULT NULL,
  `PRO_SUB_TRIB` varchar(50) DEFAULT NULL,
  `PRO_CLASS_TRIB` varchar(50) DEFAULT NULL,
  `PRO_COFINS` decimal(10,2) DEFAULT NULL,
  `PRO_IPI` decimal(10,2) DEFAULT NULL,
  `PRO_ICMS` decimal(10,2) DEFAULT NULL,
  `PRO_IRPJ` decimal(10,2) DEFAULT NULL,
  `PRO_IMAGEM` varchar(50) DEFAULT NULL,
  `PRO_OBSERVACAO` text,
  `PRO_DATA_CADASTRO` date DEFAULT NULL,
  `PRO_HORA_CADASTRO` time DEFAULT NULL,
  `PRO_SESSION_CAD` varchar(50) DEFAULT NULL,
  `PRO_IP_CADASTRO` varchar(50) DEFAULT NULL,
  `PRO_DATA_ALTTERACAO` date DEFAULT NULL,
  `PRO_HORA_ALTERACAO` time DEFAULT NULL,
  `PRO_SESSION_ALTER` varchar(50) DEFAULT NULL,
  `PRO_IP_ALTERACAO` varchar(50) DEFAULT NULL,
  `PRO_ID_ALTER` int(11) DEFAULT NULL,
  `PRO_ID_CAD` int(11) DEFAULT NULL,
  PRIMARY KEY (`PRO_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

/*Data for the table `produto` */

LOCK TABLES `produto` WRITE;

insert  into `produto`(`PRO_ID`,`PRO_CODIGO`,`PRO_DESCRICAO`,`PRO_AB_DESCRICAO`,`PRO_UNIDADE`,`PRO_COD_BARRA`,`PRO_EST_MIN`,`PRO_EST_MAX`,`PRO_EST_CRIT`,`PRO_FABRICANTE`,`PRO_MARCA`,`PRO_MODELO`,`PRO_CATEGORIA`,`PRO_PESO_BRUTO`,`PRO_PESO_LIQ`,`PRO_COMPRIMENTO`,`PRO_LARGURA`,`PRO_ALTURA`,`PRO_GRADE`,`PRO_AGRUPAMENTO`,`PRO_DIAS_GARANT`,`PRO_SIT_TRIB`,`PRO_SUB_TRIB`,`PRO_CLASS_TRIB`,`PRO_COFINS`,`PRO_IPI`,`PRO_ICMS`,`PRO_IRPJ`,`PRO_IMAGEM`,`PRO_OBSERVACAO`,`PRO_DATA_CADASTRO`,`PRO_HORA_CADASTRO`,`PRO_SESSION_CAD`,`PRO_IP_CADASTRO`,`PRO_DATA_ALTTERACAO`,`PRO_HORA_ALTERACAO`,`PRO_SESSION_ALTER`,`PRO_IP_ALTERACAO`,`PRO_ID_ALTER`,`PRO_ID_CAD`) values (11,2,'1','chocolate','cx',4,'5.00','7.00','6.00','nestle','','','','0.00','0.00','0.00','0.00','0.00','','',0,'','','','0.00','8.00','12.00','0.00','Desert.jpg','','2017-04-25','04:54:29','j8k9q69k20s9sfov9dmbq0odh2','::1','2017-06-07','02:35:33','5ssvugbttcrpgvo48ps7vlitf3','::1',2,2),(12,3,'8','bolacha','pt',5,'4.00','2.00','3.00','mabel','','','','0.00','0.00','0.00','0.00','0.00','','',0,'','','','0.00','7.00','15.00','0.00','','','2017-04-25','04:58:53','j8k9q69k20s9sfov9dmbq0odh2','::1','2017-06-07','02:22:16','5ssvugbttcrpgvo48ps7vlitf3','::1',2,2);

UNLOCK TABLES;

/*Table structure for table `saidaitensmc` */

DROP TABLE IF EXISTS `saidaitensmc`;

CREATE TABLE `saidaitensmc` (
  `ISM_ID` int(11) NOT NULL AUTO_INCREMENT,
  `ISM_SAIDAMC` int(11) DEFAULT NULL,
  `ISM_PRODUTO` int(11) DEFAULT NULL,
  `ISM_QUANTIDADE` decimal(10,2) DEFAULT NULL,
  `ISM_OBSERVACAO` text,
  `ISM_DATA_CADASTRO` date DEFAULT NULL,
  `ISM_HORA_CADASTRO` time DEFAULT NULL,
  `ISM_SESSION_CAD` varchar(50) DEFAULT NULL,
  `ISM_IP_CADASTRO` varchar(50) DEFAULT NULL,
  `ISM_DATA_ALTTERACAO` date DEFAULT NULL,
  `ISM_HORA_ALTERACAO` time DEFAULT NULL,
  `ISM_SESSION_ALTER` varchar(50) DEFAULT NULL,
  `ISM_IP_ALTERACAO` varchar(50) DEFAULT NULL,
  `ISM_ID_ALTER` int(11) DEFAULT NULL,
  `ISM_ID_CAD` int(11) DEFAULT NULL,
  PRIMARY KEY (`ISM_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `saidaitensmc` */

LOCK TABLES `saidaitensmc` WRITE;

UNLOCK TABLES;

/*Table structure for table `saidaitenspa` */

DROP TABLE IF EXISTS `saidaitenspa`;

CREATE TABLE `saidaitenspa` (
  `ISP_ID` int(11) NOT NULL AUTO_INCREMENT,
  `ISP_SAIDAPA` int(11) DEFAULT NULL,
  `ISP_PRODUTO` int(11) DEFAULT NULL,
  `ISP_QUANTIDADE` decimal(10,2) DEFAULT NULL,
  `ISP_VL_VENDA` decimal(10,2) DEFAULT NULL,
  `ISP_OBSERVACAO` text,
  `ISP_DATA_CADASTRO` date DEFAULT NULL,
  `ISP_HORA_CADASTRO` time DEFAULT NULL,
  `ISP_SESSION_CAD` varchar(50) DEFAULT NULL,
  `ISP_IP_CADASTRO` varchar(50) DEFAULT NULL,
  `ISP_DATA_ALTTERACAO` date DEFAULT NULL,
  `ISP_HORA_ALTERACAO` time DEFAULT NULL,
  `ISP_SESSION_ALTER` varchar(50) DEFAULT NULL,
  `ISP_IP_ALTERACAO` varchar(50) DEFAULT NULL,
  `ISP_ID_ALTER` int(11) DEFAULT NULL,
  `ISP_ID_CAD` int(11) DEFAULT NULL,
  PRIMARY KEY (`ISP_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

/*Data for the table `saidaitenspa` */

LOCK TABLES `saidaitenspa` WRITE;

insert  into `saidaitenspa`(`ISP_ID`,`ISP_SAIDAPA`,`ISP_PRODUTO`,`ISP_QUANTIDADE`,`ISP_VL_VENDA`,`ISP_OBSERVACAO`,`ISP_DATA_CADASTRO`,`ISP_HORA_CADASTRO`,`ISP_SESSION_CAD`,`ISP_IP_CADASTRO`,`ISP_DATA_ALTTERACAO`,`ISP_HORA_ALTERACAO`,`ISP_SESSION_ALTER`,`ISP_IP_ALTERACAO`,`ISP_ID_ALTER`,`ISP_ID_CAD`) values (7,2,12,'771.00','15.00',NULL,'2017-06-19','01:52:54','e2engo3puda0fcoj3id10e03o2','::1','2017-06-24','12:06:00','ci9qk36t0e3naqpunv8qc43jn2','::1',2,2),(8,2,11,'664.00','10.00',NULL,'2017-06-19','01:52:54','e2engo3puda0fcoj3id10e03o2','::1','2017-06-24','12:06:00','ci9qk36t0e3naqpunv8qc43jn2','::1',2,2);

UNLOCK TABLES;

/*Table structure for table `saidamc` */

DROP TABLE IF EXISTS `saidamc`;

CREATE TABLE `saidamc` (
  `SMC_ID` int(11) NOT NULL AUTO_INCREMENT,
  `SMC_CODIGO` int(11) DEFAULT NULL,
  `SMC_COD_FUN` int(11) DEFAULT NULL,
  `SMC_OBSERVACAO` text,
  `SMC_DATA_CADASTRO` date DEFAULT NULL,
  `SMC_HORA_CADASTRO` time DEFAULT NULL,
  `SMC_SESSION_CAD` varchar(50) DEFAULT NULL,
  `SMC_IP_CADASTRO` varchar(50) DEFAULT NULL,
  `SMC_DATA_ALTTERACAO` date DEFAULT NULL,
  `SMC_HORA_ALTERACAO` time DEFAULT NULL,
  `SMC_SESSION_ALTER` varchar(50) DEFAULT NULL,
  `SMC_IP_ALTERACAO` varchar(50) DEFAULT NULL,
  `SMC_ID_ALTER` int(11) DEFAULT NULL,
  `SMC_ID_CAD` int(11) DEFAULT NULL,
  PRIMARY KEY (`SMC_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `saidamc` */

LOCK TABLES `saidamc` WRITE;

UNLOCK TABLES;

/*Table structure for table `saidapa` */

DROP TABLE IF EXISTS `saidapa`;

CREATE TABLE `saidapa` (
  `SPA_ID` int(11) NOT NULL AUTO_INCREMENT,
  `SPA_CODIGO` int(11) DEFAULT NULL,
  `SPA_COD_FUN` int(11) DEFAULT NULL,
  `SPA_OBSERVACAO` text,
  `SPA_DATA_CADASTRO` date DEFAULT NULL,
  `SPA_HORA_CADASTRO` time DEFAULT NULL,
  `SPA_SESSION_CAD` varchar(50) DEFAULT NULL,
  `SPA_IP_CADASTRO` varchar(50) DEFAULT NULL,
  `SPA_DATA_ALTTERACAO` date DEFAULT NULL,
  `SPA_HORA_ALTERACAO` time DEFAULT NULL,
  `SPA_SESSION_ALTER` varchar(50) DEFAULT NULL,
  `SPA_IP_ALTERACAO` varchar(50) DEFAULT NULL,
  `SPA_ID_ALTER` int(11) DEFAULT NULL,
  `SPA_ID_CAD` int(11) DEFAULT NULL,
  PRIMARY KEY (`SPA_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `saidapa` */

LOCK TABLES `saidapa` WRITE;

insert  into `saidapa`(`SPA_ID`,`SPA_CODIGO`,`SPA_COD_FUN`,`SPA_OBSERVACAO`,`SPA_DATA_CADASTRO`,`SPA_HORA_CADASTRO`,`SPA_SESSION_CAD`,`SPA_IP_CADASTRO`,`SPA_DATA_ALTTERACAO`,`SPA_HORA_ALTERACAO`,`SPA_SESSION_ALTER`,`SPA_IP_ALTERACAO`,`SPA_ID_ALTER`,`SPA_ID_CAD`) values (2,1,2,NULL,'2017-06-19','01:52:54','e2engo3puda0fcoj3id10e03o2','::1','2017-06-19','01:52:54','e2engo3puda0fcoj3id10e03o2','::1',2,2);

UNLOCK TABLES;

/*Table structure for table `segmento` */

DROP TABLE IF EXISTS `segmento`;

CREATE TABLE `segmento` (
  `SEG_ID` int(11) NOT NULL AUTO_INCREMENT,
  `SEG_NOME` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`SEG_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

/*Data for the table `segmento` */

LOCK TABLES `segmento` WRITE;

insert  into `segmento`(`SEG_ID`,`SEG_NOME`) values (1,'Industria'),(2,'Comercio'),(3,'Serviço'),(4,'Agricola');

UNLOCK TABLES;

/*Table structure for table `sexo` */

DROP TABLE IF EXISTS `sexo`;

CREATE TABLE `sexo` (
  `SEX_ID` int(11) NOT NULL AUTO_INCREMENT,
  `SEX_NOME` varchar(1) DEFAULT NULL,
  PRIMARY KEY (`SEX_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

/*Data for the table `sexo` */

LOCK TABLES `sexo` WRITE;

insert  into `sexo`(`SEX_ID`,`SEX_NOME`) values (1,'M'),(2,'F'),(3,'O');

UNLOCK TABLES;

/*Table structure for table `tercerizados` */

DROP TABLE IF EXISTS `tercerizados`;

CREATE TABLE `tercerizados` (
  `TER_ID` int(11) NOT NULL AUTO_INCREMENT,
  `TER_CODIGO` int(11) DEFAULT NULL,
  `TER_COD_PESSOA` int(11) DEFAULT NULL,
  `TER_PESSOA` varchar(5) DEFAULT NULL,
  `TER_FINALIDADE` varchar(50) DEFAULT NULL,
  `TER_CUSTO` decimal(10,2) DEFAULT NULL,
  `TER_DATA_VENC` date DEFAULT NULL,
  `TER_TEMPO` decimal(10,2) DEFAULT NULL,
  `TER_N_PESSOAS` int(11) DEFAULT NULL,
  `TER_DATA_INI` date DEFAULT NULL,
  `TER_DATA_FIM` date DEFAULT NULL,
  `TER_OBSERVACAO` text,
  `TER_DATA_CADASTRO` date DEFAULT NULL,
  `TER_HORA_CADASTRO` time DEFAULT NULL,
  `TER_SESSION_CAD` varchar(50) DEFAULT NULL,
  `TER_IP_CADASTRO` varchar(50) DEFAULT NULL,
  `TER_DATA_ALTTERACAO` date DEFAULT NULL,
  `TER_HORA_ALTERACAO` time DEFAULT NULL,
  `TER_SESSION_ALTER` varchar(50) DEFAULT NULL,
  `TER_IP_ALTERACAO` varchar(50) DEFAULT NULL,
  `TER_ID_ALTER` int(11) DEFAULT NULL,
  `TER_ID_CAD` int(11) DEFAULT NULL,
  PRIMARY KEY (`TER_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

/*Data for the table `tercerizados` */

LOCK TABLES `tercerizados` WRITE;

insert  into `tercerizados`(`TER_ID`,`TER_CODIGO`,`TER_COD_PESSOA`,`TER_PESSOA`,`TER_FINALIDADE`,`TER_CUSTO`,`TER_DATA_VENC`,`TER_TEMPO`,`TER_N_PESSOAS`,`TER_DATA_INI`,`TER_DATA_FIM`,`TER_OBSERVACAO`,`TER_DATA_CADASTRO`,`TER_HORA_CADASTRO`,`TER_SESSION_CAD`,`TER_IP_CADASTRO`,`TER_DATA_ALTTERACAO`,`TER_HORA_ALTERACAO`,`TER_SESSION_ALTER`,`TER_IP_ALTERACAO`,`TER_ID_ALTER`,`TER_ID_CAD`) values (12,2,4,'pj','SEGURANÃ‡A','2000.00','2017-04-20','144.00',1,'2017-04-20','2017-04-20','BROTHER\r\n','2017-04-22','02:50:35','birpfrtn0o45rp2qlvh1vj6ra0','::1','2017-04-22','02:50:35','birpfrtn0o45rp2qlvh1vj6ra0','::1',2,2),(13,3,8,'pf','CAIXA','1000.00','2017-04-20','144.00',1,'2017-04-20','2018-04-20','FERA','2017-04-22','02:51:53','birpfrtn0o45rp2qlvh1vj6ra0','::1','2017-04-25','06:02:42','j8k9q69k20s9sfov9dmbq0odh2','::1',2,2);

UNLOCK TABLES;

/*Table structure for table `tipo_emp` */

DROP TABLE IF EXISTS `tipo_emp`;

CREATE TABLE `tipo_emp` (
  `TIP_ID` int(11) NOT NULL AUTO_INCREMENT,
  `TIP_NOME` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`TIP_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

/*Data for the table `tipo_emp` */

LOCK TABLES `tipo_emp` WRITE;

insert  into `tipo_emp`(`TIP_ID`,`TIP_NOME`) values (1,'Sociedade Limitada'),(2,'Empresário Individual'),(3,'EIRILI'),(4,'Microempreendedor Individual'),(5,'Sociedade Empresária'),(6,'Sociedade Anônima'),(7,'Sociedade em Comandita Simples'),(8,'Sociedade em Comandita por Ações'),(9,'Sociedade Simples'),(10,'Sem Fins Lucrativos'),(11,'Sociedade em Nome Coletivo'),(12,'Offshore');

UNLOCK TABLES;

/*Table structure for table `vendas` */

DROP TABLE IF EXISTS `vendas`;

CREATE TABLE `vendas` (
  `VEN_ID` int(11) NOT NULL AUTO_INCREMENT,
  `VEN_CODIGO` int(11) DEFAULT NULL,
  `VEN_ID_VEN_FUN` int(11) DEFAULT NULL,
  `VEN_ID_CLI` int(11) DEFAULT NULL,
  `VEN_TRANSP` varchar(100) DEFAULT NULL,
  `VEN_F_PGMT` varchar(100) DEFAULT NULL,
  `VEN_M_PGMT` varchar(100) DEFAULT NULL,
  `VEN_VL_GASTO` decimal(10,2) DEFAULT NULL,
  `VEN_VL_PARCELADO` decimal(10,2) DEFAULT NULL,
  `VEN_VL_BRUTO` decimal(10,2) DEFAULT NULL,
  `VEN_OBSERVACAO` text,
  `VEN_DATA_CADASTRO` date DEFAULT NULL,
  `VEN_HORA_CADASTRO` time DEFAULT NULL,
  `VEN_SESSION_CAD` varchar(50) DEFAULT NULL,
  `VEN_IP_CADASTRO` varchar(50) DEFAULT NULL,
  `VEN_DATA_ALTTERACAO` date DEFAULT NULL,
  `VEN_HORA_ALTERACAO` time DEFAULT NULL,
  `VEN_SESSION_ALTER` varchar(50) DEFAULT NULL,
  `VEN_IP_ALTERACAO` varchar(50) DEFAULT NULL,
  `VEN_ID_ALTER` int(11) DEFAULT NULL,
  `VEN_ID_CAD` int(11) DEFAULT NULL,
  `VEN_DESCONTO` decimal(10,2) DEFAULT NULL,
  `VEN_M_DESC` varchar(200) DEFAULT NULL,
  `VEN_ENTRADA` decimal(10,2) DEFAULT NULL,
  PRIMARY KEY (`VEN_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=latin1;

/*Data for the table `vendas` */

LOCK TABLES `vendas` WRITE;

insert  into `vendas`(`VEN_ID`,`VEN_CODIGO`,`VEN_ID_VEN_FUN`,`VEN_ID_CLI`,`VEN_TRANSP`,`VEN_F_PGMT`,`VEN_M_PGMT`,`VEN_VL_GASTO`,`VEN_VL_PARCELADO`,`VEN_VL_BRUTO`,`VEN_OBSERVACAO`,`VEN_DATA_CADASTRO`,`VEN_HORA_CADASTRO`,`VEN_SESSION_CAD`,`VEN_IP_CADASTRO`,`VEN_DATA_ALTTERACAO`,`VEN_HORA_ALTERACAO`,`VEN_SESSION_ALTER`,`VEN_IP_ALTERACAO`,`VEN_ID_ALTER`,`VEN_ID_CAD`,`VEN_DESCONTO`,`VEN_M_DESC`,`VEN_ENTRADA`) values (26,1,3,8,'Retirado pelo Cliente','Ã€ Prazo','Boleto','1000.00','990.00','1611.20',NULL,'2017-06-22','11:41:13','uru8pkqkqagqhgndp98s8f0lr3','::1','2017-06-22','11:41:13','uru8pkqkqagqhgndp98s8f0lr3','::1',2,2,'5.00','a','5.00'),(27,2,3,8,'Retirado pelo Cliente','Ã€ Vista','Dinheiro','200.00','195.00','195.00',NULL,'2017-06-22','11:44:30','uru8pkqkqagqhgndp98s8f0lr3','::1','2017-06-22','11:44:30','uru8pkqkqagqhgndp98s8f0lr3','::1',2,2,'5.00','asdf','0.00'),(29,3,4,7,'O Mesmo','Ã€ Prazo','Boleto','4750.00','4645.00','4904.30',NULL,'2017-06-24','12:06:00','ci9qk36t0e3naqpunv8qc43jn2','::1','2017-06-24','12:06:00','ci9qk36t0e3naqpunv8qc43jn2','::1',2,2,'5.00','SIM','100.00');

UNLOCK TABLES;

/*Table structure for table `venitens` */

DROP TABLE IF EXISTS `venitens`;

CREATE TABLE `venitens` (
  `VNI_ID` int(11) NOT NULL AUTO_INCREMENT,
  `VNI_VEN_ID` int(11) DEFAULT NULL,
  `VNI_ID_ISP` int(11) DEFAULT NULL,
  `VNI_ID_PROD` int(11) DEFAULT NULL,
  `VNI_QUANTIDADE` decimal(10,2) DEFAULT NULL,
  `VNI_OBSERVACAO` text,
  `VNI_DATA_CADASTRO` date DEFAULT NULL,
  `VNI_HORA_CADASTRO` time DEFAULT NULL,
  `VNI_SESSION_CAD` varchar(50) DEFAULT NULL,
  `VNI_IP_CADASTRO` varchar(50) DEFAULT NULL,
  `VNI_DATA_ALTTERACAO` date DEFAULT NULL,
  `VNI_HORA_ALTERACAO` time DEFAULT NULL,
  `VNI_SESSION_ALTER` varchar(50) DEFAULT NULL,
  `VNI_IP_ALTERACAO` varchar(50) DEFAULT NULL,
  `VNI_ID_ALTER` int(11) DEFAULT NULL,
  `VNI_ID_CAD` int(11) DEFAULT NULL,
  PRIMARY KEY (`VNI_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=43 DEFAULT CHARSET=latin1;

/*Data for the table `venitens` */

LOCK TABLES `venitens` WRITE;

insert  into `venitens`(`VNI_ID`,`VNI_VEN_ID`,`VNI_ID_ISP`,`VNI_ID_PROD`,`VNI_QUANTIDADE`,`VNI_OBSERVACAO`,`VNI_DATA_CADASTRO`,`VNI_HORA_CADASTRO`,`VNI_SESSION_CAD`,`VNI_IP_CADASTRO`,`VNI_DATA_ALTTERACAO`,`VNI_HORA_ALTERACAO`,`VNI_SESSION_ALTER`,`VNI_IP_ALTERACAO`,`VNI_ID_ALTER`,`VNI_ID_CAD`) values (35,26,7,12,'50.00',NULL,'2017-06-22','11:41:13','uru8pkqkqagqhgndp98s8f0lr3','::1','2017-06-22','11:41:13','uru8pkqkqagqhgndp98s8f0lr3','::1',2,2),(36,26,8,11,'10.00',NULL,'2017-06-22','11:41:13','uru8pkqkqagqhgndp98s8f0lr3','::1','2017-06-22','11:41:13','uru8pkqkqagqhgndp98s8f0lr3','::1',2,2),(37,27,7,12,'10.00',NULL,'2017-06-22','11:44:30','uru8pkqkqagqhgndp98s8f0lr3','::1','2017-06-22','11:44:30','uru8pkqkqagqhgndp98s8f0lr3','::1',2,2),(38,27,8,11,'10.00',NULL,'2017-06-22','11:44:30','uru8pkqkqagqhgndp98s8f0lr3','::1','2017-06-22','11:44:30','uru8pkqkqagqhgndp98s8f0lr3','::1',2,2),(41,29,7,12,'150.00',NULL,'2017-06-24','12:06:00','ci9qk36t0e3naqpunv8qc43jn2','::1','2017-06-24','12:06:00','ci9qk36t0e3naqpunv8qc43jn2','::1',2,2),(42,29,8,11,'250.00',NULL,'2017-06-24','12:06:00','ci9qk36t0e3naqpunv8qc43jn2','::1','2017-06-24','12:06:00','ci9qk36t0e3naqpunv8qc43jn2','::1',2,2);

UNLOCK TABLES;

/*Table structure for table `venpgmt` */

DROP TABLE IF EXISTS `venpgmt`;

CREATE TABLE `venpgmt` (
  `VNG_ID` int(11) NOT NULL AUTO_INCREMENT,
  `VNG_VEN_ID` int(11) DEFAULT NULL,
  `VNG_N_PAR` int(11) DEFAULT NULL,
  `VNG_VL_PAR` decimal(10,2) DEFAULT NULL,
  `VNG_PAGO` varchar(20) DEFAULT NULL,
  `VNG_OBSERVACAO` text,
  `VNG_DATA_CADASTRO` date DEFAULT NULL,
  `VNG_HORA_CADASTRO` time DEFAULT NULL,
  `VNG_SESSION_CAD` varchar(50) DEFAULT NULL,
  `VNG_IP_CADASTRO` varchar(50) DEFAULT NULL,
  `VNG_DATA_ALTTERACAO` date DEFAULT NULL,
  `VNG_HORA_ALTERACAO` time DEFAULT NULL,
  `VNG_SESSION_ALTER` varchar(50) DEFAULT NULL,
  `VNG_IP_ALTERACAO` varchar(50) DEFAULT NULL,
  `VNG_ID_ALTER` int(11) DEFAULT NULL,
  `VNG_ID_CAD` int(11) DEFAULT NULL,
  `VNG_TX` decimal(10,2) DEFAULT NULL,
  `VNG_DT_PGMT` date DEFAULT NULL,
  `VNG_DT_PAGO` date DEFAULT NULL,
  `VNG_VL_PAGO` decimal(10,2) DEFAULT NULL,
  `VNG_T_PARC` int(11) DEFAULT NULL,
  PRIMARY KEY (`VNG_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=54 DEFAULT CHARSET=latin1;

/*Data for the table `venpgmt` */

LOCK TABLES `venpgmt` WRITE;

insert  into `venpgmt`(`VNG_ID`,`VNG_VEN_ID`,`VNG_N_PAR`,`VNG_VL_PAR`,`VNG_PAGO`,`VNG_OBSERVACAO`,`VNG_DATA_CADASTRO`,`VNG_HORA_CADASTRO`,`VNG_SESSION_CAD`,`VNG_IP_CADASTRO`,`VNG_DATA_ALTTERACAO`,`VNG_HORA_ALTERACAO`,`VNG_SESSION_ALTER`,`VNG_IP_ALTERACAO`,`VNG_ID_ALTER`,`VNG_ID_CAD`,`VNG_TX`,`VNG_DT_PGMT`,`VNG_DT_PAGO`,`VNG_VL_PAGO`,`VNG_T_PARC`) values (34,26,1,'161.12','SIM','','2017-06-22','11:41:14','uru8pkqkqagqhgndp98s8f0lr3','::1','2017-06-25','11:04:06','7f3nu86oactrf5lgrdajsp3fh2','::1',2,2,'1.00','2017-07-22','2017-06-24','161.12',10),(35,26,2,'161.12','NÃƒO',NULL,'2017-06-22','11:41:14','uru8pkqkqagqhgndp98s8f0lr3','::1','2017-06-22','11:41:14','uru8pkqkqagqhgndp98s8f0lr3','::1',2,2,'1.00','2017-08-22',NULL,NULL,10),(36,26,3,'161.12','NÃƒO',NULL,'2017-06-22','11:41:14','uru8pkqkqagqhgndp98s8f0lr3','::1','2017-06-22','11:41:14','uru8pkqkqagqhgndp98s8f0lr3','::1',2,2,'1.00','2017-09-22',NULL,NULL,10),(37,26,4,'161.12','NÃƒO',NULL,'2017-06-22','11:41:14','uru8pkqkqagqhgndp98s8f0lr3','::1','2017-06-22','11:41:14','uru8pkqkqagqhgndp98s8f0lr3','::1',2,2,'1.00','2017-10-22',NULL,NULL,10),(38,26,5,'161.12','NÃƒO',NULL,'2017-06-22','11:41:14','uru8pkqkqagqhgndp98s8f0lr3','::1','2017-06-22','11:41:14','uru8pkqkqagqhgndp98s8f0lr3','::1',2,2,'1.00','2017-11-22',NULL,NULL,10),(39,26,6,'161.12','NÃƒO',NULL,'2017-06-22','11:41:14','uru8pkqkqagqhgndp98s8f0lr3','::1','2017-06-22','11:41:14','uru8pkqkqagqhgndp98s8f0lr3','::1',2,2,'1.00','2017-12-22',NULL,NULL,10),(40,26,7,'161.12','NÃƒO',NULL,'2017-06-22','11:41:14','uru8pkqkqagqhgndp98s8f0lr3','::1','2017-06-22','11:41:14','uru8pkqkqagqhgndp98s8f0lr3','::1',2,2,'1.00','2018-01-22',NULL,NULL,10),(41,26,8,'161.12','NÃƒO',NULL,'2017-06-22','11:41:15','uru8pkqkqagqhgndp98s8f0lr3','::1','2017-06-22','11:41:15','uru8pkqkqagqhgndp98s8f0lr3','::1',2,2,'1.00','2018-02-22',NULL,NULL,10),(42,26,9,'161.12','NÃƒO',NULL,'2017-06-22','11:41:15','uru8pkqkqagqhgndp98s8f0lr3','::1','2017-06-22','11:41:15','uru8pkqkqagqhgndp98s8f0lr3','::1',2,2,'1.00','2018-03-22',NULL,NULL,10),(43,26,10,'161.12','NÃƒO',NULL,'2017-06-22','11:41:15','uru8pkqkqagqhgndp98s8f0lr3','::1','2017-06-22','11:41:15','uru8pkqkqagqhgndp98s8f0lr3','::1',2,2,'1.00','2018-04-22',NULL,NULL,10),(44,29,1,'490.43','SIM','','2017-06-24','12:06:00','ci9qk36t0e3naqpunv8qc43jn2','::1','2017-06-24','02:37:58','ci9qk36t0e3naqpunv8qc43jn2','::1',2,2,'1.00','2017-07-24','2017-06-24','490.43',10),(45,29,2,'490.43','NÃƒO',NULL,'2017-06-24','12:06:00','ci9qk36t0e3naqpunv8qc43jn2','::1','2017-06-24','12:06:00','ci9qk36t0e3naqpunv8qc43jn2','::1',2,2,'1.00','2017-08-24',NULL,NULL,10),(46,29,3,'490.43','NÃƒO',NULL,'2017-06-24','12:06:00','ci9qk36t0e3naqpunv8qc43jn2','::1','2017-06-24','12:06:00','ci9qk36t0e3naqpunv8qc43jn2','::1',2,2,'1.00','2017-09-24',NULL,NULL,10),(47,29,4,'490.43','NÃƒO',NULL,'2017-06-24','12:06:01','ci9qk36t0e3naqpunv8qc43jn2','::1','2017-06-24','12:06:01','ci9qk36t0e3naqpunv8qc43jn2','::1',2,2,'1.00','2017-10-24',NULL,NULL,10),(48,29,5,'490.43','NÃƒO',NULL,'2017-06-24','12:06:01','ci9qk36t0e3naqpunv8qc43jn2','::1','2017-06-24','12:06:01','ci9qk36t0e3naqpunv8qc43jn2','::1',2,2,'1.00','2017-11-24',NULL,NULL,10),(49,29,6,'490.43','NÃƒO',NULL,'2017-06-24','12:06:01','ci9qk36t0e3naqpunv8qc43jn2','::1','2017-06-24','12:06:01','ci9qk36t0e3naqpunv8qc43jn2','::1',2,2,'1.00','2017-12-24',NULL,NULL,10),(50,29,7,'490.43','NÃƒO',NULL,'2017-06-24','12:06:01','ci9qk36t0e3naqpunv8qc43jn2','::1','2017-06-24','12:06:01','ci9qk36t0e3naqpunv8qc43jn2','::1',2,2,'1.00','2018-01-24',NULL,NULL,10),(51,29,8,'490.43','NÃƒO',NULL,'2017-06-24','12:06:01','ci9qk36t0e3naqpunv8qc43jn2','::1','2017-06-24','12:06:01','ci9qk36t0e3naqpunv8qc43jn2','::1',2,2,'1.00','2018-02-24',NULL,NULL,10),(52,29,9,'490.43','NÃƒO',NULL,'2017-06-24','12:06:01','ci9qk36t0e3naqpunv8qc43jn2','::1','2017-06-24','12:06:01','ci9qk36t0e3naqpunv8qc43jn2','::1',2,2,'1.00','2018-03-24',NULL,NULL,10),(53,29,10,'490.43','NÃƒO',NULL,'2017-06-24','12:06:01','ci9qk36t0e3naqpunv8qc43jn2','::1','2017-06-24','12:06:01','ci9qk36t0e3naqpunv8qc43jn2','::1',2,2,'1.00','2018-04-24',NULL,NULL,10);

UNLOCK TABLES;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
