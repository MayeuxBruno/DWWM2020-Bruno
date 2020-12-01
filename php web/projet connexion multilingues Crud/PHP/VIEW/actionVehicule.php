<?php 

$vehicule=new Vehicules($_POST);
var_dump($vehicule);

switch($_GET['mode'])
{
    case "ajout":
        {
            VehiculesManager::add($vehicule);
        break;
        }
    case "modif":
        {
            VehiculesManager::update($vehicule);
        break;
        }
    case "delete":
        {
            VehiculesManager::delete($vehicule);
        break;
        }
}
header("Location:index.php?codePage=listevehicules");