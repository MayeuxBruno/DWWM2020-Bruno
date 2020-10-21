executer les 2 instructions suivantes sur la base
ALTER TABLE commandes ADD cde_total int;
UPDATE commandes SET cde_total = quantiteCommande * (select prixArticle from articles where articles.idArticle = commandes.idArticle)

Affichez le contenu de la table commande. Qu''y a-t-il de changé dans cette table ? Comment le total de la
commande a-t-il été calculé ? 
On a ajouté une colonne intitulée cde_total.

La quantitéeCommande multiplie par le prix de l''article

Ecrire des requêtes SELECT. Vous vérifierez que le résultat de la requête correspond à votre inspection des
tables correspondantes. 

A) Afficher le montant le plus élevé de commande.
    SELECT MAX(`cde_total`) AS `Max Commande` FROM commandes
    SELECT MAX(`quantiteCommande`*articles.prixArticle) FROM `commandes` INNER JOIN articles ON commandes.idArticle = articles.idArticle;

B) Afficher le montant moyen des commandes.
    SELECT ROUND(AVG(`cde_total`),2) AS `Moyenne Commande` FROM commandes
    SELECT ROUND(AVG(commandes.quantiteCommande*articles.prixArticle),2) FROM commandes INNER JOIN articles ON commandes.idArticle=articles.idArticle

C) Afficher le montant le plus bas de commande.
    SELECT MIN(`cde_total`) AS `MIn Commande` FROM commandes
    SELECT MIN(`quantiteCommande`*articles.prixArticle) FROM `commandes` INNER JOIN articles ON commandes.idArticle = articles.idArticle;

D) Afficher le nombre de commandes qui ont été passées.
    SELECT COUNT(*) AS `Nbre de commandes` FROM `commandes`

E) Afficher le montant moyen de commande par client
   SELECT idclient,ROUND(AVG(`cde_total`),2) AS `Montant Moyen`FROM commandes GROUP BY idClient
   SELECT CONCAT(cl.nomClient," ",cl.prenomClient) AS `Nom du client`,ROUND(AVG(`cde_total`),2) AS `Montant Moyen`FROM commandes as co INNER JOIN clients as cl on co.idClient=cl.idClient GROUP BY co.idClient

F) Afficher le montant le plus élevé de commande par client.
    SELECT CONCAT(`nomClient`," ",`prenomClient`),MAX(`quantiteCommande`) AS `Quantite Max de commande` FROM `commandes` INNER JOIN clients ON commandes.idClient=clients.idClient GROUP BY `idClient`

G) Afficher le nombre de commandes par client.
    SELECT `idclient`,COUNT(`idCommande`) AS `Nombre de commande` FROM `commandes` GROUP BY `idClient`
    SELECT CONCAT(`nomClient`," ",`prenomClient`),COUNT(`idCommande`) AS `Nombre de commandes` FROM `commandes` INNER JOIN `clients` ON commandes.idClient=clients.idClient GROUP BY commandes.idClient

H) Afficher le nombre d articles commandés en moyenne par client
    SELECT `idclient`,ROUND(AVG(`quantiteCommande`),2) AS `Moy Quantite commandee` FROM `commandes` GROUP BY `idclient` 

I) Afficher le nombre d articles commandés en moyenne par article.
    SELECT `idarticle`,ROUND(AVG(`quantiteCommande`),2) AS `Moy Quantite commandee`FROM `commandes` GROUP BY `idarticle`

J) Afficher le nombre total d articles commandés par article.
    SELECT `idarticle`,SUM(`quantiteCommande`) AS `Total Commande` FROM `commandes` GROUP BY `idarticle`

K) Afficher le nombre moyen d articles par client et par date.
    SELECT `dateCommande`,`idClient`,ROUND(AVG(`quantiteCommande`),2) AS `Nb Moyen d'article` FROM`commandes` GROUP BY `idClient`,`dateCommande`

L) Afficher le nombre de commandes par jour.
    SELECT `dateCommande`,SUM(`quantiteCommande`) AS `Total Qauntite Commande` FROM `commandes` GROUP BY `dateCommande`

M) Afficher le nombre de clients dans la table.
    SELECT COUNT(*) AS `Nbr de clients` FROM `clients`

N) Afficher le nombre de clients différents qui ont passé commande.
    SELECT COUNT(DISTINCT `idClient`) AS `Nbr de Client commande` FROM `commandes`

O) Afficher le nombre d articles différents qui ont été commandés.
    SELECT COUNT(DISTINCT `idArticle`) AS `Nbr d'articles commandés` FROM `commandes`

P) Afficher le nombre de jours différents de commandes
    SELECT COUNT(DISTINCT `dateCommande`) AS `Nbre de Jours de commandes` FROM `commandes`