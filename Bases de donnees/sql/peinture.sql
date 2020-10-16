CREATE DATABASE peinture;
USE peinture;

CREATE TABLE client
(
	idClient int(11) not null Auto_increment PRIMARY KEY,
	numeo int,
	nom varchar(30),
	prenom varchar(30),
	adresse varchar(50),
	codePostal int(5),
	ville varchar(20)
)ENGINE=INNODB CHARSET=utf8;

CREATE TABLE Commande
(
	quantiteCommande double
)ENGINE=INNODB CHARSET=utf8;

CREATE TABLE Designation
(
	idDesignation int(11) not null Auto_increment PRIMARY KEY,
	libelle varchar(60),
	prixUnitaire float,
	unite varchar(4)
)ENGINE=INNODB CHARSET=utf8;

CREATE TABLE Facture
(
	idFacture int(11) not null Auto_increment PRIMARY KEY,
	dateFacture date,
	numeroFacture int(7),
	numeroDevis int(7),
	tva float,
	remise float,
	accompte int,
	modeReglement varchar(20),
	echeance date,
	idClient int(11)
	
)ENGINE=INNODB charset=utf8;

CREATE TABLE Contient
(
	quantite double
)ENGINE=INNODB charset=utf8;

ALTER TABLE Facture  ADD CONSTRAINT FK_facture_client FOREIGN KEY (idClient) REFERENCES Client(idClient);
ALTER TABLE Commande ADD CONSTRAINT FK_commande_client FOREIGN KEY (idClient) REFERENCES Client(idClient); 
ALTER TABLE Commande ADD CONSTRAINT FK_commande_designation FOREIGN KEY (idDesignation) REFERENCES Desingnation(idDesignation);
ALTER TABLE Contient ADD CONSTRAINT FK_contient_facture FOREIGN KEY (idFacture) REFERENCES Facture(idFacture);
ALTER TABLE Contient ADD CONSTRAINT FK_contient_designation FOREIGN KEY (idDesignation) REFERENCES Desigantion(idDesignation);


