<?php
if (isset($_SESSION['utilisateur'])&& $_SESSION['utilisateur']->getRole()==1)
{
    echo '<div class="page">
    <div class="titre colonne">
        <div>
            <div></div>
            <div class="colonne">
                <div>
                    <a href="index.php?page=listeEleves"><button>Gérer les élèves</button></a>
                </div>
                <div class="vide"></div>
                <div>
                    <a href="index.php?page=connexion"><button>Gérer les enseignants</button></a>    
                </div>
                <div class="vide"></div>
                <div>
                    <a href="index.php?page=connexion"><button>Gérer les notes</button></a>
                </div>
                <div class="vide"></div>
                <div>
                    <a href="index.php?page=connexion"><button>Gérer les matières</button></a>
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