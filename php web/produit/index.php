<?php

include "php/view/Head.php";
include "php/view/Header.php";


$tableau=ProduitsManager::getList();
echo'<div class="colonne">'; 
foreach($tableau as $unProduit)
{
    echo '<div class="lingne">
            <div></div>
            <div class="bouton">'.$unProduit->getLibelleProduit().'</div>
            <div>
                <div class="bouton vert">Consulter</div>
                <div class="bouton orange">Modifier</div>
                <div class="bouton rouge">Supprimer</div>
            </div>
             <div></div>
          </div>';
}
echo'</div>';







include "php/view/Footer.php";
