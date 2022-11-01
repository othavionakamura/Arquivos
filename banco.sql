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

CREATE TABLE sobre(

caminho varchar(1500),
historia varchar(2000),
ponto_turistico_um varchar(2000),
ponto_turistico_dois varchar(2000),
ponto_turistico_tres varchar(2000),
caminho_um varchar(2000), 
caminho_dois varchar(2000),
caminho_tres varchar(2000),
sinopse varchar(2000),
dados_gerais varchar(2000),
relevo varchar(2000),
clima varchar(2000),
vegetacao varchar(2000),
hidrografia varchar(2000),
divisao_geografica varchar(2000),
economia varchar(2000),
cultura varchar(2000),
id_estado int auto_increment primary key
);


INSERT INTO sobre VALUES(
	"https://besthqwallpapers.com/Uploads/21-7-2018/60023/thumb2-flag-of-bahia-4k-state-of-brazil-silk-texture-bahia-flag.jpg",
	"A Bahia é um estado da Região Nordeste do Brasil. A história do povoamento do território baiano está atrelada à chegada dos portugueses no Brasil, em 1500, quando se iniciou a colonização brasileira. A cidade de Salvador, capital da Bahia, foi também a primeira capital do Brasil.",
	"O Parque Nacional da Chapada Diamantina é um parque nacional na região da Chapada Diamantina do Estado da Bahia, Brasil. O terreno é acidentado e coberto principalmente pela flora do bioma Caatinga",
	"O Elevador Lacerda é um sistema de transporte público da cidade de Salvador, capital do estado brasileiro da Bahia. Trata-se do primeiro elevador urbano do mundo. Em 8 de dezembro de 1873, quando a primeira torre foi inaugurada, era o elevador mais alto do mundo, com 63 metros",
	"A praia do Porto da Barra está situada no bairro da Barra, banhada pela Baía de Todos os Santos. Localiza-se no bairro da Barra; limita-se ao sul pela encosta que é formada pela Ladeira da Barra, passando pelo Hospital Espanhol indo até o Farol da Barra, passando pela fortaleza de Santa Maria",
	"https://upload.wikimedia.org/wikipedia/commons/9/94/Chapada_Diamantina_2.jpg",
	"https://www.vounajanela.com/wp-content/uploads/2020/12/salvador-15.jpg",
	"https://dynamic-media-cdn.tripadvisor.com/media/photo-o/0c/3d/47/8f/vista-sureste.jpg?w=1200&h=-1&s=1",
	"A Bahia é um estado do nordeste brasileiro com paisagens que variam da costa tropical até a aridez do Sertão. A capital, Salvador, é conhecida por seu centro histórico, o Pelourinho, com uma rica arquitetura colonial do século XVII e assentado sobre a Baía de Todos-os-Santos. O Carnaval da cidade reúne foliões fantasiados que dançam ao som do samba e do axé em uma enorme festa de rua. ",
	"Capital - Salvador Área Territorial - 567.295 km² População - 15,13 Milhões Densidade demográfica - 24,82 hab/km² Fuso - Horário padrão de Brasilia  Clima - Semi - árido",
	"No território baiano o clima que predomina é o tropical, devido a isso as temperaturas são elevadas praticamente o ano todo, acima dos 26ºC, exceto na serra do Espinhaço, onde as temperaturas são amenas. O clima semi-árido se apresenta no sertão do Estado com pouca precipitação, ocasionando longos períodos de estiagem.",
	"O relevo estadual é marcado por planície litorânea, depressão ao norte e a oeste, planície no centro, além de chapadas (Chapada Diamantina) e chapadões. A altitude média é de cerca de 200 metros, e o ponto mais elevado situa-se na Serra do Barbado: 2.033 metros acima do nível do mar.",
	"Existem três tipos básicos de cobertura vegetal no território baiano, a caatinga que ocupa maior parte, a floresta tropical úmida e o cerrado.",
	"Em termos naturais, as principais bacias hidrográficas do território baiano são a bacia do rio São Francisco, a bacia do rio Paraguaçu, a bacia do rio Subaé, a bacia do rio de Contas, a bacia do rio Jequitinhonha, a bacia do rio Jequiriçá, a bacia do rio Mucuri.",
	"A Bahia é um dos estados com maior área territorial do Brasil e é dividida politicamente em 417 municípios. Os municípios baianos, conforme critérios definidos pelo Instituto Brasileiro de Geografia e Estatística (IBGE), estão agrupados em regiões intermediárias e imediatas.",
	"A economia da Bahia é composta por agropecuária, indústria, mineração, turismo e serviços. A Bahia responde por 36% do PIB do Nordeste e mais da metade das exportações da região. Dentre os estados brasileiros, conta com o sexto maior PIB.",
	"A cultura da Bahia é uma das mais ricas e diversificadas do Brasil, sendo o estado considerado um dos mais ricos centros culturais do país, conservando não apenas um rico acervo de obras religiosas, arquitetônicas, mas é berço de típicas manifestações culturais populares, quer na culinária, na música, e em praticamente.",
	NULL
);


SELECT * FROM cadastro_ongs;

SELECT * FROM cadastro_usuario;

select * from informacoes_ongs;

select * from sobre;

SELECT * FROM cadastro_ongs as c_o INNER JOIN informacoes_ongs as i_o ON i_o.id = c_o.id;
SELECT * FROM cadastro_ongs as c_o INNER JOIN informacoes_ongs as i_o ON i_o.id = c_o.id where i_o.id=1;

drop database site;