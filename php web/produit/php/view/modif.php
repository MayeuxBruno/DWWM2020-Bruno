<?php

include "Head.php";

$detailProduit=$_POST;

$detailProduit['prix']=intval($detailProduit['prix']);

$Produit=new Produits($detailProduit);

ProduitsManager::update($Produit);

header("Location: ../../index.php");
