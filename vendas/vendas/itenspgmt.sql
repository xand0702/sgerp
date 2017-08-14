
CREATE TABLE `venpgmt` (
  `VNG_ID` INT(11) NOT NULL AUTO_INCREMENT,
  `VNG_VEN_ID` INT(11) DEFAULT NULL,
  
  `VNG_N_PAR` INT(11) DEFAULT NULL,
  `VNG_ENTRADA` DECIMAL(10,2) NULL,
  `VNG_DESONTO` DECIMAL(10,2) NULL,
  `VNG_VL_PAR` DECIMAL(10,2) NULL,
  `VNG_PAGO` VARCHAR(20) NULL,
  `VNG_M_DESC` VARCHAR(200) NULL,
  
  
  `VNG_OBSERVACAO` TEXT,
  `VNG_DATA_CADASTRO` DATE DEFAULT NULL,
  `VNG_HORA_CADASTRO` TIME DEFAULT NULL,
  `VNG_SESSION_CAD` VARCHAR(50) DEFAULT NULL,
  `VNG_IP_CADASTRO` VARCHAR(50) DEFAULT NULL,
  `VNG_DATA_ALTTERACAO` DATE DEFAULT NULL,
  `VNG_HORA_ALTERACAO` TIME DEFAULT NULL,
  `VNG_SESSION_ALTER` VARCHAR(50) DEFAULT NULL,
  `VNG_IP_ALTERACAO` VARCHAR(50) DEFAULT NULL,
  `VNG_ID_ALTER` INT(11) DEFAULT NULL,
  `VNG_ID_CAD` INT(11) DEFAULT NULL,
  PRIMARY KEY (`VNG_ID`)
) ENGINE=INNODB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;