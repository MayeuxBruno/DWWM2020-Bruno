<?php
$titre="Je change et je vous emmerde";
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
                <li>Elèves</li>
                <li>Enseignants</li>
                <li>Notes</li>
                <li>Matières</li>
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