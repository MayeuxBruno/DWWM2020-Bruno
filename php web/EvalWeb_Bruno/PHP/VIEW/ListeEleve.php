<?php
if (isset($_SESSION['utilisateur'])&&$_SESSION['utilisateur']->getRole()==1)
{
    echo'<div>
    <div class="menu colonne justifyh">
        <h5>Gestion de : </h5> 
        <ul>
            <li>Elèves</li>
            <li><a href="index.php?page=listeEnseignants">Enseignants</a></li>
            <li>Notes</li>
            <li><a href="index.php?page=listeMatieres">Matières</a></li>
        </ul>
    </div>
    <div class="colonne">';

     $tableau=ElevesManager::getList();
     echo'<div class="colonne">
          <div class="justify">
          <a href="index.php?page=formEleve&mode=ajout"><button>Ajouter un Eleve</button></div></a>
          <div></div>
          </div>';

     foreach($tableau as $unEleve)
     {
     echo '<div class="lingne">
               <div></div>
               <div class="justify justifyf"><h4>'.$unEleve->getNomEleve().'</h4></div>
               <div class="justify justifyf"><h4>'.$unEleve->getPrenomEleve().'</h4></div>
               <div class="justify justifyf"><h4>'.$unEleve->getClasse().'</h4></div>
               <div>
                    <div>
                        <div></div>
                        <div></div>
                        <div></div>
                        <div></div>
                        <div></div>
                        <div class="justifyh"><a href="index.php?page=formEleve&mode=modif&id='.$unEleve->getIdEleve().'"><img src="IMG/modifier.png" alt="modifier"></div></a>
                        <div></div>
                    </div>
                    <div>
                        <div class="justifyh"><a href="index.php?page=formEleve&mode=suppr&id='.$unEleve->getIdEleve().'"><img src="IMG/supprimer.png" alt="supprimer"></div></a>
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