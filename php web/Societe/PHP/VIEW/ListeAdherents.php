<?php
    echo'<div class="espacehor"></div>';
    $listeMusiciens=AdherentsManager::getList();
    echo '<div class="btn"><a href="index.php?code=formajout"><button class="vert">Ajouter un Musicien</button></a></div>';
    echo'<div class="espacehor"></div>';
    echo '<div class="colonne">';
    foreach($listeMusiciens as $unMusicien)
    {
        echo'<div class="ligne">
                <div></div>
                <div class="case">'.$unMusicien->getNom()." - ".$unMusicien->getPrenom().'</div>
                <div>
                <div class="case vert"><a href="index.php?code=detail&id='.$unMusicien->getIdAdherent().'">Détail</a></div>
                <div class="case orange"><a href="index.php?code=formModif&id='.$unMusicien->getIdAdherent().'">Modifier</a></div>
                <div class="case rouge"><a href="index.php?code=formSuppr&id='.$unMusicien->getIdAdherent().'">Supprimer</a></div>
                </div>
                <div></div>
            </div>';
    }
    echo'</div>';
?>