<?php

$titrePage="Modification de Produit";

include "Head.php";
include "Header.php";

$idProduit=$_GET['id'];
$produit=ProduitsManager::findById($idProduit);

     echo'<div class="colonne">
     <div class="espacehor"></div>
     <form method="post" action="modif.php">
        <input class="cache" type="text" name="idProduit" value="'.$idProduit.'"/>
        <div class="ligne">
            <div></div>
            <div class="bouton blanc">Nom</div>
            <div class="bouton vertclair"><input type="text" name="libelleProduit" value="'.$produit->getLibelleProduit().'"/></div>
            <div></div>
        </div>
        <div class="ligne">
            <div></div>
            <div class="bouton blanc">Prix</div>
            <div class="bouton vertclair"><input type="text" name="prix" size="6" value="'.$produit->getPrix().'"/>&nbsp;€</div>
            <div></div>
        </div>
        <div class="ligne">
            <div></div>
            <div class="bouton blanc">Date de peremption</div>
            <div class="bouton vertclair"><input type="text" name="dateDePeremption" value="'.$produit->getDateDePeremption().'"/></div>
            <div></div>
        </div>
        <div class="espacehor"></div>
        <div>
            <div></div>
            <div class="bouton vertclair demi"><a href="../../index.php">Retour</a></div>
            <div><input class="bouton orange" type="submit" value="Modifier">
            <div></div>
        </div>
     </form>
     </div>
     </div>';

   

include "Footer.php";