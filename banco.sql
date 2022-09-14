CREATE DATABASE site;

USE site;

CREATE TABLE cadastro(
	cpf varchar(11) NOT NULL PRIMARY KEY,
    foto_perfil varchar(40) NULL DEFAULT NULL,
	nome VARCHAR(42) NULL DEFAULT NULL,
	telefone VARCHAR(42) NULL DEFAULT NULL,
	email VARCHAR (50) NULL DEFAULT NULL
);

create table imagem(
	id int not null auto_increment primary key,
	img varchar(66)
);

CREATE TABLE cadastro_ongs(
	cnpj VARCHAR(15) NOT NULL PRIMARY KEY,
    foto_pefil VARCHAR(100),
	nome VARCHAR(42) NULL DEFAULT NULL,
	endereco VARCHAR(30) NULL DEFAULT NULL,
	email VARCHAR(50) NULL DEFAULT NULL,
	telefone VARCHAR(30) NULL DEFAULT NULL,
    img1 VARCHAR(100) NULL DEFAULT NULL,
    img2 VARCHAR(100) NULL DEFAULT NULL,
    img3 VARCHAR(100) NULL DEFAULT NULL,
    img4 VARCHAR(100) NULL DEFAULT NULL
);

select * from imagem;

drop database site;