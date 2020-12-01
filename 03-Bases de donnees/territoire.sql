DROP DATABASE IF EXISTS territoire;
CREATE DATABASE territoire;
USE territoire;

CREATE TABLE Regions(
	idRegion Int(14) not null auto_increment PRIMARY KEY,
	nomRegion Varchar(50),
	nbDepartements Int
)ENGINE = Innodb;

CREATE TABLE Departements(
	idDepartement Int(14) not null auto_increment PRIMARY KEY,
	nomDepartement Varchar(50),
	idRegion Int 
)ENGINE = Innodb;

ALTER TABLE Departements ADD CONSTRAINT FK_Departements_Regions FOREIGN KEY (idRegion) REFERENCES Regions(idRegion);