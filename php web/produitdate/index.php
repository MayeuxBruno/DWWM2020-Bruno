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
     include "php/view/Nav.php";
     
     include $chemin.$nom.'.php';
     
     include "php/view/Footer.php";
}

// connexion à la base de données
DbConnect::Init();

//création du tableau de redirections

$routes=[
     "default"=>["PHP/VIEW/","listeProduits","Liste des Produits"],
     "produits"=>["PHP/VIEW/","listeProduits","Liste des Produits"],
     "actionForm"=>["PHP/VIEW/","FormProduit","Détail du Produit"],
     "actionProduit"=>["PHP/VIEW/","actionProduit","Détail du Produit"],

     "categories"=>["PHP/VIEW/","listeCategories","Liste des Categories"],
     "FormCategorie"=>["PHP/VIEW/","FormCategorie","Détail du Produit"],
     "actionCategorie"=>["PHP/VIEW/","actionCategorie","Détail du Produit"],

     /*"actionForm"=>["PHP/VIEW/","FormProduit","Détail du Produit"],
     "actionProduit"=>["PHP/VIEW/","actionProduit","Détail du Produit"],
     "ajj"=>["PHP/VIEW/","add","Détail du Produit"],
     "modif"=>["PHP/VIEW/","modif","Modification du Produit"],
     "delete"=>["PHP/VIEW/","del","Détail du Produit"],*/
     
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










