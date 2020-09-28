<?php
require "fonctionspendu.php";
function lancerPartie()
{
do{
    $nberreurs=0;        
    $mauvaiseslettres=array();
    $lettresaisie=array();
    $nberreurmax=8;

    // selection et codage automatique du mot 
    $motAt=choisirMot();
    echo $motAt."\n";

    
    
    // conversion du mot en tableau 
    $tabmotcode = str_split($motAt);

    // selection du niveau de difficulté 1 ou 2
    do{
        $difficulte=readline("Entrez un niveau de difficulté 1 ou 2 : ");
    }while(($difficulte!=1)&&($difficulte!=2));
    
    $motcode=coderMot($motAt,$difficulte);
    
    do
    {
        dessinerPendu($nberreurs);
        afficherTableau($motcode);
        echo"\n Il vous reste ".(8-$nberreurs)." chances.\n";

        // affichage de la liste de mauvaises lettres si le joueur à donné des mauvaises lettres

        if(!empty($mauvaiseslettres))
        {
            afficherMauvaisesLettres($mauvaiseslettres);
        }
        
        $lettre=demanderLettre($lettresaisie);
        //$lettresaisie[]=$lettre;
        $position=testerLettre($lettre,$tabmotcode,0);

        if($position!=[])  // Si la lettre se trouve dans le mot
        {
            $motcode=ajouterLesLettres($lettre,$motcode,$position);
           
        }
        else
        {
            if(!in_array($lettre,$mauvaiseslettres))//Si la mauvaise lettre n'a pas déjà été donnée 
            {
                $mauvaiseslettres[]=$lettre;
            }
            $nberreurs++;
        }
        $gagne=testerGagner($nberreurs,$motcode);   
    }while($gagne==0);

    // affichage du mot du pendu et du résultat de la partie 
    dessinerPendu($nberreurs);
    //afficherTableau($tabmotcode);

    if($gagne==1)
    {
        echo "\n******* La partie est gagnée *******\n\n";
        echo "Le mot été $motAt";
    }
    else
    {
        echo "\n******* La partie est perdue !!!!!! *******\n\n";
        echo "Le mot été $motAt"; 
    }
    echo "\n\n";

    // demande à l'utilisateur si il veux rejouer
    do{
        $rejouer=strtolower(readline ("voulez vous rejouer (O/N) ? "));
    }while(($rejouer!="o")&&($rejouer!="n"));

}while($rejouer=="o");
}

lancerPartie();