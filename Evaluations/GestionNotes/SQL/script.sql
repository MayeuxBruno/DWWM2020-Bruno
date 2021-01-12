#------------------------------------------------------------
#        Script MySQL.
#------------------------------------------------------------
DROP DATABASE IF EXISTS GestionNotes;
CREATE DATABASE GestionNotes;
USE GestionNotes;

#------------------------------------------------------------
# Table: eleves
#------------------------------------------------------------

CREATE TABLE eleves(
        idEleve     Int(11) NOT NULL auto_increment PRIMARY KEY,
        NomEleve    Varchar (50) NOT NULL ,
        PrenomEleve Varchar (50) NOT NULL ,
        Classe      Varchar (50) NOT NULL
)ENGINE=InnoDB DEFAULT CHARSET=utf8;


#------------------------------------------------------------
# Table: matieres
#------------------------------------------------------------

CREATE TABLE matieres(
        idMatiere      Int(11)  NOT NULL Auto_increment PRIMARY KEY ,
        LibelleMatiere Varchar (50) NOT NULL
)ENGINE=InnoDB DEFAULT CHARSET=utf8;


#------------------------------------------------------------
# Table: utilisateurs
#------------------------------------------------------------

CREATE TABLE utilisateurs(
        idUtilisateur     Int (11) NOT NULL Auto_increment PRIMARY KEY ,
        Login             Varchar (50) NOT NULL ,
        NomUtilisateur    Varchar (50) NOT NULL ,
        PrenomUtilisateur Varchar (50) NOT NULL ,
        MotDePasse        Varchar (50) NOT NULL ,
        Role              Int(11) NOT NULL ,
        IdMatiere         Int(11) NOT NULL
)ENGINE=InnoDB DEFAULT CHARSET=utf8;


#------------------------------------------------------------
# Table: suivis
#------------------------------------------------------------

CREATE TABLE suivis(
        idSuivis    Int (11) NOT NULL Auto_increment PRIMARY KEY ,
        idEleve     Int (11) NOT NULL ,
        idMatiere   Int (11) NOT NULL ,
        Note        Int (11) NOT NULL ,
        Coefficient Int (11) NOT NULL
)ENGINE=InnoDB DEFAULT CHARSET=utf8;

ALTER TABLE suivis ADD CONSTRAINT FK_suivis_eleves FOREIGN KEY (idEleve) REFERENCES eleves(idEleve);
ALTER TABLE suivis ADD CONSTRAINT FK_suivis_matieres FOREIGN KEY (idMatiere) REFERENCES matieres(idMatiere);