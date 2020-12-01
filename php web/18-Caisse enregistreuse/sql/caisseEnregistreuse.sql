#------------------------------------------------------------
#        Script MySQL.
#------------------------------------------------------------
CREATE DATABASE IF NOT EXISTS caisseenregistreuse;
USE caisseenregistreuse;


#------------------------------------------------------------
# Table: Users
#------------------------------------------------------------

CREATE TABLE Users(
        idUser      Int  Auto_increment PRIMARY KEY NOT NULL ,
        identifiant Varchar (50) NOT NULL ,
        motDePasse  Varchar (50) NOT NULL ,
        role        Int NOT NULL
)ENGINE=InnoDB DEFAULT CHARSET=utf8;


#------------------------------------------------------------
# Table: Tva
#------------------------------------------------------------

CREATE TABLE Tva(
        idTva   Int  Auto_increment  PRIMARY KEY  NOT NULL ,
        tauxTva Float NOT NULL
)ENGINE=InnoDB DEFAULT CHARSET=utf8;


#------------------------------------------------------------
# Table: Categories
#------------------------------------------------------------

CREATE TABLE Categories(
        idCategorie      Int  Auto_increment  PRIMARY KEY  NOT NULL ,
        libelleCategorie Varchar (50) NOT NULL
)ENGINE=InnoDB DEFAULT CHARSET=utf8;


#------------------------------------------------------------
# Table: Articles
#------------------------------------------------------------

CREATE TABLE Articles(
        idArticle      Int  Auto_increment  PRIMARY KEY  NOT NULL ,
        libelleArticle Varchar (50) NOT NULL ,
        prixHt         Float NOT NULL ,
        codeBarre      Varchar (50) NOT NULL ,
        idTva          Int NOT NULL ,
        idCategorie    Int NOT NULL
)ENGINE=InnoDB DEFAULT CHARSET=utf8;



#------------------------------------------------------------
# Table: Caisses
#------------------------------------------------------------

CREATE TABLE Caisses(
        idCaisse    Int  Auto_increment  PRIMARY KEY  NOT NULL ,
        nomCaisse   Varchar (50) NOT NULL ,
        totalCaisse float NOT NULL ,
        date        Date NOT NULL ,
        idUser      Int NOT NULL
)ENGINE=InnoDB DEFAULT CHARSET=utf8;


#------------------------------------------------------------
# Table: ModePaiements
#------------------------------------------------------------

CREATE TABLE ModePaiements(
        idModePaiement   Int  Auto_increment PRIMARY KEY  NOT NULL ,
        typePaiement Varchar (50) NOT NULL
)ENGINE=InnoDB DEFAULT CHARSET=utf8;


#------------------------------------------------------------
# Table: Tickets
#------------------------------------------------------------

CREATE TABLE Tickets(
        idTicket   Int  Auto_increment PRIMARY KEY  NOT NULL ,
        prixHT     Float NOT NULL ,
        date       Date NOT NULL ,
        montantTVA Float NOT NULL
)ENGINE=InnoDB DEFAULT CHARSET=utf8;


#------------------------------------------------------------
# Table: LigneTickets
#------------------------------------------------------------

CREATE TABLE ligneTickets(
        idLigneTicket Int  Auto_increment PRIMARY KEY NOT NULL ,
        quantite  Int NOT NULL ,
        prixHt  float NOT NULL ,
        montantTva  float NOT NULL ,
        idTicket  Int NOT NULL ,
        idArticle Int NOT NULL
)ENGINE=InnoDB DEFAULT CHARSET=utf8;


#------------------------------------------------------------
# Table: Paiements
#------------------------------------------------------------

CREATE TABLE Paiements(
        idPaiement  Int  Auto_increment  PRIMARY KEY  NOT NULL ,
        idModePaiement Int NOT NULL ,
        idTicket   Int NOT NULL ,
        prixTTC    Float NOT NULL
)ENGINE=InnoDB DEFAULT CHARSET=utf8;



ALTER TABLE `articles`
  ADD CONSTRAINT `fk_articles_tva` FOREIGN KEY (`idTva`) REFERENCES `Tva` (`idTva`);

ALTER TABLE `articles`
  ADD CONSTRAINT `fk_articles_categories` FOREIGN KEY (`idCategorie`) REFERENCES `Categories` (`idCategorie`);

ALTER TABLE `caisses`
  ADD CONSTRAINT `fk_caisses_users` FOREIGN KEY (`idUser`) REFERENCES `Users` (`idUser`);

ALTER TABLE `ligneTickets`
  ADD CONSTRAINT `fk_ligneTickets_tickets` FOREIGN KEY (`idTicket`) REFERENCES `Tickets` (`idTicket`);

ALTER TABLE `ligneTickets`
  ADD CONSTRAINT `fk_ligneTickets_articles` FOREIGN KEY (`idArticle`) REFERENCES `Articles` (`idArticle`);

ALTER TABLE `paiements`
  ADD CONSTRAINT `fk_paiements_ModePaiements` FOREIGN KEY (`idModePaiement`) REFERENCES `ModePaiements` (`idModePaiement`);

ALTER TABLE `paiements`
  ADD CONSTRAINT `fk_paiements_Ticket` FOREIGN KEY (`idTicket`) REFERENCES `Tickets` (`idTicket`);



