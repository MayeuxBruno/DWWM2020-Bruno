<?php
if (isset($_SESSION['utilisateur'])&&$_SESSION['utilisateur']->getRole()==1)
{
    echo'<div>
    <div class="menu colonne justifyh">
        <h5>Gestion de : </h5> 
        <ul>
            <li><a href="index.php?page=listeEleves">Elèves</a></li>
            <li>Enseignants</li>
            <li>Notes</li>
            <li><a href="index.php?page=listeMatieres">Matières</a></li>
        </ul>
    </div>
    <div class="colonne">';

     $tableau=UtilisateursManager::getList();
     echo'<div class="colonne">
          <div class="justify">
          <a href="index.php?page=formEnseignants&mode=ajout"><button>Ajouter un Enseignant</button></div></a>
          <div></div>
          </div>';

     foreach($tableau as $unEnseignant)
     {
        if($unEnseignant->getRole()==2){ 
        echo '<div class="lingne">
                <div></div>
                <div class="justify justifyf"><h4>'.$unEnseignant->getNomUtilisateur().'</h4></div>
                <div class="justify justifyf"><h4>'.$unEnseignant->getPrenomUtilisateur().'</h4></div>
                <div class="justify justifyf"><h4>'.MatieresManager::findById($unEnseignant->getIdMatiere())->getLibelleMatiere().'</h4></div>
                <div>
                        <div>
                            <div></div>
                            <div></div>
                            <div></div>
                            <div></div>
                            <div></div>
                            <div class="justifyh"><a href="index.php?page=formEnseignants&mode=modif&id='.$unEnseignant->getIdUtilisateur().'"><img src="IMG/modifier.png" alt="modifier"></div></a>
                            <div></div>
                        </div>
                        <div>
                            <div class="justifyh"><a href="index.php?page=formEnseignants&mode=suppr&id='.$unEnseignant->getIdUtilisateur().'"><img src="IMG/supprimer.png" alt="supprimer"></div></a>
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
        }
        echo'</div>
        <div class="menu"></div>
        </div>';
        echo'</div>';    
}
else
{
     echo'<div class="espacehor"></div>';
     echo '<div class="justify"><h2 class="alert">Vous n\'avez pas les droit nécessaires pour accéder à cette page</h2></div>';
     header("refresh:3;url=index.php?page=accueil");
}
?>