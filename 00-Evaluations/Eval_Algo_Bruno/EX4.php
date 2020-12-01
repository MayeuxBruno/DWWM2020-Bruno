<?php

// déclaration des tableaux
$tableau1=array("Avion","BOING747","AIRBUSA380","LEARJET45","DC10","CONCORDE","ANTONOV32");
$tableau2=array("CodeAvion","BO","AB","LJ","DC","CO","AN");
$tableau3=array("VitesseCroisiere",800,950,700,900,1400,560);
$tableau4=array("Rayon d'action",10000,12000,4500,8000,16000,2500);

echo" **** STATISTIQUES AVIONS ****\n\n";

do
{   
    echo"\n";
    // demande le code avion à l'utilisateur et verifie qu'il existe
    do
    {
        $code=strtoupper(readline("Entrez le code de l'avion : "));
        $index=array_search($code,$tableau2);
        if ($index==false)
        {
            echo "\n Cet avion n'existe pas\n\n";
        }
    }while($index==false);

    // affiche les informations sur l'avion
    echo "Avion : ".$tableau1[$index]."  Vitesse : ".$tableau3[$index]."  Rayon d'action : ".$tableau4[$index]."\n\n";

    //demande si l'utilisateur veux afficher les caractèristiques
    do
    {
        $stat=strtolower($stat=readline("Voulez vous éditer les statistiques (O/N) "));    
    }while(($stat!="o")&&($stat!="n"));

    // affiche l'avion le plus rapide et la moyenne de rayon d'action.
    if ($stat=="o")
    {
        $max=array_search(max($tableau3),$tableau3);
        echo " L'avion qui vole le plus vite est le ".$tableau1[$max]." à ".$tableau3[$max]." km/h \n";
        echo " La moyenne des rayond'action est de : ".array_sum($tableau4)/(count($tableau4)-1)."\n\n";
    }

    do
    {
        $autre=strtolower(readline("Voulez vous faire une autre recherche (O/N) "));
    }while(($autre!="o")&&($autre!="n"));
    
}while($autre=="o");

echo "Au revoir et à bientôt!";