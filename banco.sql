CREATE DATABASE site;

USE site;

CREATE TABLE cadastro_adm(
	id int NOT NULL auto_increment PRIMARY KEY,
	foto_perfil VARCHAR(100) NULL DEFAULT NULL,
	nome VARCHAR(50) NULL DEFAULT NULL,
	email VARCHAR (50) NULL DEFAULT NULL,
	cpf VARCHAR (14) NULL DEFAULT NULL,
   senha varchar (40) NULL DEFAULT NULL
);

CREATE TABLE cadastro_usuario(
	id int NOT NULL auto_increment PRIMARY KEY,
    foto_perfil varchar(40) NULL DEFAULT NULL,
	nome VARCHAR(42) NULL DEFAULT NULL,
	email VARCHAR (50) NULL DEFAULT NULL,
	cpf VARCHAR (14) NULL DEFAULT NULL,
    senha varchar (40) NULL DEFAULT NULL
);

CREATE TABLE cadastro_ongs(
	id int NOT NULL auto_increment PRIMARY KEY,
	foto_pefil VARCHAR(100),
	nome VARCHAR(42) NULL DEFAULT NULL,
	cnpj VARCHAR(20) NULL DEFAULT NULL,
	endereco VARCHAR(300) NULL DEFAULT NULL,
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
	 sobre VARCHAR(1000),
	 foreign key (id) references cadastro_ongs(id)
);


CREATE TABLE sobre(
    nome_estado VARCHAR(50),
    caminho VARCHAR(250),
    historia VARCHAR(2900),   
    nome_ponto_um VARCHAR(110),
    ponto_turistico_um VARCHAR(999),
    nome_ponto_dois VARCHAR(110),
    ponto_turistico_dois VARCHAR(999),
    nome_ponto_tres VARCHAR(110),
    ponto_turistico_tres VARCHAR(999),
    caminho_um VARCHAR(800),
    caminho_dois VARCHAR(800),
    caminho_tres VARCHAR(800),
    sinopse VARCHAR(800),
    dados_gerais VARCHAR(800),
    relevo VARCHAR(999),
    clima VARCHAR(1000),
    vegetacao VARCHAR(2000),
    hidrografia VARCHAR(800),
    divisao_geografica VARCHAR(1000),
    economia VARCHAR(3000),
    cultura VARCHAR(2000),
    id_estado INT not null auto_increment primary key
);

INSERT INTO cadastro_adm VALUES (NULL,"Othávio Nakamura","othavio.nakamura@gmail.com","536.909.568-03","Hiroyuki");

INSERT INTO cadastro_adm VALUES (NULL,"Mailon Davi","mailondavi@gmail.com","436.718.228-21","admin123");

SELECT * FROM cadastro_ongs;

SELECT * FROM cadastro_usuario;

SELECT * FROM cadastro_adm;

select * from informacoes_ongs;

SELECT * FROM sobre;

SELECT * FROM cadastro_ongs as c_o INNER JOIN informacoes_ongs as i_o ON i_o.id = c_o.id;
SELECT * FROM cadastro_ongs as c_o INNER JOIN informacoes_ongs as i_o ON i_o.id = c_o.id where i_o.id=1;

DROP DATABASE site;