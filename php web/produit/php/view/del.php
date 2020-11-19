<?php

include "Head.php";

$Produit=ProduitsManager::findById($_GET['id']);

ProduitsManager::delete($Produit);

header("Location: ../../index.php");

include "php/view/Footer.php";