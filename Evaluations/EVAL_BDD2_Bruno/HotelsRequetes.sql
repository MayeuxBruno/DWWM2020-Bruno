1 - SELECT `nomHotel`, `villeHotel` FROM `hotels`

2 - SELECT `nomClient`,`prenomClient`,`adresseClient`,`villeClient` FROM `clients` WHERE `nomClient`="White"

3 - SELECT `nomStation`,`altitudeStation` FROM `stations` WHERE `altitudeStation`<1000

4 - SELECT `numChambre`,`capaciteChambre` FROM `chambres` WHERE `capaciteChambre`>1

5 - SELECT `nomClient`,`villeClient` FROM `clients` WHERE `villeClient`!="Londres"

6 - SELECT `nomStation`,`nomHotel`,`categorieHotel`,`villeHotel` 
    FROM `hotels` 
    INNER JOIN stations ON hotels.idStation=stations.idStation

7 - SELECT `numChambre` AS "N Chambre",`nomHotel`AS "Nom Hotel",`categorieHotel`AS "Categorie",`villeHotel`AS "Ville" 
    FROM `chambres` 
    INNER JOIN hotels ON chambres.idhotel=hotels.idhotel

8 - SELECT CONCAT(`nomClient`," ",`prenomClient`) AS "Nom Client",`dateReservationSejour` AS "Date Reservation",`dateDebutSejour` AS "Debut Sejour", `dateFinSejour` AS "Fin Sejour"
    FROM `reservations` AS r
    INNER JOIN clients AS c ON r.idClient=c.idClient

9 - SELECT `numChambre` AS "No Chambre",`nomHotel` AS "Nom Hotel",`nomStation` AS "Nom Station"  
    FROM `chambres` AS c
    INNER JOIN hotels AS h ON h.idhotel=c.idhotel
    INNER JOIN stations AS s ON h.idstation=s.idstation

10 - SELECT `numChambre` AS "No Chambre",`nomHotel` AS "Nom Hotel",`categorieHotel` AS "Categorie",`villehotel`AS "Ville",`capaciteChambre` AS "Capacité"  
     FROM `chambres` AS c
     INNER JOIN hotels AS h ON h.idhotel=c.idhotel
     WHERE `capaciteChambre`>1 AND `villehotel`="Bretou"

11 - SELECT `nomstation` AS "Nom Station", count(idhotel) AS "Nbr Hotels"  FROM `hotels` AS h
     RIGHT JOIN stations AS s ON h.idStation=s.idStation
     GROUP BY nomstation

12 - SELECT `nomstation` AS "Nom Station", count(idchambre) AS "Nbr CHambres"  FROM `chambres` AS c
     INNER JOIN hotels AS h ON c.idhotel=h.idhotel
     RIGHT JOIN stations AS s ON h.idStation=s.idStation
     GROUP BY nomstation

13 - 

14 - SELECT `nomhotel` FROM `hotels` as h
     INNER JOIN chambres AS ch ON ch.idhotel=h.idhotel
     INNER JOIN reservations as r ON r.idchambre=ch.IdChambre
     INNER JOIN clients as c ON r.idclient=c.idclient
     WHERE `nomclient`="squire"

15 - SELECT `nomStation`,AVG(DATEDIFF(`dateFinSejour`,`dateDebutSejour`)) AS "Sejour Moyen" FROM `reservations` AS r
     INNER JOIN chambres AS c ON c.idchambre=r.idchambre
     RIGHT JOIN hotels AS h ON h.idhotel=c.idHotel
     RIGHT JOIN stations AS s ON h.idstation=s.idStation
     GROUP BY `nomstation`

16 - CREATE VIEW StationChambre AS SELECT s.nomstation AS "Nom Station",h.nomhotel AS "Nom Hotel",h.categoriehotel AS "Categorie Hotel",h.adressehotel AS "Adresse Hotel",h.villehotel AS "Ville Hotel",c.numchambre AS "Numero Chambre",c.typechambre AS "Type Chambre",c.capaciteChambre AS "Capacite Chambre",c.idChambre
     FROM hotels as h
     INNER JOIN chambres AS c ON c.idhotel=h.idHotel
     INNER JOIN stations AS s ON s.idstation=h.idstation
