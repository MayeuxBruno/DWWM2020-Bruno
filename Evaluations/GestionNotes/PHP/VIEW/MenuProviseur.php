<?php
if (isset($_SESSION['utilisateur'])&& $_SESSION['utilisateur']->getRole()==1)
{
    echo '<div class="page">
    <div class="titre colonne">
        <div>
            <div></div>
            <div class="colonne">
                <div>
                    <button><a href="index.php?page=listeEleves">Gérer les élèves</a></button>
                </div>
                <div class="vide"></div>
                <div>
                    <button><a href="index.php?page=listeEnseignants">Gérer les enseignants</a></button>   
                </div>
                <div class="vide"></div>
                <div>
                    <button><a href="index.php?page=listeNotes">Gérer les notes</a></button>
                </div>
                <div class="vide"></div>
                <div>
                    <button><a href="index.php?page=listeMatieres">Gérer les matières</a></button>
                </div>
            </div>
            <div></div>
        </div>
    </div>
    </div>';
}
else{
    echo '<h2 class="alert">Vous ne disposez pas des droits nécessaires</h2>';
    session_destroy();
    header("refresh:3;url=index.php?page=connexion");
}