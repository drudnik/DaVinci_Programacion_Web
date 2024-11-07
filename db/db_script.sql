-- MySQL Script generated by MySQL Workbench
-- Sun Nov  3 19:09:45 2024
-- Model: New Model    Version: 1.0
-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema mydb
-- -----------------------------------------------------
DROP SCHEMA IF EXISTS `mydb` ;

-- -----------------------------------------------------
-- Schema mydb
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `mydb` DEFAULT CHARACTER SET utf8 ;
USE `mydb` ;

-- -----------------------------------------------------
-- Table `mydb`.`products`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `mydb`.`products` ;

CREATE TABLE IF NOT EXISTS `mydb`.`products` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `title` VARCHAR(45) NOT NULL,
  `img_url` VARCHAR(255) NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;

-- -----------------------------------------------------
-- Data for table `mydb`.`products`
-- -----------------------------------------------------
START TRANSACTION;
USE `mydb`;

INSERT INTO `mydb`.`products` (`id`, `title`, `img_url`) VALUES (1, 'EL PLATO 1', 'https://raw.githubusercontent.com/drudnik/DaVinci_Programacion_Web/refs/heads/main/image/1.webp');
INSERT INTO `mydb`.`products` (`id`, `title`, `img_url`) VALUES (2, 'EL PLATO 2', 'https://raw.githubusercontent.com/drudnik/DaVinci_Programacion_Web/refs/heads/main/image/2.webp');
INSERT INTO `mydb`.`products` (`id`, `title`, `img_url`) VALUES (3, 'EL PLATO 3', 'https://raw.githubusercontent.com/drudnik/DaVinci_Programacion_Web/refs/heads/main/image/3.webp');
INSERT INTO `mydb`.`products` (`id`, `title`, `img_url`) VALUES (4, 'EL PLATO 4', 'https://raw.githubusercontent.com/drudnik/DaVinci_Programacion_Web/refs/heads/main/image/4.webp');
INSERT INTO `mydb`.`products` (`id`, `title`, `img_url`) VALUES (5, 'EL PLATO 5', 'https://raw.githubusercontent.com/drudnik/DaVinci_Programacion_Web/refs/heads/main/image/5.webp');
INSERT INTO `mydb`.`products` (`id`, `title`, `img_url`) VALUES (6, 'EL PLATO 6', 'https://raw.githubusercontent.com/drudnik/DaVinci_Programacion_Web/refs/heads/main/image/6.webp');
INSERT INTO `mydb`.`products` (`id`, `title`, `img_url`) VALUES (7, 'EL PLATO 7', 'https://raw.githubusercontent.com/drudnik/DaVinci_Programacion_Web/refs/heads/main/image/7.webp');
INSERT INTO `mydb`.`products` (`id`, `title`, `img_url`) VALUES (8, 'EL PLATO 8', 'https://raw.githubusercontent.com/drudnik/DaVinci_Programacion_Web/refs/heads/main/image/8.webp');
INSERT INTO `mydb`.`products` (`id`, `title`, `img_url`) VALUES (9, 'EL PLATO 9', 'https://raw.githubusercontent.com/drudnik/DaVinci_Programacion_Web/refs/heads/main/image/9.webp');
INSERT INTO `mydb`.`products` (`id`, `title`, `img_url`) VALUES (10, 'EL PLATO 10_1', 'https://raw.githubusercontent.com/drudnik/DaVinci_Programacion_Web/refs/heads/main/image/1.webp');
INSERT INTO `mydb`.`products` (`id`, `title`, `img_url`) VALUES (11, 'EL PLATO 11_1', 'https://raw.githubusercontent.com/drudnik/DaVinci_Programacion_Web/refs/heads/main/image/2.webp');
INSERT INTO `mydb`.`products` (`id`, `title`, `img_url`) VALUES (12, 'EL PLATO 12_1', 'https://raw.githubusercontent.com/drudnik/DaVinci_Programacion_Web/refs/heads/main/image/3.webp');
INSERT INTO `mydb`.`products` (`id`, `title`, `img_url`) VALUES (13, 'EL PLATO 13_1', 'https://raw.githubusercontent.com/drudnik/DaVinci_Programacion_Web/refs/heads/main/image/4.webp');
INSERT INTO `mydb`.`products` (`id`, `title`, `img_url`) VALUES (14, 'EL PLATO 14_1', 'https://raw.githubusercontent.com/drudnik/DaVinci_Programacion_Web/refs/heads/main/image/5.webp');
INSERT INTO `mydb`.`products` (`id`, `title`, `img_url`) VALUES (15, 'EL PLATO 15_1', 'https://raw.githubusercontent.com/drudnik/DaVinci_Programacion_Web/refs/heads/main/image/6.webp');
INSERT INTO `mydb`.`products` (`id`, `title`, `img_url`) VALUES (16, 'EL PLATO 16_1', 'https://raw.githubusercontent.com/drudnik/DaVinci_Programacion_Web/refs/heads/main/image/7.webp');
INSERT INTO `mydb`.`products` (`id`, `title`, `img_url`) VALUES (17, 'EL PLATO 17_1', 'https://raw.githubusercontent.com/drudnik/DaVinci_Programacion_Web/refs/heads/main/image/8.webp');
INSERT INTO `mydb`.`products` (`id`, `title`, `img_url`) VALUES (18, 'EL PLATO 18_1', 'https://raw.githubusercontent.com/drudnik/DaVinci_Programacion_Web/refs/heads/main/image/9.webp');

COMMIT;

