DROP DATABASE IF EXISTS voiture;
CREATE DATABASE voiture;
USE voiture;

CREATE TABLE marques(
	idMarque int(11) not NULL auto_increment PRIMARY KEY,
	libelleMarque varchar(50)
)ENGINE=Innodb DEFAULT CHARSET = utf8;

CREATE TABLE modeles (
	idModele int(11) not NULL auto_increment PRIMARY KEY,
	nomModele varchar (50),
	idMarque Int
)ENGINE=Inoodb DEFAULT CHARSET=utf8;

ALTER TABLE modeles ADD CONSTRAINT FK_modeles_marques FOREIGN KEY (idMarque) REFERENCES marques(idMarque);