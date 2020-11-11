<?php

require("employe.class.php");

$dateEmbauche1=new Datetime("11-03-2001");
$dateEmbauche2=new Datetime("26-06-2010");
$dateEmbauche3=new Datetime("15-10-2005");
$dateEmbauche4=new Datetime("02-11-2015");
$dateEmbauche5=new Datetime("14-02-2006");

$employe[]=new Employe(["nom"=>"Ducoin","prenom"=>"Ludovic","dateEmbauche"=>$dateEmbauche1,"fonction"=>"plaquiste","salaireBrutAnnuel"=>"18000","service"=>"AZ"]);
$employe[]=new Employe(["nom"=>"Mayeux","prenom"=>"Bruno","dateEmbauche"=>$dateEmbauche2,"fonction"=>"Développeur","salaireBrutAnnuel"=>"26000","service"=>"AE"]);
$employe[]=new Employe(["nom"=>"Toupin","prenom"=>"Lauent","dateEmbauche"=>$dateEmbauche3,"fonction"=>"conducteur","salaireBrutAnnuel"=>"12000","service"=>"AH"]);
$employe[]=new Employe(["nom"=>"Blarel","prenom"=>"Olivier","dateEmbauche"=>$dateEmbauche4,"fonction"=>"mecanicien","salaireBrutAnnuel"=>"22000","service"=>"AF"]);
$employe[]=new Employe(["nom"=>"Tondeur","prenom"=>"Etienne","dateEmbauche"=>$dateEmbauche5,"fonction"=>"commercial","salaireBrutAnnuel"=>"19000","service"=>"AX"]);

?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Titre</title>
</head>
<body>
    
        <h1>***************** Liste des Employés ************************</h1>
        <div class="contenu">
           <?php foreach($employe as $elt)
                  {
                    echo'<div class="employe">';
                      $elt->afficheEmployeHTML();
                    echo'</div>';
                  } 
             ?>
    </div> 
</body>
</html>	
