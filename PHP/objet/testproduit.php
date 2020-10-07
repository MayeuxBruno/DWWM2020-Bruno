<?php

function ChargerClasse($classe)
{

    require $classe.".Class.php";
}
spl_autoload_register("ChargerClasse");

$cat1=new Categorie(["libelle"=>"epicerie","tva"=>19.6]);
$cat2=new Categorie(["libelle"=>"menager","tva"=>19.6]);
$lieu[]=new LieuDeStockage(["entrepot"=>12,"zone"=>"A5"]);
$lieu[]=new LieuDeStockage(["entrepot"=>22,"zone"=>"B2"]);
$lieu[]=new LieuDeStockage(["entrepot"=>16,"zone"=>"C8"]);
$lieu[]=new LieuDeStockage(["entrepot"=>10,"zone"=>"D5"]);
$produit[]=new Produit(["numero"=>1,"prixHt"=>2.5,"designation"=>"café","couleur"=>"noir","dateValidite"=>new DateTime('12-10-2020'),"categorie"=>$cat1,"lieuStockage"=>$lieu[0]]);
$produit[]=new Produit(["numero"=>10,"prixHt"=>10,"designation"=>"lessive","couleur"=>"bleu","dateValidite"=>new DateTime('12-11-2020'),"categorie"=>$cat2,"lieuStockage"=>$lieu[1]]);
$produit[]=new Produit(["numero"=>5,"prixHt"=>1.10,"designation"=>"pates","couleur"=>"jaune","dateValidite"=>new DateTime('12-12-2020'),"categorie"=>$cat1,"lieuStockage"=>$lieu[2]]);
echo "Il y a ".Produit::getCompteur()." produits en stock\n";
foreach($produit as $elt)
{
    echo $elt->toString();
}

echo $produit[1]->prixTtc();