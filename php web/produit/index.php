<?php

$titrePage="Gestion de Produits";

include "php/view/Head.php";
include "php/view/Header.php";



$tableau=ProduitsManager::getList();
echo'<div class="colonne">
     <div class="espacehor"></div>'; 
foreach($tableau as $unProduit)
{
    echo '<div class="lingne">
            <div></div>
            <div class="bouton blanc">'.$unProduit->getLibelleProduit().'</div>
            <div>
                <a href="php/view/consult.php?id='.$unProduit->getIdProduit().'"><div class="bouton vert">Consulter'.$unProduit->getIdProduit().'</div></a>
                <div class="bouton orange">Modifier</div>
                <div class="bouton rouge">Supprimer</div>
            </div>
             <div></div>
          </div>';
}
echo'</div>
     <div class="espacehor"></div>
     <div>
        <div></div>
        <div class="bouton vertclair">Ajouter un Produit</div>
        <div></div>
     </div>';






include "php/view/Footer.php";
