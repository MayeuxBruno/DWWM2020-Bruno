<?php

include "personne.Class.php";

try{
    $db = new PDO('mysql:host=localhost;dbname=personne;charset=utf8', 'root', '');
}
catch (Exception $e)
{
    if($e->getCode()==1049)
    {
        echo "Base de données indisponible";
        die();
    }
    else if($e->getCode()==1045){
        echo "La connexion a échouée";
        die();
    }
    else{
        die('Erreur : '.$e->getMessage());
    }

}

echo "On est connecte à la base<br><br>";
/*
$requete=$db->query("SELECT idPersonne, nomPersonne, prenom, age FROM identite where idPersonne=1");
$reponse=$requete->fetch(PDO::FETCH_ASSOC);
$pers=new Personne($reponse);
$pers->affichage();
*/

/*$q=$db->exec('INSERT INTO identite(nomPersonne,prenom,age)VALUES("Blarel","Olivier",43)');*/

$p=new Personne(["nomPersonne"=>"Pinson","prenom"=>"Nocolas","age"=>50]);

/*$q = $db->prepare('INSERT INTO identite(nomPersonne,prenom,age)VALUE(:nom,:prenom,:age)');

$q->bindValue(':nom',$perso->getNomPersonne());
$q->bindValue(':prenom',$perso->getPrenom());
$q->bindValue(':age',$perso->getAge());*/

var_dump($p);
$q=$db->prepare('INSERT INTO identite(nomPersonne,prenom,age)VALUE($perso->getNomPersonne(),$perso->getPrenom(),$perso->getAge())');
$reponse=$q->execute();

var_dump($reponse);

$requete=$db->query("SELECT idPersonne, nomPersonne, prenom, age FROM identite");
while ($donnees = $requete->fetch(PDO::FETCH_ASSOC))
{
    $pers[]=new Personne ($donnees);
}

var_dump($pers);
foreach ($pers as $elt)
{
    $elt->affichage();
}