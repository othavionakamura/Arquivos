CREATE DATABASE site;

USE site;


CREATE TABLE cadastro_usuario(
	id int NOT NULL auto_increment PRIMARY KEY,
   foto_perfil varchar(40) NULL DEFAULT NULL,
	nome VARCHAR(42) NULL DEFAULT NULL,
	email VARCHAR (50) NULL DEFAULT NULL,
   senha varchar (40) NULL DEFAULT NULL
);

CREATE TABLE cadastro_ongs(
	id int NOT NULL auto_increment PRIMARY KEY,
   foto_pefil VARCHAR(100),
	nome VARCHAR(42) NULL DEFAULT NULL,
	endereco VARCHAR(30) NULL DEFAULT NULL,
	email VARCHAR(50) NULL DEFAULT NULL,
	telefone VARCHAR(30) NULL DEFAULT NULL,
	senha varchar (40) NULL DEFAULT NULL,
	img1 VARCHAR(100) NULL DEFAULT NULL,
	img2 VARCHAR(100) NULL DEFAULT NULL,
	img3 VARCHAR(100) NULL DEFAULT NULL,
	img4 VARCHAR(100) NULL DEFAULT NULL,
	chave_pix varchar(30) NULL DEFAULT NULL,
	situacao INT NULL DEFAULT null
);

SELECT * FROM cadastro_ongs;

drop database site;