#------------------------------------------------------------
#        Script MySQL.
#------------------------------------------------------------
DROP DATABASE IF EXISTS stageInstitut;
CREATE DATABASE stageInstitut;
USE stageInstitut;

#------------------------------------------------------------
# Table: Stages
#------------------------------------------------------------

CREATE TABLE Stages(
        idStage        Int  Auto_increment  NOT NULL PRIMARY KEY ,
        codeStage      Varchar (10) NOT NULL ,
        libelleStage   Varchar (30) NOT NULL ,
        dateDebutStage Date NOT NULL
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Stagiaires
#------------------------------------------------------------

CREATE TABLE Stagiaires(
        idStagiaire      Int  Auto_increment  NOT NULL PRIMARY KEY ,
        nomStagiare      Varchar (30) NOT NULL ,
        prenomStagiaire  Varchar (30) NOT NULL ,
        adresseStagiaire Varchar (100) NOT NULL
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Participation
#------------------------------------------------------------

CREATE TABLE Participation(
        idParticipation    INT Auto_increment NOT NULL PRIMARY KEY, 
        idStage         Int NOT NULL ,
        idStagiaire     Int NOT NULL ,
        dateInscription Date NOT NULL
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Professeurs
#------------------------------------------------------------

CREATE TABLE Professeurs(
        idProfesseur     Int  Auto_increment  NOT NULL PRIMARY KEY,
        nomProfesseur    Varchar (30) NOT NULL ,
        prenomProfesseur Varchar (30) NOT NULL ,
        idMatiere        Int NOT NULL
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Matieres
#------------------------------------------------------------

CREATE TABLE Matieres(
        idMatiere      Int  Auto_increment  NOT NULL PRIMARY KEY ,
        codeMatiere    Varchar (30) NOT NULL ,
        libelleMatiere Varchar (30) NOT NULL ,
        idProfesseur   Int NOT NULL
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Contenir
#------------------------------------------------------------

CREATE TABLE Contenir(
        idContient Int Auto_increment NOT NULL PRIMARY KEY,
        idMatiere Int NOT NULL ,
        idStage   Int NOT NULL
)ENGINE=InnoDB;




ALTER TABLE Participation
	ADD CONSTRAINT FK_Participation_Stages
	FOREIGN KEY (idStage)
	REFERENCES Stages(idStage);

ALTER TABLE Participation
	ADD CONSTRAINT FK_Participation_Stagiaires
	FOREIGN KEY (idStagiaire)
	REFERENCES Stagiaires(idStagiaire);

ALTER TABLE Professeurs
	ADD CONSTRAINT FK_Professeurs_Matieres
	FOREIGN KEY (idMatiere)
	REFERENCES Matieres(idMatiere);

ALTER TABLE Matieres
	ADD CONSTRAINT FK_Matieres_Professeurs
	FOREIGN KEY (idProfesseur)
	REFERENCES Professeurs(idProfesseur);

ALTER TABLE Contenu
	ADD CONSTRAINT FK_Contenu_Matieres
	FOREIGN KEY (idMatiere)
	REFERENCES Matieres(idMatiere);

ALTER TABLE Contenu
	ADD CONSTRAINT FK_Contenu_Stages
	FOREIGN KEY (idStage)
	REFERENCES Stages(idStage);
