#------------------------------------------------------------
#        Script MySQL.
#------------------------------------------------------------
DROP DATABASE IF EXISTS hotelstructure;
CREATE DATABASE hotelstructure;
USE hotelstructure;

#------------------------------------------------------------
# Table: Stations
#------------------------------------------------------------

CREATE TABLE Stations(
        idStation  Int(11) NOT NULL  Auto_increment  PRIMARY KEY ,
        nomStation Varchar (50) NOT NULL ,
        altitude   Int NOT NULL
)ENGINE=InnoDB DEFAULT CHARSET=utf8;


#------------------------------------------------------------
# Table: Hotels
#------------------------------------------------------------

CREATE TABLE Hotels(
        idHotel        Int(11) NOT NULL  Auto_increment  PRIMARY KEY ,
        nomHotel       Varchar (50) NOT NULL ,
        categorieHotel Varchar (30) NOT NULL ,
        adresseHotel   Varchar (50) NOT NULL ,
        cpHotel        Varchar (5) ,
        villeHotel     Varchar (30) NOT NULL ,
        idStation      Int NOT NULL
)ENGINE=InnoDB DEFAULT CHARSET=utf8;


#------------------------------------------------------------
# Table: Clients
#------------------------------------------------------------

CREATE TABLE Clients(
        idClient      Int(11) NOT NULL  Auto_increment  PRIMARY KEY ,
        nomClient     Varchar (30) NOT NULL ,
        prenomClient  Varchar (30) NOT NULL ,
        adresseClient Varchar (50) NOT NULL ,
        cpClient      Varchar (5)  ,
        villeClient   Varchar (50) NOT NULL
)ENGINE=InnoDB DEFAULT CHARSET=utf8;


#------------------------------------------------------------
# Table: Chambres
#------------------------------------------------------------

CREATE TABLE Chambres(
        idChambre       Int(11) NOT NULL  Auto_increment  PRIMARY KEY ,
        numeroChambre   Int NOT NULL ,
        typeChambre     Varchar (50) NOT NULL ,
        capaciteChambre Int NOT NULL ,
        idHotel         Int NOT NULL
	
)ENGINE=InnoDB DEFAULT CHARSET=utf8;


#------------------------------------------------------------
# Table: Reservation
#------------------------------------------------------------

CREATE TABLE Reservations(
        idReservation   Int(11) NOT NULL  Auto_increment  PRIMARY KEY ,
        idChambre       Int NOT NULL ,
        idClient        Int NOT NULL ,
        dateReservation Date NOT NULL ,
        arrhes          Float NOT NULL ,
        dateDebutSejour Date NOT NULL ,
        dateFinSejour   Date NOT NULL ,
        prix            Float NOT NULL
)ENGINE=InnoDB DEFAULT CHARSET=utf8;

ALTER TABLE Hotels ADD CONSTRAINT FK_Hotels_Stations FOREIGN KEY (idStation) REFERENCES Stations(idStation);
ALTER TABLE Chambres ADD CONSTRAINT FK_Chambres_Hotels FOREIGN KEY (idHotel) REFERENCES Hotels(idHotel);
ALTER TABLE Reservations ADD CONSTRAINT FK_Reservations_Chambres FOREIGN KEY (idChambre) REFERENCES Chambres(idChambre);
ALTER TABLE Reservations ADD CONSTRAINT FK_Reservations_Clients FOREIGN KEY (idClient) REFERENCES Clients(idClient);