<?php

include "generate.php";

$nomDB="gestion_hotels";
$nomTable="hotels";


/*********************************************************************************************************/
/*****                              CONNECTION A LA BASE DE DONNEES                                 ******/
/*********************************************************************************************************/

function connectDb($nomDB)
{
    try { // execute les instructions et rpère les erreurs
        $db = new PDO('mysql:host=localhost;dbname=baseproduits;charset=utf8', 'root', '');
    }
    catch (Exception $e) // si une erreur est levée, on agit en conséquence
    {
        if ($e->getCode() == 1049)
        {
            echo "Base de données indisponible";
            die(); // permet d'arrêter l'execution
        }
        else if ($e->getCode() == 1045) // erreur identification
        {
            echo "La connexion a échouée";
            die();
        }
        else
        {
            die('Erreur : ' . $e->getMessage());
        }
    }
    echo "Connection à la base de données réussie";
    return $db;
}


/*********************** Récupération des noms de colonnes de la table ****************************/

function recupColonne()
{
    $requete = $db->query('SELECT TABLE_NAME,COLUMN_NAME FROM INFORMATION_SCHEMA.COLUMNS WHERE TABLE_SCHEMA="'.$nomDB.'" and TABLE_NAME="'.$nomTable.'"'); // $requete est un objet de type PDO_Statement
    while ($donnees = $requete->fetch(PDO::FETCH_ASSOC)) // le while permet de boucler sur les enregistrements
    // il s'arrete quand fetch renvoi false
    {
    $colonne[]=$donnees["COLUMN_NAME"];
    }
    return $colonne;
}




