<?php
switch($_GET['mode'])
{
    case "ajout":
        $eleve=new Eleve($_POST);
        EleveManager::add($eleve);  
    break;

    case "modif":
        $eleve=new Eleve($_POST);
        EleveManager::update($eleve);
    break;
    case "suppr":
        $eleve=new Eleve($_POST);
        EleveManager::delete($eleve);
    break;
}
header("Location:index.php?page=listeEleves");