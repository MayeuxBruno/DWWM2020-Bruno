<?php
/****** Test de .....Manager ******/

/***************** Teste de la recherche par ID ****************/
$p=UsersManager::findById(40);
var_dump($p);


/*********************** Test l'ajout **************************/
//$pNew = new Utilisateurs(["nomUtilisateur"=>"mayeux","prenomUtilisateur"=>"bruno","emailUtilisateur"=>"kkkk","pseudoUtilisateur"=>"uuuu","mdpUtilisateur"=>"opop","idRole"=>2,"telUtilisateur"=>"0303030303"]);
//var_dump($pNew);
//UtilisateursManager::add($pNew);

/********************Test de la suppression ********************/
//$pSupp=CategoriesManager::findById(3);
//var_dump($pSupp);
//CategoriesManager::delete($pSupp);

/******************** Test de la mise a jour ******************/
//$pRecharge=CategoriesManager::findById(4);
//$pRecharge->setLibelleCategorie("Decoration");
//var_dump($pRecharge);
//CategoriesManager::update($pRecharge);


/************** Test affichage liste des objets ****************/
/*$tableau=UsersManager::getList();
foreach($tableau as $elt)
{
	echo $elt->toString()."\n";
}*/
