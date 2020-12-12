<?php 


var_dump($_GET);

$user=new Users($_POST);

var_dump($produit);
switch($_GET['mode'])
{
    case "modif":
        {
            UsersManager::update($user);
        break;
        }
    case "suppr":
        {
            ProduitsManager::delete($user);
        break;
        }
}
header("Location:index.php?code=listeUsers");