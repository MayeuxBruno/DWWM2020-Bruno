<?php

include "PHP/CONTROLLER/Langue.Class.php";
include "PHP/CONTROLLER/Categories.Class.php";
include "PHP/CONTROLLER/Annonces.Class.php";
include "PHP/CONTROLLER/Parametres.Class.php";
include "PHP/MODEL/LangueManager.Class.php";
include "PHP/MODEL/CategoriesManager.Class.php";
include "PHP/MODEL/AnnoncesManager.Class.php";
include "PHP/MODEL/DbConnect.Class.php";

Parametres::init();
DbConnect::Init();

/****** Test de AdherentsManager ******/

//On teste la recherche par ID
//echo 'Recherche de id=1 <br>';
//$p=RolesManager::findById(3);
//var_dump($p);

//On teste la recherche par ID
//echo 'Recherche pseudo nono <br>';
//$p=UtilisateursManager::findById(4);
//var_dump($p);
//$tableau=MessagesManager::getByDestinataire($p);
//var_dump($tableau);
//foreach($tableau as $elt)
//{
//	echo $elt->toString()."\n";
//}

//On teste l'ajout
//$ticket=ReparationsManager::findById(1);
//$mode=ModesPaiementsManager::findById(1);  
//var_dump($ticket);
//var_dump($mode);
//echo 'On ajoute un objet TVA <br>';
//$pNew = new Utilisateurs(["nomUtilisateur"=>"mayeux","prenomUtilisateur"=>"bruno","emailUtilisateur"=>"kkkk","pseudoUtilisateur"=>"uuuu","mdpUtilisateur"=>"opop","idRole"=>2,"telUtilisateur"=>"0303030303"]);
//var_dump($pNew);
//UtilisateursManager::add($pNew);

//On teste la suppression
//echo 'On supprime un article <br>';
//$pSupp=CategoriesManager::findById(3);
//var_dump($pSupp);
//CategoriesManager::delete($pSupp);


//On teste la mise a jour
//$pRecharge=CategoriesManager::findById(4);
//$pRecharge->setLibelleCategorie("Decoration");
//var_dump($pRecharge);
//CategoriesManager::update($pRecharge);


//On affiche le liste des objets
//echo 'On affiche la liste des objet <br>';
//$tableau=CategoriesManager::getList();
//var_dump($tableau);
//foreach($tableau as $elt)
//{
//	echo $elt->toString()."\n";
//}
