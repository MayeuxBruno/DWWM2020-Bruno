insert into Matieres(idMatiere,libelleMatiere)Values("1","Français");		
insert into Matieres(idMatiere,libelleMatiere)Values("2","Mathematiques");		
insert into Matieres(idMatiere,libelleMatiere)Values("3","Histoire");		
insert into Matieres(idMatiere,libelleMatiere)Values("4","Geographie");		
insert into Matieres(idMatiere,libelleMatiere)Values("5","Sport");		

insert into utilisateurs(Login,NomUtilisateur,PrenomUtilisateur,MotDePasse,Role,IdMatiere)VALUES("nono","Mayeux","Bruno","nono","1","1");
insert into utilisateurs(Login,NomUtilisateur,PrenomUtilisateur,MotDePasse,Role,IdMatiere)VALUES("toto","Dupont","Toto","toto","2","2");
insert into utilisateurs(Login,NomUtilisateur,PrenomUtilisateur,MotDePasse,Role,IdMatiere)VALUES("tata","Durand","Tata","tata","2","3");

insert into eleves(NomEleve,PrenomEleve,Classe)Values("Dupont","Eve","CE2");
insert into eleves(NomEleve,PrenomEleve,Classe)Values("Duran","Lea","CE1");
insert into eleves(NomEleve,PrenomEleve,Classe)Values("Roi","Cleo","CP");

insert into suivis(idEleve,idMatiere,Note,Coefficient)Values("1","1","10","1");
insert into suivis(idEleve,idMatiere,Note,Coefficient)Values("1","2","15","1");
insert into suivis(idEleve,idMatiere,Note,Coefficient)Values("2","1","10","1");
insert into suivis(idEleve,idMatiere,Note,Coefficient)Values("2","2","3","1");
insert into suivis(idEleve,idMatiere,Note,Coefficient)Values("3","1","6","1");
insert into suivis(idEleve,idMatiere,Note,Coefficient)Values("3","2","9","1");

