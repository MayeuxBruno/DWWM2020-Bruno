<?php
switch($_GET['mode'])
{
    case "ajout":
        $matiere=new Matiere($_POST);
        MatiereManager::add($matiere);  
    break;

    case "modif":
        $matiere=new Matiere($_POST);
        MatiereManager::update($matiere);
        header("Location:index.php?page=listeMatieres");
    break;
    case "suppr":
        $matiere=new Matiere($_POST);
        $util=UtilisateurManager::getListByMatiere($matiere);
        if(empty($util))
        {
           MatiereManager::delete($matiere);
        }
        else{
            echo '<h2 class="alert">Des Enseignants sont toujopurs attachés à cette matiere</h2>';
            header("refresh:3;url=index.php?page=listeMatieres");
        }
    break;
}
