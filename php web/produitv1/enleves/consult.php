<?php
$idProduit=$_GET['id'];
$produit=ProduitsManager::findById($idProduit);
     echo'<div class="colonne">
     <div class="espacehor"></div>
     <div class="ligne">
     <div></div>
     <div class="bouton blanc">Nom</div>
     <div class="bouton vertclair"><input type="text" disabled="disabled" value="'.$produit->getLibelleProduit().'"/></div>
     <div></div>
     </div>
     <div class="ligne">
     <div></div>
     <div class="bouton blanc">Prix</div>
     <div class="bouton vertclair"><input type="text" disabled="disabled" size="6" value="'.$produit->getPrix().'"/>&nbsp;€</div>
     <div></div>
     </div>
     <div class="ligne">
     <div></div>
     <div class="bouton blanc">Date de peremption</div>
     <div class="bouton vertclair"><input type="text" disabled="disabled" value="'.$produit->getDateDePeremption().'"/></div>
     <div></div>
     </div>
     </div>

     <div class="espacehor"></div>
     <div class="bouton vertclair"><a href="index.php">Retour</a></div>';

