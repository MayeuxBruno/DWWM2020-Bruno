<?php
    echo'<div class="espacehor"></div>';
    $listeMusiciens=AdherentsManager::getList();
    echo '<div class="btn"><a href="PHP/VIEW/FormAjout.php"><button>Ajouter un Musicien</button></a></div>';
    echo'<div class="espacehor"></div>';
    echo '<div class="colonne">';
    foreach($listeMusiciens as $unMusicien)
    {
        echo'<div class="ligne">
                <div></div>
                <div class="case">'.$unMusicien->getNom()." - ".$unMusicien->getPrenom().'</div>
                <div></div>
            </div>';
    }
    echo'</div>';
?>