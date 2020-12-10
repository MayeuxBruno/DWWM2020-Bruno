DROP DATABASE IF EXISTS Maison ;
CREATE DATABASE Maison;
USE Maison;

CREATE TABLE Fenetre(
	IdFenetre int(11) not NULL auto_increment PRIMARY KEY,
	hauteur int,
	largeur int,
	matiere varchar(10)
)ENGINE = InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE Carrelage(
	IdCarrelage int(11) not NULL auto_increment PRIMARY KEY,
	couleur varchar(10),
	matiere varchar(20),
	libelleCarrelage varchar(50)
)ENGINE = InnoDB DEFAULT CHARSET=utf8;

