SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL';


-- -----------------------------------------------------
-- Table `secomp`.`categoria`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `secomp`.`categoria` (
  `idcategoria` INT NOT NULL AUTO_INCREMENT ,
  `descricao` VARCHAR(200) NOT NULL ,
  PRIMARY KEY (`idcategoria`) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `secomp`.`atividades`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `secomp`.`atividades` (
  `idatividades` INT NOT NULL AUTO_INCREMENT ,
  `titulo` VARCHAR(300) NOT NULL ,
  `imagem` VARCHAR(300) NOT NULL ,
  `descricao` VARCHAR(500) NOT NULL ,
  `categoria_idcategoria` INT NOT NULL ,
  PRIMARY KEY (`idatividades`, `categoria_idcategoria`) ,
  INDEX `fk_atividades_categoria` (`categoria_idcategoria` ASC) ,
  CONSTRAINT `fk_atividades_categoria`
    FOREIGN KEY (`categoria_idcategoria` )
    REFERENCES `secomp`.`categoria` (`idcategoria` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `secomp`.`sala`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `secomp`.`sala` (
  `idsala` INT NOT NULL AUTO_INCREMENT ,
  `descricao` VARCHAR(200) NOT NULL ,
  `localizacao` VARCHAR(350) NOT NULL ,
  PRIMARY KEY (`idsala`) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `secomp`.`sala_atividades`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `secomp`.`sala_atividades` (
  `atividades_idatividades` INT NOT NULL ,
  `atividades_categoria_idcategoria` INT NOT NULL ,
  `sala_idsala` INT NOT NULL ,
  `data` DATE NOT NULL ,
  `hora_inicio` DATETIME NOT NULL ,
  `hora_fim` DATETIME NOT NULL ,
  PRIMARY KEY (`atividades_idatividades`, `atividades_categoria_idcategoria`, `sala_idsala`) ,
  INDEX `fk_atividades_has_sala_sala1` (`sala_idsala` ASC) ,
  INDEX `fk_atividades_has_sala_atividades1` (`atividades_idatividades` ASC, `atividades_categoria_idcategoria` ASC) ,
  CONSTRAINT `fk_atividades_has_sala_atividades1`
    FOREIGN KEY (`atividades_idatividades` , `atividades_categoria_idcategoria` )
    REFERENCES `secomp`.`atividades` (`idatividades` , `categoria_idcategoria` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_atividades_has_sala_sala1`
    FOREIGN KEY (`sala_idsala` )
    REFERENCES `secomp`.`sala` (`idsala` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;



SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
