<?php
$tableau=ProduitsManager::getList();
echo'<div class="colonne">
     <div class="espacehor"></div>'; 
foreach($tableau as $unProduit)
{
    echo '<div class="lingne">
            <div></div>
            <div class="bouton blanc">'.$unProduit->getLibelleProduit().'</div>
            <div>
                <a href="index.php?code=detail&mode=cons&id='.$unProduit->getIdProduit().'"><div class="bouton vert">Consulter</div></a>
                <a href="index.php?code=ajout&id='.$unProduit->getIdProduit().'&mode=upd"><div class="bouton orange">Modifier</div></a>
                <a href="index.php?code=delete&id='.$unProduit->getIdProduit().'"><div class="bouton rouge">Supprimer</div></a>
            </div>
             <div></div>
          </div>';
}
echo'</div>
     <div class="espacehor"></div>
     <div>
        <div></div>
        <a href="index.php?code=ajout&mode=add"><div class="bouton vertclair">Ajouter un Produit</div></a>
        <div></div>
     </div>';
?>