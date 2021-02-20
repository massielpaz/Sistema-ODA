CREATE DATABASE IF NOT EXISTS `sistama_oda`;

CREATE TABLE IF NOT EXISTS `tabla_de_prueba` (
	`valor_n` INT NOT NULL,
	`valor_s` VARCHAR(50) NOT NULL
);

CREATE TABLE IF NOT EXISTS `temas`( 
	`id_tema` INT NOT NULL AUTO_INCREMENT, 
	`nombre_tema` VARCHAR(150) NOT NULL,
	PRIMARY KEY (`id_tema`)
);