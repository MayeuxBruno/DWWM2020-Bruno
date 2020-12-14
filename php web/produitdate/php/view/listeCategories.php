<?php
$tableau=CategoriesManager::getList();
echo'<div class="colonne">
     <div class="espacehor"></div>'; 
foreach($tableau as $uneCategorie)
{
    echo '<div class="lingne">
            <div></div>
            <div class="bouton blanc">'.$uneCategorie->getLibelleCategorie().'</div>
            <div>
                <a href="index.php?code=FormCategorie&mode=cons&id='.$uneCategorie->getIdCategorie().'"><div class="bouton vert">Consulter</div></a>
                <a href="index.php?code=FormCategorie&mode=upd&id='.$uneCategorie->getIdCategorie().'&mode=upd"><div class="bouton orange">Modifier</div></a>
                <a href="index.php?code=FormCategorie&mode=del&id='.$uneCategorie->getIdCategorie().'"><div class="bouton rouge">Supprimer</div></a>
            </div>
             <div></div>
          </div>';
}
echo'</div>
     <div class="espacehor"></div>
     <div>
        <div></div>
        <a href="index.php?code=FormCategorie&mode=add"><div class="bouton vertclair">Ajouter une Categorie</div></a>
        <div></div>
     </div>';
?>