-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema mydb
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema mydb
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `mydb` DEFAULT CHARACTER SET utf8 ;
USE `mydb` ;

-- -----------------------------------------------------
-- Table `mydb`.`cidade`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`cidade` (
  `id_cidade` INT NOT NULL,
  PRIMARY KEY (`id_cidade`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`bairro`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`bairro` (
  `id_bairro` INT NOT NULL,
  `cidade_id_cidade` INT NOT NULL,
  PRIMARY KEY (`id_bairro`),
  
  CONSTRAINT `fk_bairro_cidade1`
    FOREIGN KEY (`cidade_id_cidade`)
    REFERENCES `mydb`.`cidade` (`id_cidade`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`user`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`user` (
  `id_user` INT NOT NULL,
  `tipo` VARCHAR(45) NULL,
  `nome` VARCHAR(45) NOT NULL,
  `email` VARCHAR(45) NOT NULL,
  `senha` VARCHAR(45) NOT NULL,
  `avatar` VARCHAR(45) NULL,
  `bairro_id_bairro` INT NOT NULL,
  PRIMARY KEY (`id_user`),
 
  CONSTRAINT `fk_user_bairro1`
    FOREIGN KEY (`bairro_id_bairro`)
    REFERENCES `mydb`.`bairro` (`id_bairro`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`noticia`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`noticia` (
  `id_noticiacol` INT NOT NULL AUTO_INCREMENT,
  `user_id_user` INT NOT NULL,
  `titulo` VARCHAR(45) NULL,
  `conteudo` VARCHAR(45) NULL,
 
  PRIMARY KEY (`id_noticiacol`),
  CONSTRAINT `fk_noticia_user1`
    FOREIGN KEY (`user_id_user`)
    REFERENCES `mydb`.`user` (`id_user`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`ong`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`ong` (
  `id_ong` INT NOT NULL,
  `bairro_id_bairro` INT NOT NULL,
  `nome` VARCHAR(45) NULL,
  `segmento` VARCHAR(45) NULL,
  `logomarca` VARCHAR(45) NULL,
  PRIMARY KEY (`id_ong`),
  
  CONSTRAINT `fk_ong_bairro1`
    FOREIGN KEY (`bairro_id_bairro`)
    REFERENCES `mydb`.`bairro` (`id_bairro`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`user_has_ong`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`user_has_ong` (
  `id_user_has_ong` INT NOT NULL AUTO_INCREMENT,
  `user_id_user` INT NOT NULL,
  `ong_id_ong` INT NOT NULL,
  `nivel` INT NOT NULL,
  
  PRIMARY KEY (`id_user_has_ong`),
  CONSTRAINT `fk_user_has_ong_user`
    FOREIGN KEY (`user_id_user`)
    REFERENCES `mydb`.`user` (`id_user`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_user_has_ong_ong1`
    FOREIGN KEY (`ong_id_ong`)
    REFERENCES `mydb`.`ong` (`id_ong`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`user_as_noticia`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`user_as_noticia` (
  `id_interacao` INT NOT NULL AUTO_INCREMENT,
  `noticia_id_noticia` INT NOT NULL,
  `user_id_user` INT NOT NULL,
  `comentario` VARCHAR(45) NULL,
  `like` VARCHAR(45) NULL,
  `deslike` VARCHAR(45) NULL,
  PRIMARY KEY (`id_interacao`),
  
  CONSTRAINT `fk_interacao_noticia1`
    FOREIGN KEY (`noticia_id_noticia`)
    REFERENCES `mydb`.`noticia` (`id_noticiacol`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_interacao_user1`
    FOREIGN KEY (`user_id_user`)
    REFERENCES `mydb`.`user` (`id_user`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`galeria`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`galeria` (
  `id_galeria` INT NOT NULL AUTO_INCREMENT,
  `ong_id_ong` INT NOT NULL,
  `nome` VARCHAR(45) NULL,
  `caminho` VARCHAR(45) NULL,
  PRIMARY KEY (`id_galeria`),
  
  CONSTRAINT `fk_galeria_ong1`
    FOREIGN KEY (`ong_id_ong`)
    REFERENCES `mydb`.`ong` (`id_ong`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
