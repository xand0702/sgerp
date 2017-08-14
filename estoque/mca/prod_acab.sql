
CREATE TABLE `entradamc` (
  `MCA_ID` INT(11) NOT NULL AUTO_INCREMENT,
  `MCA_CODIGO` INT(11) DEFAULT NULL,
  
  `MCA_NOTA` VARCHAR(100) DEFAULT NULL,
  `MCA_COD_PESSOA` VARCHAR(100) DEFAULT NULL,
  `MCA_PEDIDO` VARCHAR(50) DEFAULT NULL,
  `MCA_RECEBIDO` INT(11) DEFAULT NULL,
  `MCA_CONT_FISCO` VARCHAR(200) DEFAULT NULL,
  `MCA_SERIE` VARCHAR(50) DEFAULT NULL,
  `MCA_PAGINA` VARCHAR(50) DEFAULT NULL,
  `MCA_NAT_OP` VARCHAR(100) DEFAULT NULL,
  `MCA_CH_NFE` VARCHAR(200) DEFAULT NULL,
  `MCA_DT_EMISSAO` DATE DEFAULT NULL,
  `MCA_DT_SAIDA` DATE DEFAULT NULL,
  `MCA_HR_SAIDA` TIME DEFAULT NULL,
  
  
  `MCA_OBSERVACAO` TEXT,
  `MCA_DATA_CADASTRO` DATE DEFAULT NULL,
  `MCA_HORA_CADASTRO` TIME DEFAULT NULL,
  `MCA_SESSION_CAD` VARCHAR(50) DEFAULT NULL,
  `MCA_IP_CADASTRO` VARCHAR(50) DEFAULT NULL,
  `MCA_DATA_ALTTERACAO` DATE DEFAULT NULL,
  `MCA_HORA_ALTERACAO` TIME DEFAULT NULL,
  `MCA_SESSION_ALTER` VARCHAR(50) DEFAULT NULL,
  `MCA_IP_ALTERACAO` VARCHAR(50) DEFAULT NULL,
  `MCA_ID_ALTER` INT(11) DEFAULT NULL,
  `MCA_ID_CAD` INT(11) DEFAULT NULL,
  PRIMARY KEY (`MCA_ID`)
) ENGINE=INNODB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;