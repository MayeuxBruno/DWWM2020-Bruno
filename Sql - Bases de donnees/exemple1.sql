1 - SELECT * from employe
2 - SELECT * from dept
    SELECT `nodept`,`nom` from dept
3 - SELECT CONCAT(`nom`," ",`prenom`) AS "Nom Employe",`dateemb`,`nosup`,
            `nodep`,`salaire` from employe
4 - SELECT `titre` from employe
5 - SELECT DISTINCT(`titre`) from employe
6 - SELECT CONCAT (`nom`," ",`prenom`) AS "Nom Employe",`nodep` from `employe`
    WHERE `titre`="secrétaire"
7 - SELECT CONCAT (`nom`," ",`prenom`) AS "Nom Employe",`nodep` from `employe`
    WHERE `nodep` > 40
8 - SELECT CONCAT (`nom`," ",`prenom`) AS "Nom Employe" from `employe`
    WHERE `nom`<`prenom`
9 - SELECT CONCAT (`nom`," ",`prenom`) AS "Nom Employe",`salaire`,`nodep` from `employe`
    WHERE `titre`="représentant" AND `nodep`=35 AND `salaire`>20000 
10- SELECT CONCAT (`nom`," ",`prenom`) AS "Nom Employe",`salaire`,`nodep` from `employe`
    WHERE `titre`="représentant" OR `titre`="président"
11- SELECT CONCAT (`nom`," ",`prenom`) AS "Nom Employe",`salaire`,`nodep` from `employe`
    WHERE (`titre`="représentant" OR `titre`="secrétaire")  AND `nodep`=34
12- SELECT CONCAT (`nom`," ",`prenom`) AS "Nom Employe",`salaire`,`nodep` from `employe`
    WHERE `titre`="représentant" OR (`titre`="secrétaire"  AND `nodep`=34)
13- SELECT `nom`,`salaire`,`nodep` from `employe`
    WHERE `salaire`>=20000 AND `salaire`<= 30000
15- SELECT `nom` from `employe` 
    WHERE `nom` LIKE "H%"
16- SELECT `nom` from `employe`
    WHERE `nom` LIKE "%n"
17- SELECT `nom` from `employe`
    WHERE `nom` LIKE "__u%"
17- SELECT `nom` FROM `employe` WHERE SUBSTRING(`nom`,3,1)="u"
18- SELECT `salaire`,`nom` from `employe`
    WHERE `nodep`=41 
    ORDER BY `salaire`
19- SELECT `salaire`,`nom` from `employe`
    WHERE `nodep`=41 
    ORDER BY `salaire` DESC
20- SELECT `titre`,`salaire`,`nom` from `employe`
    WHERE `nodep`=41 
    ORDER BY `titre`,`salaire` DESC
21- SELECT `tauxcom`,`salaire`,`nom` from `employe`
    ORDER BY `tauxcom`
22- SELECT `nom`,`salaire`,`tauxcom`,`titre` FROM `employe`
    WHERE `tauxcom` IS NULL
23- SELECT `nom`,`salaire`,`tauxcom`,`titre` FROM `employe`
    WHERE `tauxcom` IS NOT NULL
24- SELECT `nom`,`salaire`,`tauxcom`,`titre` FROM `employe`
    WHERE `tauxcom` < 15
25- SELECT `nom`,`salaire`,`tauxcom`,`titre` FROM `employe`
    WHERE `tauxcom` > 15
26- SELECT `nom`,`salaire`,`tauxcom`,ROUND(((`tauxcom`/100)*`salaire`),2) AS `comission` FROM `employe`
    WHERE `tauxcom` IS NOT NULL
27- SELECT `nom`,`salaire`,`tauxcom`,ROUND(((`tauxcom`/100)*`salaire`),2) AS `comission` FROM `employe`
    WHERE `tauxcom` IS NOT NULL
    ORDER BY `tauxcom`
28- SELECT CONCAT(`nom`," ",`prenom`) AS `Nom Employe` FROM `employe`
29- SELECT SUBSTRING(`nom`,1,5) FROM `employe`
30- SELECT `nom`,LOCATE("r",`nom`) AS `rang` FROM `employe`
31- SELECT `nom`,UPPER (`nom`) AS `Majuscule`,LOWER (`nom`) AS `Minuscule` FROM `employe`
    WHERE `nom`="Vrante"
32- SELECT `nom`,LENGTH(`nom`) AS `Nb Caracteres` from `employes`

