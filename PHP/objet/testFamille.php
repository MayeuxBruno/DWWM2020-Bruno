<?php

function ChargerClasse($classe)
{
    require $classe.".Class.php";
}
spl_autoload_register("ChargerClasse");

$pere = new Personne (["nom"=>"Dupont","prenom"=>"Toto","age"=>35,"genre"=>"H"]);
$mere = new Personne (["nom"=>"Dupont","prenom"=>"Tata","age"=>30,"genre"=>"F"]);
$voit = new Voiture (["marque"=>"Renault","modele"=>"Clio","immat"=>"DD888DD","km"=>26000]);
$famille= new Famille (["pere"=>$pere,"mere"=>$mere,"voiture"=>$voit]);
//var_dump ($famille);
echo $famille->toString();

