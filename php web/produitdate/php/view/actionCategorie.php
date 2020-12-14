<?php 


var_dump($_GET);

$categorie=new Categories($_POST);

var_dump($categorie);
switch($_GET['mode'])
{
    case "ajout":
        {
            CategoriesManager::add($categorie);
        break;
        }
    case "modif":
        {
            CategoriesManager::update($categorie);
        break;
        }
    case "delete":
        {
            CategoriesManager::delete($categorie);
        break;
        }
}
header("Location:index.php?code=categories");