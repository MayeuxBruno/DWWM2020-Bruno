<?php
switch($_GET['mode'])
{
    // Création d'un compte ou ajout par l'adminisrateur
    case "ajout":
            $eleve=new Eleves($_POST);
            ElevesManager::add($eleve);
            header("Location:index.php?page=listeEleves");
        break;
    case "modif":
            $eleve=new Eleves($_POST);
            ElevesManager::update($eleve);
            header("Location:index.php?page=listeEleves");
        break;
    case "suppr":
            $eleve=ElevesManager::findById($_POST['idEleve']);
            ElevesManager::delete($eleve);
            header("Location:index.php?page=listeEleves");
        break;
    }