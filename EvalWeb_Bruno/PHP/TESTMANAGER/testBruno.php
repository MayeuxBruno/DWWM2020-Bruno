<?php
/****** Test de Suivis Manager ******/

/***************** Teste de la recherche par ID ****************/
//$p=SuivisManager::findById(3);
//var_dump($p);


/*********************** Test l'ajout **************************/
//$pNew = new Suivis(["idEleve"=>2,"idMatiere"=>1,"Note"=>5,"Coefficient"=>3]);
//var_dump($pNew);
//SuivisManager::add($pNew);

/********************Test de la suppression ********************/
$pSupp=ElevesManager::findById(1);
var_dump($pSupp);
ElevesManager::delete($pSupp);

/******************** Test de la mise a jour ******************/
//$pRech=SuivisManager::findById(3);
//$pRech->setNote(25);
//var_dump($pRech);
//SuivisManager::update($pRech);


/************** Test affichage liste des objets ****************/
//$tableau=SuivisManager::getList();
//foreach($tableau as $elt)
//{
//	echo $elt->toString()."\n";
//}

//$p=SuivisManager::findById(1);
//$tab=SuivisManager::getByEleve($p);
//var_dump($tab);


