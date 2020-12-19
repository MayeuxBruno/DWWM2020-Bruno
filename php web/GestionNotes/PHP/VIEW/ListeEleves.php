<?php
if(isset($_SESSION)&&($_SESSION['utilisateur']->getRole()==1))
{
    $listeEleves=EleveManager::getList();
    echo'<div class="colonne">
        <div class="vide"></div>
        <div>
            <div class="titre"></div>
            <a href="index.php?page=formEleve&mode=ajout&titre=Ajouter un élève"><button>Ajouter un élève</button></a>
            <div class="titre"></div>
        </div>
        <div>
            <div class="colonne centreh">
                <span>Gestion de</span>
                <ul>
                    <li><a href="index.php?page=listeEleves">Elèves</a></li>
                    <li><a href="index.php?page=listeEnseignants">Enseignants</a></li>
                    <li><a href="index.php?page=listeNotes">Notes</a></li>
                    <li><a href="index.php?page=listeMatieres">Matières</a></li>
                </ul>
            </div>
            <div class="demi"></div>
            <div class="titre colonne logo">
                <div class="vide"></div>';
                foreach($listeEleves as $unEleve)
                {
                    echo'<div class="ligne">
                    <div class="centreh">'.$unEleve->getNomEleve().'</div>
                    <div class="centreh">'.$unEleve->getPrenomEleve().'</div>
                    <div class="centreh">'.$unEleve->getClasse().'</div>
                    <div>
                        <div>
                            <div><a href="index.php?page=formEleve&mode=modif&titre=Modifier un élève&id='.$unEleve->getIdEleve().'"><img src="IMG/modifier.png" alt="modifier"></a></div>
                            <div></div>
                            <div><a href="index.php?page=formEleve&mode=suppr&titre=Supprimer un élève&id='.$unEleve->getIdEleve().'"><img src="IMG/supprimer.png" alt="supprimer"></a></div>
                        </div>
                        <div class="titre"></div>
                    </div>
                    </div>';
                }
            echo'</div>
            <div></div>
        </div>    
    </div>';
}
else{
    echo '<h2 class="alert">Vous n\'avez pas les droits nécessaire pour accéder à cette page </h2>';
    header("refresh:3;url=index.php?page=connexion");
}