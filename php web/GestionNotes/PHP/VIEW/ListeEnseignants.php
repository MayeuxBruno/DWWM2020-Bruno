<?php
$listeEnseignants=UtilisateurManager::getList();
echo'<div class="colonne">
    <div class="vide"></div>
    <div>
        <div class="titre"></div>
        <a href="index.php?page=formEnseignant&mode=ajout&titre=Ajouter un enseignant"><button>Ajouter un enseignant</button></a>
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
            foreach($listeEnseignants as $unEnseignant)
            {
                if ($unEnseignant->getRole()==2)
                {
                    echo'<div class="ligne">
                    <div class="centreh">'.MatiereManager::findById($unEnseignant->getIdMatiere())->getLibelleMatiere().'</div>
                    <div class="centreh">'.$unEnseignant->getLogin().'</div>
                    <div class="centreh">'.$unEnseignant->getNomUtilisateur().'</div>
                    <div class="centreh">'.$unEnseignant->getPrenomUtilisateur().'</div>
                    <div>
                        <div>
                            <div><a href="index.php?page=formEnseignant&mode=modif&titre=Modifier un enseignant&id='.$unEnseignant->getIdUtilisateur().'"><img src="IMG/modifier.png" alt="modifier"></a></div>
                            <div></div>
                            <div><a href="index.php?page=formEnseignant&mode=suppr&titre=Supprimer un enseignant&id='.$unEnseignant->getIdUtilisateur().'"><img src="IMG/supprimer.png" alt="supprimer"></a></div>
                        </div>
                        <div class="titre"></div>
                    </div>
                    </div>';
                }
            }
        echo'</div>
        <div></div>
    </div>    
</div>';