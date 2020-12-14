<?php 


var_dump($_GET);

$produit=new Produits($_POST);

var_dump($produit);
switch($_GET['mode'])
{
    case "ajout":
        {
            ProduitsManager::add($produit);
        break;
        }
    case "modif":
        {
            ProduitsManager::update($produit);
        break;
        }
    case "delete":
        {
            ProduitsManager::delete($produit);
        break;
        }
}
header("Location:index.php?code=liste");