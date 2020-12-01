Ecrivez des requêtes SELECT (A chaquefois ,vous stockerez la requete dans un fichier texte» pour

a. Affichez la totalité de la table « client ».
	SELECT `idClient`,`nomClient`,`prenomClient`,`dateEntreeClient` FROM `clients`

b. Affichez les noms de tous les clients.
	SELECT `nomClient`,`prenomClient` FROM `clients`

c. Affichez les différentes dates de commandes sans répétition.
	SELECT DISTINCT `dateCommande` FROM `commandes`

d. Affichez les clients qui se prénomment « sophie ».
	SELECT `nomClient`,`prenomClient` FROM `clients` WHERE `prenomClient`="Sophie"

e. Affichez les numéros des articles et leur quantité commandés par le client1.
	SELECT `idClient`,`idArticle`,`quantiteCommande` FROM `commandes` WHERE `idClient`="3"

f. Affichez les noms des clients en majuscules-.
	SELECT UCASE(`nomClient`)FROM `clients`

g. Affichez les noms des clients avec la première lettre en majuscule.
	SELECT CONCAT(UPPER(LEFT(`nomClient`,1)),LOWER(RIGHT(`nomClient`,LENGTH(`nomClient`)-1))) FROM clients

h. Affichez les noms des clients qui ont 5caractères.
	SELECT `nomClient`FROM `clients` WHERE LENGTH(`nomClient`)=5

i. Affichez les noms des clients qui commencent par « t » ou qui ont un « l » en troisième position.
	SELECT `nomClient` FROM `clients` WHERE `nomClient` LIKE "__l%" UNION
	SELECT `nomClient` FROM `clients` WHERE `nomClient` LIKE "T%"

j. Affichez le numéro de client, le numéro de commande, la date de commande et la date de paiement
attendue des commandes (=date_cde+15jours).
	SELECT `idClient`,`idCommande`,`dateCommande` ,ADDDATE(`dateCommande`,15) AS 'Date De Paiement' FROM `commandes`
	SELECT `idClient`,`idCommande`,`dateCommande`,DATE_ADD(`dateCommande`,interval 15 day) AS `Date de paiement`FROM commandes

k. Affichez la date et l''heure actuelles.
	SELECT NOW()
	
l. Affichez l''ancienneté des clients.
	SELECT `nomClient`,`prenomClient`, Year(NOW())-Year(`dateEntreeClient`) AS `Ancienneté` FROM `clients`
	SELECT `nomClient`,`prenomClient`, FLOOR(DATEDIFF(NOW(),`dateEntreeClient`)/365) AS `Ancienneté` FROM `clients`
	
m. Affichez la quantité maximale achetée par un client.
	SELECT MAX(`quantiteCommande`) AS `Quantité Max` FROM `commandes`
	
n. Affichez la quantité totale achetée par le client1.
	SELECT SUM(`quantiteCommande`) AS `Somme Client 1` FROM `commandes` WHERE `idClient`="1"

o. Affichez la quantité moyenne achetée par le client 2.
	SELECT ROUND(AVG(`quantiteCommande`),2) AS `Moyenne Client 2`FROM `commandes` WHERE `idClient`="2"

p. Affichez les clients classés par ordre alphabétique de leur nom.
	SELECT CONCAT(`nomClient`," ",`prenomClient`) AS `nomDuClient` FROM `clients` ORDER BY `nomDuClient`

q. Affichez les articles classés selon leur prix décroissant. 
	SELECT `descriptionArticle`,`prixArticle` FROM `articles` ORDER BY `prixArticle` DESC


SELECT `nomClient`,`prenomClient`,`quantiteCommande`,`descriptionArticle` FROM commandes INNER JOIN clients ON commandes.idClient=clients.idClient INNER JOIN articles ON commandes.idArticle=articles.idArticle

Affiche le nom prenom du client la quantite articles commande la description le prix unitaire et le total à payer
SELECT `nomClient`,`prenomClient`,`quantiteCommande`,`descriptionArticle`,`prixArticle`,(`quantiteCommande`*`prixArticle`) AS `Prix Total` FROM commandes INNER JOIN clients ON commandes.idClient=clients.idClient INNER JOIN articles ON commandes.idArticle=articles.idArticle