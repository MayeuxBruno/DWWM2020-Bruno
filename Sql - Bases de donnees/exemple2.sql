1. Rechercher le prénom des employés et le numéro de la région de leur département.

1 - SELECT `prenom`,`noregion`,`nodept` from employe
    INNER JOIN dept ON employe.nodep=dept.nodept
    
2.Rechercher le numéro du département, le nom du département, le nom des employés classés par numéro de département (renommer les tables utilisées)

2 - SELECT `nodept`,dept.nom AS `Nom Departement`,employe.nom AS `Nom Employe` FROM dept
    INNER JOIN employe ON employe.nodep=dept.nodept
    ORDER BY `nodept`

3.Rechercher le nom des employés du département Distribution. 

3 - SELECT employe.nom FROM `employe`
   INNER JOIN dept ON employe.nodep=dept.nodept
   WHERE dept.nom="distribution"


4.Rechercher le nom et le salaire des employés qui gagnent plus que leur patron, et le nom et le salaire de leur patron

4 - SELECT `nom` AS "Nom Employé", `salaire` AS "Salaire Employé", 
    (SELECT `nom` FROM employe WHERE `titre`="président") AS "Nom Supérieur", 
    (SELECT `salaire` FROM employe WHERE `titre`="président") AS "Salaire supérieur" 
    FROM `employe` 
    WHERE `salaire` >(SELECT `salaire` FROM employe WHERE `titre`="président") 

5.Rechercher le nom et le titre des employés qui ont le même titre que Amartakaldire.

5 -  SELECT `nom`,`titre` 
     FROM `employe`
     WHERE `titre` IN (SELECT `titre` FROM `employe` WHERE `nom`="Amartakaldire")

6.Rechercher le nom, le salaire et le numéro de département des employés qui gagnent plus qu un seul employé du département 31, classés par numéro de département et salaire. 

6 -  SELECT `nom`,`salaire` 
     FROM `employe`
     WHERE `salaire` > ANY (SELECT `salaire` FROM `employe` WHERE `nodep`="31")
     ORDER BY nodep,salaire

7.Rechercher le nom, le salaire et le numéro de département des employés qui gagnent plus que tous les employés du département 31, classés par numéro de département et salaire. 

7 -  SELECT `nom`,`salaire` 
     FROM `employe`
     WHERE `salaire` > (SELECT MAX(`salaire`) FROM `employe` WHERE `nodep`="31")
     ORDER BY nodep,salaire

8.Rechercher le nom et le titre des employés du service 31qui ont un titre que l on trouve dans le département 32.

8 - SELECT `nom`, `titre` 
    FROM `employe`
    WHERE `nodep`=31 AND titre IN (SELECT `titre` FROM `employe` WHERE `nodep`=32 )

9.Rechercher le nom et le titre des employés du service 31qui ont un titre l on ne trouve pas dans le département 32.

9 - SELECT `nom`, `titre` 
    FROM `employe`
    WHERE `nodep`=31 AND titre NOT IN (SELECT `titre` FROM `employe` WHERE `nodep`=32 )

10.Rechercher le nom, le titre et le salaire des employés qui ont le même titre et le même salaire que Fairent. 

10 - SELECT `nom`, `titre` 
     FROM `employe`
     WHERE titre = (SELECT `titre` FROM `employe` WHERE     `nom`="Fairent")
     AND  salaire = (SELECT `salaire` FROM `employe` WHERE `nom`="Fairent")

11.Rechercher le numéro de département, le nom du département, le nom des employés, en affichant aussi les départements dans lesquels il n y a personne, classés par nuéro de département.

11 - SELECT `nodept`,dept.nom,employe.nom FROM `dept`
     LEFT JOIN employe ON employe.nodep =dept.nodept
     ORDER BY `nodep`

 11- SELECT employe.nodep as "Numero dep employe", dept.nom as "nom departement", employe.nom as "nom employe"
    FROM employe RIGHT JOIN dept ON employe.nodep = dept.nodept
    ORDER BY employe.nodep;

12.Calculer le nombre d employés de chaque titre.

12 - SELECT `titre`, COUNT(*) AS `Total`
     FROM employe
     GROUP BY `titre`
     ORDER BY `total`

13.Calculer la moyenne des salaires et leur somme, par région.

13 - SELECT `noregion`, AVG(`salaire`) AS `Moyenne`, SUM(`salaire`) AS `Somme`
     FROM employe
     INNER JOIN dept ON employe.nodep=dept.nodept
     GROUP BY `noregion`

14.Afficher les numéros des départements ayant au moins 3 employés

14- SELECT nodep, COUNT(*)
    FROM employe
    GROUP BY nodep
    HAVING COUNT(*) >= 3

14- SELECT nodep FROM employe GROUP BY nodep HAVING COUNT(nodep)>2

15.Afficher les lettres qui sont l initiale d au moins trois employés.

15- SELECT init FROM (SELECT init ,COUNT(*) as somme FROM (SELECT LEFT(`nom`,1) as init FROM `employe`) as i GROUP BY init) as e WHERE somme>=3 

16.Rechercher le salaire maximum et le salaire minimum parmi tous les salariés et l écart entre les deux.

16 - SELECT MAX(salaire) as "Salaire maximum", MIN(salaire)as "Salaire minimum", (max(salaire)-min(salaire)) as "Ecart entre les deux"
from employe

17.Rechercher le nombre de titres différents. 

17 -SELECT COUNT(DISTINCT titre) as "Nombre de titres différents"
FROM employe

18.Pour chaque titre, compter le nombre d employés possédant ce titre. 

18 -SELECT COUNT(noemp) as "Nb Employe",`titre`
FROM employe
GROUP BY `titre`

19.Pour chaquenom dedépartement,afficher le nom du département et lenombre d employés.

19 - SELECT 
20.Rechercher les titres et la moyenne des salaires par titre dont la moyenne est supérieure à la moyenne des salaires des Représentants.
21.Rechercher le nombre de salaires renseignés et le nombre de taux de commission renseignés
