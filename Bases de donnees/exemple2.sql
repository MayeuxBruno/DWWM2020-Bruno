0.1 - SELECT `prenom`,`noregion`,dept.nom FROM `employe`
      JOIN `dept` ON employe.nodep=dept.nodept
0.2 - SELECT `nodept`,dept.nom,employe.nom
