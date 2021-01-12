<?php
if(isset($_SESSION)&&($_SESSION['utilisateur']->getRole()==1))
{
    $listeMatieres=MatiereManager::getList();
    echo'<div class="colonne">
        <div class="vide"></div>
        <div>
            <div class="titre"></div>
            <a href="index.php?page=formMatiere&mode=ajout&titre=Ajouter une matière"><button>Ajouter une matière</button></a>
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
                foreach($listeMatieres as $uneMatiere)
                {
                    echo'<div class="ligne">
                    <div class="demi"></div>
                    <div class="centreh demi">'.$uneMatiere->getLibelleMatiere().'</div>
                    <div>
                        <div class="demi">
                            <div><a href="index.php?page=formMatiere&mode=modif&titre=Modifier une matière&id='.$uneMatiere->getIdMatiere().'"><img src="IMG/modifier.png" alt="modifier"></a></div>
                            <div></div>
                            <div><a href="index.php?page=formMatiere&mode=suppr&titre=Supprimer une matière&id='.$uneMatiere->getIdMatiere().'"><img src="IMG/supprimer.png" alt="supprimer"></a></div>
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