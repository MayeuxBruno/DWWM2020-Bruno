<?php

$titrePage="Ajout de Produit";

include "Head.php";
include "Header.php";


     echo'<div class="colonne">
     <div class="espacehor"></div>
     <form method="post" action="add.php">
        <div class="ligne">
        <div></div>
        <div class="bouton blanc">Nom</div>
        <div class="bouton vertclair"><input type="text" name="libelleProduit"/></div>
        <div></div>
        </div>
        <div class="ligne">
        <div></div>
        <div class="bouton blanc">Prix</div>
        <div class="bouton vertclair"><input type="text" size="6" name="prix"/>€</div>
        <div></div>
        </div>
        <div class="ligne">
        <div></div>
        <div class="bouton blanc">Date de peremption</div>
        <div class="bouton vertclair"><input type="text" name="dateDePeremption"/></div>
        <div></div>
        </div>
        <div class="espacehor"></div>
        <div>
        <div></div>
        <div><input class="bouton vertclair" type="submit" value="ajouter">
        <div></div>
        </div>
     </form>
     </div>

     <div class="espacehor"></div>
     <div class="bouton vertclair"><a href="../../index.php">Retour</a></div>';

include "Footer.php";