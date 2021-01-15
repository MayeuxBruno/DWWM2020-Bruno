<?php

require("./Outils.php");

Parametres::init();

DbConnect::init();

session_start();

/******Les langues******/
/***On récupère la langue***/
if (isset($_GET['lang']))
{
	$_SESSION['lang'] = $_GET['lang'];
}

/***On récupère la langue de la session/FR par défaut***/
$lang=isset($_SESSION['lang']) ? $_SESSION['lang'] : 'FR';
/******Fin des langues******/

$routes=[
	//"default"=>["PHP/VIEW/","Accueil","Accueil"],
	"default"=>["PHP/VIEW/","RensStagiaires","Accueil"],
	//STMANAGER/","TestanimationManager","Test de animation"],
	//r"=>["PHP/MODEL/TESTMANAGER/","TestcomportementsprofessionnelsManager","Test de comportementsprofessionnels"],
	//TESTMANAGER/","TestentreprisesManager","Test de entreprises"],
	//TESTMANAGER/","TestevaluationsManager","Test de evaluations"],
	//ESTMANAGER/","TestformationsManager","Test de formations"],
	//TMANAGER/","TesthorairesManager","Test de horaires"],
	//L/TESTMANAGER/","TestparticipationManager","Test de participation"],
	//NAGER/","TestrolesManager","Test de roles"],
	//ODEL/TESTMANAGER/","TestsessionformationManager","Test de sessionformation"],
	//ANAGER/","TeststagesManager","Test de stages"],
	//ESTMANAGER/","TeststagiairesManager","Test de stagiaires"],
	//ODEL/TESTMANAGER/","TesttravauxdangereuxManager","Test de travauxdangereux"],
	//MANAGER/","TesttuteursManager","Test de tuteurs"],
	///TESTMANAGER/","TestutilisateursManager","Test de utilisateurs"],
	//ANAGER/","TestvillesManager","Test de villes"],
		
	"FormConnexion" => ["PHP/VIEW/", "FormConnexion", "Identification"],
	"ActionConnexion" => ["PHP/VIEW/", "ActionConnexion", "Identification"],
	"ActionDeconnexion" => ["PHP/VIEW/", "ActionDeconnexion", "Identification"],
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