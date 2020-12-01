DROP DATABASE IF EXISTS Agence;
CREATE DATABASE Agence;
USE Agence;

CREATE TABLE Individus (
	idIndividus int(11) not NULL auto_increment PRIMARY KEY,
	nom varchar(50),
	prenom varchar(50),
	dateDeNaissance date,
	numTel varchar (12)
)ENGINE = Innodb DEFAULT charset=utf8;

CREATE TABLE Logements (
	idLogement int(11) not NULL auto_increment PRIMARY KEY,
	numRue int,
	rue varchar (50),
	superficie int,
	loyer float,
	idIndividus int(11),
	typeLogement int,
	idQuartier int(11)
)ENGINE = Innodb DEFAULT charset=utf8;

CREATE TABLE TypesLogements(
	typeLogement int(11) not NULL auto_increment PRIMARY KEY,
	charges int
)ENGINE=Innodb DEFAULT charset=utf8;

CREATE TABLE Quartiers (
	idQuartier int(11) not NULL auto_increment PRIMARY KEY,
	libelleQuartier varchar (50),
	idCommune int(11)
)ENGINE = Innodb DEFAULT charset=utf8;

CREATE TABLE Communes (
	idCommune int(11) not NULL auto_increment PRIMARY KEY,
	nomCommune varchar(50),
	distanceAgence int,
	nbrAgence int
)ENGINE=Innodb DEFAULT charset=utf8;

ALTER TABLE Logements ADD CONSTRAINT FK_Logements_Individus FOREIGN KEY (idIndividus) REFERENCES Individus(idIndividus);
ALTER TABLE Logements ADD CONSTRAINT FK_Logements_TypesLogements FOREIGN KEY (typeLogement) REFERENCES TypesLogements(typeLogement); 
ALTER TABLE Logements ADD CONSTRAINT FK_Logements_Quartiers FOREIGN KEY (idQuartier) REFERENCES Quartiers(idQuartier);
ALTER TABLE Quartiers ADD CONSTRAINT FK_Quartiers_Communes FOREIGN KEY (idCommune) REFERENCES Communes(idCommune);  
 