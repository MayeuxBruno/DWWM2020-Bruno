<?php

$mode=$_GET['mode'];
$code=$_GET['code'];
if(isset($_GET['id']))
{
    $id=$_GET['id'];

    $produit=ProduitsManager::findById($id);
    $idProduit=$produit->getIdProduit();
    $libelle=$produit->getLibelleProduit();
    $prix=$produit->getPrix();
    $date=$produit->getDateDePeremption();
}


if($mode=="add")
{
    $libelle=$prix=$date="";
    $methode='<form method="post" action="index.php?code=ajj">';
    $boutons='
    <div></div>
    <div class="bouton vertclair demi"><a href="index.php">Retour</a></div>
    <div><input class="bouton orange" type="submit" value="Ajouter">
    <div></div>';
    }
    else if ($mode=="upd")
    {
        $methode='<form method="post" action="index.php?code=modif">
                <input class="cache" type="text" name="idProduit" value="'.$idProduit.'"/>';
        $boutons='
        <div></div>
        <div class="bouton vertclair demi"><a href="index.php">Retour</a></div>
        <div><input class="bouton orange" type="submit" value="Modifier">
        <div></div>';
    }
    else if ($mode=="cons")
    {
        $methode='<form method="post"">';
        $boutons='<div class="bouton vertclair"><a href="index.php">Retour</a></div>';
    }

        


echo '<div class="colonne">
     <div class="espacehor"></div>
     '.$methode.'
     
        <div class="ligne">
        <div></div>
        <div class="bouton blanc">Nom</div>
        <div class="bouton vertclair"><input type="text" name="libelleProduit" value="'.$libelle.'"/></div>
        <div></div>
        </div>
        <div class="ligne">
        <div></div>
        <div class="bouton blanc">Prix</div>
        <div class="bouton vertclair"><input type="text" size="6" name="prix"value="'.$prix.'">&nbsp;€</div>
        <div></div>
        </div>
        <div class="ligne">
        <div></div>
        <div class="bouton blanc">Date de peremption</div>
        <div class="bouton vertclair"><input type="text" name="dateDePeremption" value="'.$date.'"/></div>
        <div></div>
        </div>
        <div class="espacehor"></div>
        <div>
        '.$boutons.'
        </div>
     </form>
     </div>';
?>