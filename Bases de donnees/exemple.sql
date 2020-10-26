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
18- SELECT `salaire`,`nom` from `employe`
    WHERE `nodep`=41 
    ORDER BY `salaire`
19- SELECT `salaire`,`nom` from `employe`
    WHERE `nodep`=41 
    ORDER BY `salaire` DESC
