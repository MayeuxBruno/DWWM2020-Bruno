<?php
switch($_GET['mode'])
{
    case "ajout":
            $matiere=new Matieres($_POST);
            MatieresManager::add($matiere);
            header("Location:index.php?page=listeMatieres");
        break;
    case "modif":
            $matiere=new Matieres($_POST);
            MatieresManager::update($matiere);
            header("Location:index.php?page=listeMatieres");
        break;
    case "suppr":
            $matiere=MatieresManager::findById($_POST['idMatiere']);
            MatieresManager::delete($matiere);
            header("Location:index.php?page=listeMatieres");
        break;
    }