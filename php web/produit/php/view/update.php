<?php

$titrePage="Modification de Produit";

include "Head.php";
include "Header.php";

$idProduit=$_GET['id'];
$produit=ProduitsManager::findById($idProduit);

     echo'<div class="colonne">
     <div class="espacehor"></div>
     <form method="post" action="modif.php">
        <div class="ligne">
        <div></div>
        <div class="bouton blanc">Nom</div>
        <div class="bouton vertclair"><input type="text" value="'.$produit->getLibelleProduit().'"/></div>
        <div></div>
        </div>
        <div class="ligne">
        <div></div>
        <div class="bouton blanc">Prix</div>
        <div class="bouton vertclair"><input type="text" value="'.$produit->getPrix()."€".'"/></div>
        <div></div>
        </div>
        <div class="ligne">
        <div></div>
        <div class="bouton blanc">Date de peremption</div>
        <div class="bouton vertclair"><input type="text" value="'.$produit->getDateDePeremption().'"/></div>
        <div></div>
        </div>
        <div class="espacehor"></div>
        <div>
        <div></div>
        <div><input class="bouton vertclair" type="submit" value="Modifier">
        <div></div>
        </div>
     </form>
     </div>

     <div class="espacehor"></div>
     <div class="bouton vertclair"><a href="../../index.php">Retour</a></div>';

include "Footer.php";