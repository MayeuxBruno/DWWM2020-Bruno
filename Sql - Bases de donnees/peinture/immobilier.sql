DROP DATABASE IF EXISTS immobilier;
CREATE DATABASE immobilier;
USE DATABASE immobilier;
#------------------------------------------------------------
# Table: Commune
#------------------------------------------------------------

CREATE TABLE Commune(
        id_commune        Int  Auto_increment  NOT NULL ,
        Nom_de_commune    Varchar (50) NOT NULL ,
        distance_agence   Int NOT NULL ,
        Nombre_d_habitant Int NOT NULL
	,CONSTRAINT Commune_PK PRIMARY KEY (id_commune)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Individu
#------------------------------------------------------------

CREATE TABLE Individu(
        Num_d_identification Int  Auto_increment  NOT NULL PRIMARY KEY ,
        Nom                  Varchar (50) NOT NULL ,
        Prenom               Varchar (50) NOT NULL ,
        Date_de_naissance    Date NOT NULL ,
        Num_telephone        Varchar (12) NOT NULL
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Quartier
#------------------------------------------------------------

CREATE TABLE Quartier(
        ID_Quartier      Int  Auto_increment  NOT NULL PRIMARY KEY ,
        Libelle_Quartier Varchar (60) NOT NULL ,
        id_commune       Int NOT NULL
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Type de logement
#------------------------------------------------------------

CREATE TABLE Type_de_logement(
        Type_Logement       Varchar (60) NOT NULL PRIMARY KEY ,
        Charges_forfitaires Int NOT NULL
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Logement
#------------------------------------------------------------

CREATE TABLE Logement(
        Id_Logement          Int  Auto_increment  NOT NULL PRIMARY KEY ,
        Nb                   Int NOT NULL ,
        Rue                  Varchar (60) NOT NULL ,
        Superficie           Int NOT NULL ,
        Loyer                Float NOT NULL ,
        Num_d_identification Int NOT NULL ,
        ID_Quartier          Int NOT NULL ,
        Type_Logement        Varchar (60) NOT NULL	
)ENGINE=InnoDB;

ALTER TABLE quartier ADD CONSTRAINT FK_Quartier_Commune FOREIGN KEY (id_commune) REFERENCES Commune(id_commune);
ALTER TABLE Logement ADD CONSTRAINT FK_Logement_Individu FOREIGN KEY (Num_d_identification) REFERENCES Individu(Num_d_identification);
ALTER TABLE Logement ADDCONSTRAINT FK_Logement_Quartier FOREIGN KEY (ID_Quartier) REFERENCES Quartier(ID_Quartier);
ALTER TABLE Logement ADD CONSTRAINT FK_Logement_Type_de_logement FOREIGN KEY (Type_Logement) REFERENCES Type_de_logement(Type_Logement);

