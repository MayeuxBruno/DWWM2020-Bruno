<?php
function chargerClasse($classe)
{
    if (file_exists("php/controller/".$classe.".class.php"))
    {
        require "php/controller/".$classe.".class.php";
    }
    if (file_exists("php/model/".$classe.".class.php"))
    {
        require "php/model/".$classe.".class.php";
    }
}

spl_autoload_register("chargerClasse");

function AfficherPage($page)
{
     $chemin=$page[0];
     $nom=$page[1];
     $titre=$page[2];
     
     include "php/view/Head.php";
     include "php/view/Header.php";
     
     include $chemin.$nom.'.php';
     
     include "php/view/Footer.php";
}

// connexion à la base de données
DbConnect::Init();

//création du tableau de redirections

$routes=[
     "default"=>["PHP/VIEW/","listeAdherents","Liste des Musiciens"],
     "liste"=>["PHP/VIEW/","listeAdherents","Liste des Musiciens"],
     
     "formajout"=>["PHP/VIEW/","FormAjout","Ajouter un Membre"],
     "ajout"=>["PHP/VIEW/","AjoutAdherent","Ajouter un Membre"],

     "detail"=>["PHP/VIEW/","detail","Membre"],

     "formModif"=>["PHP/VIEW/","FormModif","Ajouter un Membre"],
     "update"=>["PHP/VIEW/","update","Ajouter un Membre"],
    
    
     "formSuppr"=>["PHP/VIEW/","FormSupp","Ajouter un Membre"],
     "delete"=>["PHP/VIEW/","delete","Ajouter un Membre"]
];

if (isset($_GET["code"]))
{
     $code=$_GET["code"];
     // Si la route existe
     if (isset($routes[$code]))
     {
          AfficherPage($routes[$code]);
     }
     else
     {
          AfficherPage($routes["default"]);
     }
}
else
{
     AfficherPage($routes["default"]);
}

?>
