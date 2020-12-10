DROP DATABASE IF EXISTS voitures;
CREATE DATABASE voitures;
USE voitures;

#------------------------------------------------------------
# Table: Marques
#------------------------------------------------------------

CREATE TABLE Marques(
        idMarque     Int  Auto_increment  NOT NULL PRIMARY KEY,
        marque       Varchar (50) NOT NULL ,
)ENGINE=InnoDB;