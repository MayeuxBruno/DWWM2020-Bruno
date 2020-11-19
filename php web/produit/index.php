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
                <a href="php/view/consult.php?id='.$unProduit->getIdProduit().'"><div class="bouton vert">Consulter</div></a>
                <a href="php/view/update.php?id='.$unProduit->getIdProduit().'"><div class="bouton orange">Modifier</div></a>
                <a href="php/view/del.php?id='.$unProduit->getIdProduit().'"><div class="bouton rouge">Supprimer</div></a>
            </div>
             <div></div>
          </div>';
}
echo'</div>
     <div class="espacehor"></div>
     <div>
        <div></div>
        <a href="php/view/ajout.php"><div class="bouton vertclair">Ajouter un Produit</div></a>
        <div></div>
     </div>';






include "php/view/Footer.php";
