
CREATE TABLE `pedidoitens` (
  `PDI_ID` INT(11) NOT NULL AUTO_INCREMENT,
  `PDI_PED_ID` INT(11) DEFAULT NULL,
  
  `PDI_VALOR` DECIMAL(10,2) DEFAULT NULL,
  `PDI_QUANT_TEMP` VARCHAR(100) DEFAULT NULL,
  `PDI_DT_ENT_INI` DATE DEFAULT NULL,
  `PDI_PROD_DESC` VARCHAR(500) DEFAULT NULL,
  `PDI_FOR_TER` INT(11) DEFAULT NULL,
  `PDI_TIPO` VARCHAR(10) DEFAULT NULL,
  `PDI_ATENDIDO` VARCHAR(10) DEFAULT NULL,
    
  
  `PDI_OBSERVACAO` TEXT,
  `PDI_DATA_CADASTRO` DATE DEFAULT NULL,
  `PDI_HORA_CADASTRO` TIME DEFAULT NULL,
  `PDI_SESSION_CAD` VARCHAR(50) DEFAULT NULL,
  `PDI_IP_CADASTRO` VARCHAR(50) DEFAULT NULL,
  `PDI_DATA_ALTTERACAO` DATE DEFAULT NULL,
  `PDI_HORA_ALTERACAO` TIME DEFAULT NULL,
  `PDI_SESSION_ALTER` VARCHAR(50) DEFAULT NULL,
  `PDI_IP_ALTERACAO` VARCHAR(50) DEFAULT NULL,
  `PDI_ID_ALTER` INT(11) DEFAULT NULL,
  `PDI_ID_CAD` INT(11) DEFAULT NULL,
  PRIMARY KEY (`PDI_ID`)
) ENGINE=INNODB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;
