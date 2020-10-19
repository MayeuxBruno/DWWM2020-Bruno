#------------------------------------------------------------
#        Script MySQL.
#------------------------------------------------------------
DROP DATABASE IF EXISTS soldat;
CREATE DATABASE soldat;
USE soldat;

#------------------------------------------------------------
# Table: Batailles
#------------------------------------------------------------

CREATE TABLE Batailles(
        idBataille   Int  Auto_increment  NOT NULL PRIMARY KEY,
        lieuBataille Varchar (50) NOT NULL ,
        dateDebut    Date NOT NULL ,
        dateFin      Date NOT NULL
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Blessures
#------------------------------------------------------------

CREATE TABLE Blessures(
        idBlessure   Int  Auto_increment  NOT NULL PRIMARY KEY,
        typeBlessure Varchar (50) NOT NULL
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Grades
#------------------------------------------------------------

CREATE TABLE Grades(
        idGrade      Int  Auto_increment  NOT NULL PRIMARY KEY,
        libelleGrade Varchar (50) NOT NULL
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Unites
#------------------------------------------------------------

CREATE TABLE Unites(
        idUnite          Int  Auto_increment  NOT NULL PRIMARY KEY,
        libelleUnite     Varchar (50) NOT NULL ,
        dateRattachement Date NOT NULL
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Soldats
#------------------------------------------------------------

CREATE TABLE Soldats(
        idSoldat         Int  Auto_increment  NOT NULL PRIMARY KEY ,
        nomSoldat        Varchar (50) NOT NULL ,
        prenomSoldat     Varchar (50) NOT NULL ,
        dateObtention    Date NOT NULL ,
        DateRAttachement Date NOT NULL ,
        idGrade          Int NOT NULL ,
        idUnite          Int NOT NULL
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Participer
#------------------------------------------------------------

CREATE TABLE Participer(
        idSoldat     Int NOT NULL ,
        idBlessure   Int NOT NULL ,
        idBataille   Int NOT NULL ,
        dateBlessure Date NOT NULL ,
        dateDeces    Date NOT NULL,
	CONSTRAINT Participer_PK PRIMARY KEY (idSoldat,idBlessure,idBataille)

	
)ENGINE=InnoDB;

ALTER TABLE Soldats ADD CONSTRAINT FK_Soldats_Grades FOREIGN KEY (idGrade) REFERENCES Grades(idGrade);
ALTER TABLE Soldats ADD CONSTRAINT FK_Soldats_Unites FOREIGN KEY (idUnite) REFERENCES Unites(idUnite);
ALTER TABLE Participer ADD CONSTRAINT FK_Participer_Soldats FOREIGN KEY (idSoldat) REFERENCES Soldats(idSoldat);
ALTER TABLE Participer ADD CONSTRAINT FK_Participer_Blessures FOREIGN KEY (idBlessure) REFERENCES Blessures(idBlessure);
ALTER TABLE Participer ADD CONSTRAINT FK_Participer_Batailles FOREIGN KEY (idBataille) REFERENCES Batailles(idBataille);
