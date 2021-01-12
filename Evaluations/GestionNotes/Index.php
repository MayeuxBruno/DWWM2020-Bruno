<?php

include 'PHP/Outils.php';

Parametres::init();
DbConnect::init();

session_start();

/***** Gestion du titre de la page des formulaire en fonction du mode  **
 * 			ajout modif ou suppr
 */

$titrepage="";
if(isset($_GET['titre']))
{
	$titrepage=$_GET['titre'];
}

/**************************** GESTION DES ROUTES *************************/
$routes=[
	"default"=>["PHP/VIEW/","accueil","Page de connexion"],
	"default"=>["PHP/VIEW/","accueil","Page de connexion"],
	"menuProviseur"=>["PHP/VIEW/","MenuProviseur","Menu Proviseur"],
	"actionCompte"=>["PHP/VIEW/","ActionCompte",".."],
	"listeEleves"=>["PHP/VIEW/","ListeEleves","Gestion des Eleves"],
	"formEleve"=>["PHP/VIEW/","FormEleve","$titrepage"],
	"actionEleve"=>["PHP/VIEW/","ActionEleve",".."],
	"listeEnseignants"=>["PHP/VIEW/","ListeEnseignants","Gestion des Enseignants"],
	"formEnseignant"=>["PHP/VIEW/","FormEnseignant","$titrepage"],
	"listeMatieres"=>["PHP/VIEW/","ListeMatieres","Gestion des Matieres"],
	"formMatiere"=>["PHP/VIEW/","FormMatiere","$titrepage"],
	"actionMatiere"=>["PHP/VIEW/","ActionMatiere",".."],
	"listeNotes"=>["PHP/VIEW/","ListeNotes","Gestion des Notes"],
	"formNote"=>["PHP/VIEW/","FormNote","$titrepage"],
	"actionNote"=>["PHP/VIEW/","ActionNote",".."],

/************* TEST MANAGER *************/
	"TesteleveManager"=>["PHP/MODEL/TESTMANAGER/","TestEleveManager","Test de eleves"],
	"TestmatieresManager"=>["PHP/MODEL/TESTMANAGER/","TestmatiereManager","Test de matieres"],
	"TestsuivisManager"=>["PHP/MODEL/TESTMANAGER/","TestsuivisManager","Test de suivis"],
	"coco"=>["PHP/MODEL/TESTMANAGER/","TestUtilisateurManager","Test de utilisateurs"],
];

if(isset($_GET["page"]))
{

	$page=$_GET["page"];

	if(isset($routes[$page]))
	{
		AfficherPage($routes[$page]);
	}
	else
	{
		AfficherPage($routes["default"]);
	}
}
else
{
	AfficherPage($routes["default"]);
}