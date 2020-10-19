DROP DATABASE IF EXISTS Peinture ;
CREATE DATABASE Peinture;
USE Peinture;

CREATE TABLE Client(
	IdClientint(11) not NULL auto_increment PRIMARY KEY,
	nom varchar,
	prenom varchar,
	codePostal int,
	ville varchar
)ENGINE = InnoDB DEFAULT CHARSET=utf8;
CREATE TABLE Produit(
	IdProduitint(11) not NULL auto_increment PRIMARY KEY,
	prixUnitaire int,
	unite varchar
)ENGINE = InnoDB DEFAULT CHARSET=utf8;
CREATE TABLE Facture(
	IdFactureint(11) not NULL auto_increment PRIMARY KEY,
	accompte int,
	tva float
)ENGINE = InnoDB DEFAULT CHARSET=utf8;
