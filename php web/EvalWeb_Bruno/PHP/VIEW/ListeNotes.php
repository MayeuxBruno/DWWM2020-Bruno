<?php
if (isset($_SESSION['utilisateur'])&&$_SESSION['utilisateur']->getRole()==1)
{
    echo'<div>
    <div class="menu colonne justifyh">
        <h5>Gestion de : </h5> 
        <ul>
            <li><a href="index.php?page=listeEleves">Elèves</a></li>
            <li><a href="index.php?page=listeEnseignants">Enseignants</a></li>
            <li>Notes</li>
            <li>Matières</li>
        </ul>
    </div>
    <div class="colonne">';
     $matiere=MatieresManager::findById(2);
     $tableau=SuivisManager::getListByMatiere($matiere);
     echo'<div class="colonne">
          <div class="justify">
    <select name="idMatiere">';
    
    $listeMatiere=MatieresManager::getList();
    foreach ($listeMatiere as $uneMatiere)
    {
        echo '<option value="'.$uneMatiere->getIdMatiere().'" '.$sel.' >'.$uneMatiere->getLibelleMatiere().'</option>';
    }
    echo'
    </select>
    </div>
          <div></div>
          </div>';

     foreach($tableau as $unSuivi)
     {
     echo '<div class="lingne">
               <div></div>
               <div class="justify justifyf"><h4>'.ElevesManager::findById($unSuivi->getIdEleve())->getNomEleve().'</h4></div>
               <div class="justify justifyf"><h4>'.ElevesManager::findById($unSuivi->getIdEleve())->getPrenomEleve().'</h4></div>
               <div class="justify justifyf"><h4>'.$unSuivi->getNote().'</h4></div>
               <div>
                    <div>
                        <div></div>
                        <div></div>
                        <div></div>
                        <div></div>
                        <div></div>
                        <div class="justifyh"><a href="index.php?page=formMatieres&mode=modif&id='.$unSuivi->getIdSuivis().'"><img src="IMG/modifier.png" alt="modifier"></div></a>
                        <div></div>
                    </div>
                    <div>
                        <div class="justifyh"><a href="index.php?page=formMatieres&mode=suppr&id='.$unSuivi->getIdSuivis().'"><img src="IMG/supprimer.png" alt="supprimer"></div></a>
                        <div></div>
                        <div></div>
                        <div></div>
                        <div></div>
                        <div></div>
                        <div></div>
                    </div>
                </div>
               <div></div>
               </div>';
     }
     echo'</div>
     <div class="menu"></div>
     </div>
     </div>';
          
}
else
{
     echo'<div class="espacehor"></div>';
     echo '<div class="justify"><h2 class="alert">Vous n\'avez pas les droit nécessaires pour accéder à cette page</h2></div>';
     header("refresh:3;url=index.php?page=accueil");
}
?>