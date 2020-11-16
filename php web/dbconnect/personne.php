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

$requete=$db->query("SELECT idPersonne, nomPersonne, prenom, age FROM identite where idPersonne=1");
$reponse=$requete->fetch(PDO::FETCH_ASSOC);
$pers=new Personne($reponse);
$pers->affichage();

