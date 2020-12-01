#------------------------------------------------------------
#        Script MySQL.
#------------------------------------------------------------
DROP DATABASE IF EXISTS peinture;
CREATE DATABASE peinture;
USE peinture; 

#------------------------------------------------------------
# Table: Clients
#------------------------------------------------------------

CREATE TABLE Clients(
        idClient         Int NOT NULL Auto_increment PRIMARY KEY ,
        nomClient        Varchar (50) NOT NULL ,
        prenomClient     Varchar (50) NOT NULL ,
        adresseClient    Varchar (100) NOT NULL ,
        codePostalClient Int NOT NULL ,
        villeClient      Varchar (50) NOT NULL ,
        genre            Varchar (50) NOT NULL
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: UnitesDeMesure
#------------------------------------------------------------

CREATE TABLE UnitesDeMesure(
        idUnite      Int  NOT NULL Auto_increment PRIMARY KEY ,
        LibelleUnite Varchar (50) NOT NULL
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Produits
#------------------------------------------------------------

CREATE TABLE Produits(
        idProduit    Int  NOT NULL Auto_increment  PRIMARY KEY ,
        nomProduit   Varchar (60) NOT NULL ,
        prixUnitaire Double NOT NULL ,
        idUnite      Int NOT NULL
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Factures
#------------------------------------------------------------

CREATE TABLE Factures(
        idFacture         Int  Auto_increment  NOT NULL PRIMARY KEY,
        numeroDevis       Int NOT NULL ,
        dateFacture       Date NOT NULL ,
        tvaFacture        Int NOT NULL COMMENT "En pourcentage"  ,
        remiseFacture     Int NOT NULL ,
        acompteFacture    Int NOT NULL ,
        conditionPaiement Varchar (50) NOT NULL ,
        echeancePaiement  Varchar (50) NOT NULL ,
        montant           Float NOT NULL ,
        idClient          Int NOT NULL	
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: achete
#------------------------------------------------------------

CREATE TABLE achete(
        idAchete        Int NOT NULL Auto_increment PRIMARY KEY,
        idProduit       Int NOT NULL ,
        idClient        Int NOT NULL ,
        quantiteAchetee Double NOT NULL
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: contient
#------------------------------------------------------------

CREATE TABLE contient(
        idContient       Int NOT NULL Auto_increment PRIMARY KEY,
        idFacture        Int NOT NULL ,
        idProduit        Int NOT NULL ,
        quantiteFacturee Double NOT NULL
)ENGINE=InnoDB;

ALTER TABLE Produits ADD CONSTRAINT FK_Produits_UnitesDeMesure FOREIGN KEY (idUnite) REFERENCES UnitesDeMesure(idUnite);
ALTER TABLE Factures ADD CONSTRAINT FK_Factures_Clients FOREIGN KEY (idClient) REFERENCES Clients(idClient);
ALTER TABLE achete ADD CONSTRAINT FK_achete_Produits FOREIGN KEY (idProduit) REFERENCES Produits(idProduit);
ALTER TABLE achete ADD CONSTRAINT FK_achete_Clients FOREIGN KEY (idClient) REFERENCES Clients(idClient);
ALTER TABLE contient ADD CONSTRAINT FK_contient_Factures FOREIGN KEY (idFacture) REFERENCES Factures(idFacture);
ALTER TABLE contient ADD CONSTRAINT FK_contient_Produits FOREIGN KEY (idProduit) REFERENCES Produits(idProduit);