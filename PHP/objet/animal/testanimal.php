<?php

function ChargerClasse($classe)
{
    require $classe.".Class.php";
}
spl_autoload_register("ChargerClasse");

$chien1= new Chien (["nom"=>"foxy","race"=>"chien","identification"=>123,"lof"=>"n"]);
$chien2= new Chien (["nom"=>"calway","race"=>"berger allemand","identification"=>456,"lof"=>"o"]);

echo $chien1->toString()."\n";
echo $chien2->toString()."\n";
echo "Vous avez créé ".Animal::getCompteur()." Fiches Animal\n";