<?php 


var_dump($_GET);
var_dump($_POST);
//$_POST['dateDePeremption']=new DateTime ($_POST['dateDePeremption']);
$produit=new Produits($_POST);
//$produit->setDateDePeremption($produit->getDateDePeremption()->format('Y-m-d H:i:s'));

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
//header("Location:index.php?code=liste");