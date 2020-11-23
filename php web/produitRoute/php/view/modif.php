<?php

include "Head.php";

$detailProduit=$_POST;

$produit=ProduitsManager::findById($detailProduit['idProduit']);

$produit->setLibelleProduit($detailProduit['libelleProduit']);
$produit->setPrix(intval($detailProduit['prix']));
$produit->setDateDePeremption($detailProduit['dateDePeremption']);

ProduitsManager::update($produit);

header("Location: index.php");
