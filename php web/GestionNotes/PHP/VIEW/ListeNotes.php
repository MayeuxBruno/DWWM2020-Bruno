<?php
$role=$_SESSION['utilisateur']->getRole();
if(!empty($_POST))
{
    if($_POST['idMatiere']!="0")
    {
        $matiereChoisie=MatiereManager::findById($_POST['idMatiere']);
        $listeSuivis=SuiviManager::getListByMatiere($matiereChoisie);
    }
    else
    {
        $listeSuivis=SuiviManager::getList();
    }
}
else
{
    if ($role=="1"){
        $listeSuivis=SuiviManager::getList();
    }
    else
    {
        $matiereEnseignant=MatiereManager::findById($_SESSION['utilisateur']->getIdMatiere());
        $listeSuivis=SuiviManager::getListByMatiere($matiereEnseignant);
    }
    
}
    echo'<div class="colonne">
        <div class="vide"></div>
        <div>';
        if ($role==1){   // Si connexion du Proviseur
           echo' <div class="titre"></div>
                    <form action="index.php?page=listeNotes" method="POST">
                    <div><select name="idMatiere">';
                         $listeMatieres=MatiereManager::getList();
                         echo'<option value="0" selected>Sélectionnez une matiere</option>';
                         foreach ($listeMatieres as $uneMatiere)
                         {
                            echo'<option value="'.$uneMatiere->getIdMatiere().'"'.(($uneMatiere->getIdMatiere()==$_POST['idMatiere'])?'selected':'').'>'.$uneMatiere->getLibelleMatiere().'</option>';
                         }
                    echo'</select></div>
                        <div><button type="submit">Selectionner</button></div>
                    </form>
                <div class="titre"></div>';
        }
        else{  //Si connexion Enseignant
            echo'<div class="titre"></div>
                 <div><button><a href="index.php?page=formNote&mode=ajout">Ajouter une note</a></button></div>
                <div class="titre"></div>';
        }
            echo'</div>
        <div>
            <div class="colonne centreh">';
            if($role==1){
                echo'<span>Gestion de</span>
                <ul>
                    <li><a href="index.php?page=listeEleves">Elèves</a></li>
                    <li><a href="index.php?page=listeEnseignants">Enseignants</a></li>
                    <li><a href="index.php?page=listeNotes">Notes</a></li>
                    <li><a href="index.php?page=listeMatieres">Matières</a></li>
                </ul>';
            }
            echo'</div>
            
            <div class="titre colonne logo">
                <div class="vide"></div>';
                if(!empty($listeSuivis))
                {
                    foreach($listeSuivis as $unSuivi)
                    {
                        echo'<div class="ligne">
                                <div class="centreh">'.EleveManager::findById($unSuivi->getIdEleve())->getNomEleve().'</div>
                                <div class="centreh">'.EleveManager::findById($unSuivi->getIdEleve())->getPrenomEleve().'</div>
                                <div class="centreh">'.$unSuivi->getNote().'</div>
                                <div>
                                    <div>
                                        <div><a href="index.php?page=formNote&mode=modif&titre=Modifier une note&id='.$unSuivi->getIdSuivis().'"><img src="IMG/modifier.png" alt="modifier"></a></div>
                                        <div></div>
                                        <div><a href="index.php?page=formNote&mode=suppr&titre=Supprimer une note&id='.$unSuivi->getIdSuivis().'"><img src="IMG/supprimer.png" alt="supprimer"></a></div>
                                    </div>
                                    <div class="titre"></div>
                                </div>
                            </div>';
                    }
                }
                else{
                    echo'<div class="centre"><h4>Aucune note à Afficher dans cette matière</h4></div>';
                }
            echo'</div>
            <div></div>
        </div>    
    </div>';
