<?php

include "PHP/VIEW/Head.php";
include "PHP/VIEW/Header.php";

/****** Test de AdherentsManager ******/

//On teste la recherche par ID
//echo 'Recherche de id=1 <br>';
//$p=TVAManager::findById(3);
//var_dump($p);

//On teste l'ajout  
//echo 'On ajoute un objet TVA <br>';
//$pNew = new TVA(["tauxTva"=>2]);
//TVAManager::add($pNew);

//On teste la suppression
//echo 'On supprime un article <br>';
//$pSupp=TVAManager::findById(4);
//TVAManager::delete($pSupp);


//On teste la mise a jour
//$pRecharge=TVAManager::findById(2);
//$pRecharge->setTauxTva(9.6);
//TVAManager::update($pRecharge);


//On affiche le liste des objets
//echo 'On affiche la liste des objet <br>';
//$tableau=TVAManager::getList();
//foreach($tableau as $elt)
//{
	echo $elt->toString().'<br>';
//}
//include "PHP/VIEW/Footer.php";

?>