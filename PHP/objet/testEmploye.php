<?php

function ChargerClasse($classe)
{
    require $classe.".Class.php";
}
spl_autoload_register("ChargerClasse");

$employe1=new Employe (["nom"=>"Dupont","prenom"=>"Marc","dateEmbauche"=>new DateTime("01-12-2019"),"fonction"=>"comptable","salaireBrutAnnuel"=>20,"service"=>"comptabilite"]);
echo "L'employé a : ".$employe1->anciennete()." ans d'ancienneté"; 

$date = new DateTime('now');
var_dump($date);
