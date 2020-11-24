<?php

include "PHP/VIEW/Head.php";
include "PHP/VIEW/Header.php";

/****** Test de AdherentsManager ******/

//On teste la recherche par ID
//echo 'Recherche de id=1 <br>';
//$p=PaiementsManager::findById(1);
//var_dump($p);

//On teste l'ajout
//$ticket=TicketsManager::findById(1);
//$mode=ModesPaiementsManager::findById(1);  
//var_dump($ticket);
//var_dump($mode);
//echo 'On ajoute un objet TVA <br>';
//$pNew = new Paiements(["idModePaiement"=>2,"idTicket"=>1,"prixTTC"=>39,"ModePaiement"=>$mode,"Ticket"=>$ticket]);
//PaiementsManager::add($pNew);

//On teste la suppression
//echo 'On supprime un article <br>';
//$pSupp=PaiementsManager::findById(4);
//PaiementsManager::delete($pSupp);


//On teste la mise a jour
$pRecharge=PaiementsManager::findById(2);
$pRecharge->setPrixTtc(1000);
PaiementsManager::update($pRecharge);


//On affiche le liste des objets
echo 'On affiche la liste des objet <br>';
$tableau=PaiementsManager::getList();
foreach($tableau as $elt)
{
	echo $elt->toString().'<br>';
}
include "PHP/VIEW/Footer.php";

?>