-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema db_paginas_do_bem
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema db_paginas_do_bem
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `db_paginas_do_bem` DEFAULT CHARACTER SET utf8 ;
USE `db_paginas_do_bem` ;

-- -----------------------------------------------------
-- Table `db_paginas_do_bem`.`ongs`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `db_paginas_do_bem`.`ongs` (
  `id_ong` INT NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(45) NOT NULL,
  `email` VARCHAR(45) NOT NULL,
  `telefone` INT(10) NOT NULL,
  `celular` INT(11) NULL,
  `segmento` VARCHAR(200) NOT NULL,
  `site` VARCHAR(45) NULL,
  `responsavel` VARCHAR(100) NOT NULL,
  `documento` VARCHAR(14) NOT NULL,
  `descricao` VARCHAR(500) NOT NULL,
  `imagem` VARCHAR(100) NULL,
  `senha` VARCHAR(200) NOT NULL,
  `nivel` CHAR(1) NOT NULL,
  PRIMARY KEY (`id_ong`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `db_paginas_do_bem`.`voluntarios`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `db_paginas_do_bem`.`voluntarios` (
  `id_voluntario` INT NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(45) NOT NULL,
  `sobrenome` VARCHAR(45) NOT NULL,
  `email` VARCHAR(45) NOT NULL,
  `telefone` INT(10) NULL,
  `celular` INT(11) NULL,
  `nascimento` DATE NOT NULL,
  `genero` CHAR(1) NOT NULL,
  `profissao` VARCHAR(100) NULL,
  `biografia` VARCHAR(1000) NULL,
  `imagem` VARCHAR(100) NULL,
  `senha` VARCHAR(200) NOT NULL,
  `nivel` CHAR(1) NOT NULL,
  PRIMARY KEY (`id_voluntario`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `db_paginas_do_bem`.`noticias`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `db_paginas_do_bem`.`noticias` (
  `id_noticias` INT NOT NULL,
  `titulo` VARCHAR(45) NULL,
  `corpo` VARCHAR(45) NULL,
  PRIMARY KEY (`id_noticias`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `db_paginas_do_bem`.`ongs_has_voluntarios`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `db_paginas_do_bem`.`ongs_has_voluntarios` (
  `id_ongs_voluntarios` INT NOT NULL AUTO_INCREMENT,
  `ongs_id_ongs` INT NOT NULL,
  `voluntarios_id_voluntarios` INT NOT NULL,
   PRIMARY KEY (`id_ongs_voluntarios`),
  CONSTRAINT `fk_ongs_has_voluntarios_ongs`
    FOREIGN KEY (`ongs_id_ongs`)
    REFERENCES `db_paginas_do_bem`.`ongs` (`id_ong`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_ongs_has_voluntarios_voluntarios1`
    FOREIGN KEY (`voluntarios_id_voluntarios`)
    REFERENCES `db_paginas_do_bem`.`voluntarios` (`id_voluntario`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `db_paginas_do_bem`.`interacao`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `db_paginas_do_bem`.`interacao` (
  `id_interacao` INT NOT NULL,
  `noticias_id_noticias` INT NOT NULL,
  `voluntarios_id_voluntarios` INT NULL,
  `ongs_id_ongs` INT NULL,
  `comentario` VARCHAR(45) NULL,
  `like` VARCHAR(45) NULL,
  `deslike` VARCHAR(45) NULL,
  PRIMARY KEY (`id_interacao`),
    CONSTRAINT `fk_interacao_voluntarios1`
    FOREIGN KEY (`voluntarios_id_voluntarios`)
    REFERENCES `db_paginas_do_bem`.`voluntarios` (`id_voluntario`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_interacao_ongs1`
    FOREIGN KEY (`ongs_id_ongs`)
    REFERENCES `db_paginas_do_bem`.`ongs` (`id_ong`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_interacao_noticias1`
    FOREIGN KEY (`noticias_id_noticias`)
    REFERENCES `db_paginas_do_bem`.`noticias` (`id_noticias`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
