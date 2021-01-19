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
	"default"=>["PHP/VIEW/","GestionSessions","Accueil",false],
	"SessionAPI"=>["PHP/MODEL/API/","SessionAPI","Accueil",true],
	"ListeStagiairesAPI"=>["PHP/MODEL/API/","ListeStagiairesAPI","Accueil",true],
	"ObjectifAPI"=>["PHP/MODEL/","ObjectifAPI","Accueil",true],
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
	//"default" => ["PHP/VIEW/", "FormStagiaireInfos", "Identification",false],
	"FormConnexion" => ["PHP/VIEW/", "FormConnexion", "Identification",false],
	"ActionConnexion" => ["PHP/VIEW/", "ActionConnexion", "Identification",false],
	"ActionDeconnexion" => ["PHP/VIEW/", "ActionDeconnexion", "Identification",false],

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