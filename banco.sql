CREATE DATABASE site;

USE site;


CREATE TABLE cadastro_usuario(
	id int NOT NULL auto_increment PRIMARY KEY,
   foto_perfil varchar(40) NULL DEFAULT NULL,
	nome VARCHAR(42) NULL DEFAULT NULL,
	email VARCHAR (50) NULL DEFAULT NULL,
	cpf VARCHAR (14) NULL DEFAULT NULL,
   senha varchar (40) NULL DEFAULT NULL
);

CREATE TABLE estados(
	id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
	nome VARCHAR(2)
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

CREATE TABLE informacoes_ongs(
	id int not null auto_increment primary key,
    sobre varchar(700),
    historia varchar(700),
    foreign key (id) references cadastro_ongs(id)
);


SELECT * FROM cadastro_ongs;

SELECT * FROM cadastro_usuario;

select * from informacoes_ongs;

SELECT * FROM cadastro_ongs as c_o INNER JOIN informacoes_ongs as i_o ON i_o.id = c_o.id;
SELECT * FROM cadastro_ongs as c_o INNER JOIN informacoes_ongs as i_o ON i_o.id = c_o.id where i_o.id=1;

drop database site;