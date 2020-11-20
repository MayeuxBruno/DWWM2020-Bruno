<?php

include "PHP/VIEW/Head.php";
include "PHP/VIEW/Header.php";

/****** Test de AdherentsManager ******/

//On teste la recherche par ID
echo 'Recherche de id=1 <br>';
$p=AdherentsManager::findById(1);
var_dump($p);

//On teste l'ajout *** ATTENTION *** Veuillez compléter les valeurs de chaque champs dans l'instruction new 
echo 'On ajoute un objet Adherents <br>';
$pNew = new Adherents(["nom" => "[** Valeur 1 **] ","prenom" => "[** Valeur 2 **] ","pupitre" => "[** Valeur 3 **] ","fonction" => "[** Valeur 4 **] "]);
AdherentsManager::add($pNew);

//On teste la suppression
echo 'On supprime un article <br>';
$p=AdherentsManager::findById(1);
var_dump($p);

//On teste la mise a jour
echo 'On met a jour un objet Adherents <br>';
$pNew->setNom([**Valeur**]);
AdherentsManager::update($pNew);
$pRecharge=AdherentsManager::findById(1);
var_dump($pRecharge)

//On affiche le liste des objets
echo 'On affiche la liste des objet <br>';
$tableau=AdherentsManager::getList();
foreach($tableau as $elt)
{
	echo $elt->toString() <br>
}

include "PHP/VIEW/Footer.php";

?>