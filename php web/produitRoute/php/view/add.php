<?php

include "Head.php";


$detailProduit=$_POST;

$Produit=new Produits($detailProduit);

$Produit->setPrix(intval($Produit->getPrix()));


ProduitsManager::add($Produit);

header("Location: ../../index.php");

