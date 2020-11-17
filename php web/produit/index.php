<?php

include "php/view/Head.php";
include "php/view/Header.php";

/*echo "ajout d'un produit".'<br>';
$pNew=new Produits(["libelleProduit"=>"cahier","prix"=>5,"dateDePeremption"=>'2020-12-31']);
ProduitsManager::add($pNew);*/

$p=ProduitsManager::findById(1);

echo "mise à jour de l'id1".'<br>';
$p->setLibelleProduit($p->getLibelleProduit().'sssss');
ProduitsManager::update($p);

echo "on supprime un article".'<br>';
$pSuppr = ProduitsManager::findById(3);
ProduitsManager::delete($pSuppr);

echo "liste des articles <br><br>";
$tableau=ProduitsManager::getList();
foreach($tableau as $unProduit)
{
    echo $unProduit->toString().'<br>';
}



include "php/view/Footer.php";
