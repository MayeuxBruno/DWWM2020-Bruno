DROP DATABASE IF EXISTS Guerre;
CREATE DATABASE Guerre;
USE Guerre;

CREATE TABLE Soldat(
	idSoldat int(11) not NULL auto_increment PRIMARY KEY,
	nomSoldat varchar(50),
	prenomSoldat varchar(50),
	dateDeces date,
	idGrade int(11),
	idUnite int(11)
)ENGINE=Innodb DEFAULT CHARSET = utf8;

CREATE TABLE Unite (
	idUnite int(11) not NULL auto_increment PRIMARY KEY,
	libelleUnite varchar (50)
)ENGINE=Inoodb DEFAULT CHARSET=utf8;

CREATE TABLE Grade (
	idGrade int(11) not NULL auto_increment PRIMARY KEY,
	libelleGrade varchar(50)
)ENGINE=Inoodb DEFAULT CHARSET=utf8;

CREATE TABLE Blessure(
	idBlessure int(11) not NULL auto_increment PRIMARY KEY,
	typeBlessure varchar(50)
)ENGINE=Innodb DEFAULT CHARSET=utf8;

CREATE TABLE Bataille (
	idBataille int(11) not NULL auto_increment PRIMARY KEY,
	lieu varchar(50),
	dateDebut date,
	dateFin date
)ENGINE=Innodb DEFAULT CHARSET=utf8;

CREATE TABLE Participe (
	dateBlessure date,
	idSoldat int(11),
	idBataille int(11),
	idBlessure int(11)
)ENGINE=Innodb DEFAULT CHARSET=utf8;

ALTER TABLE Soldat ADD CONSTRAINT FK_Soldat_Grade FOREIGN KEY (idGrade) REFERENCES Grade(idGrade);
ALTER TABLE Soldat ADD CONSTRAINT FK_Soldat_Unite FOREIGN KEY (idUnite) REFERENCES Unite(idUnite);
ALTER TABLE Participe ADD CONSTRAINT FK_Participe_Soldat FOREIGN KEY (idSoldat) REFERENCES Soldat(idSoldat);
ALTER TABLE Participe ADD CONSTRAINT FK_Participe_Bataille FOREIGN KEY (idBataille) REFERENCES Bataille(idBataille);
ALTER TABLE Participe ADD CONSTRAINT FK_Participe_Blessure FOREIGN KEY (idBlessure) REFERENCES Blessure(idBlessure);

	