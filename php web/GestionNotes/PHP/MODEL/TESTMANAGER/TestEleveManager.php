<?php

//Test ElevesManager

//echo "recherche id = 1" . "<br>";
$obj =EleveManager::findById(4);
//var_dump($obj);
//echo $obj->toString();

//echo "ajout de l'objet". "<br>";
//$newObj = new Eleve(["NomEleve" => "Roosebeke", "PrenomEleve" => "Louise", "Classe" => "CM2"]);
//var_dump(EleveManager::add($newObj));

//echo "Liste des objets" . "<br>";
//$array = ElevesManager::getList();
//foreach ($array as $unObj)
//{
//	echo $unObj->toString() . "<br><br>";
//}

//echo "on met à jour l'id 1" . "<br>";
//$obj->setNomEleve("Bauchet");
//EleveManager::update($obj);
//$objUpdated = EleveManager::findById(1);
//echo "Liste des objets" . "<br>";
//$array = ElevesManager::getList();
//foreach ($array as $unObj)
//{
//	echo $unObj->toString() . "<br><br>";
//}

//echo "on supprime un objet". "<br>";
//$obj = EleveManager::findById(4);
//EleveManager::delete($obj);
//echo "Liste des objets" . "<br>";
//$array = EleveManager::getList();
//foreach ($array as $unObj)
//{
//	echo $unObj->toString() . "<br><br>";
//}

?>