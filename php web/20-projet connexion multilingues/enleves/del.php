<?php

$Produit=ProduitsManager::findById($_GET['id']);

ProduitsManager::delete($Produit);

header("Location: index.php");

?>