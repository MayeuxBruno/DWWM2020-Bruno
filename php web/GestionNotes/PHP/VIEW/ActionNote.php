<?php
switch($_GET['mode'])
{
    case "ajout":
        
    break;

    case "modif":
        $suivi=new Suivi($_POST);
        SuiviManager::update($suivi);
        header("Location:index.php?page=listeNotes");
    break;
    case "suppr":
        $suivi=new Suivi($_POST);
        SuiviManager::delete($suivi);
        header("Location:index.php?page=listeNotes");
    break;
}