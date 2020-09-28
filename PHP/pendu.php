<?php
require "fonctionspendu.php";
do{
    $nberreurs=0;        
    $mauvaiseslettres=array();

    // selection et codage automatique du mot 
    $motAt=choisirMot();
    $motcode=coderMot($motAt);

    // conversion du mot en tableau 
    $tabmotcode = str_split($motAt);

    do
    {
        dessinerPendu($nberreurs);
        afficherTableau($motcode);
        echo"\n Il vous reste ".(8-$nberreurs)." chances.\n";
        if(((count($mauvaiseslettres))!=0)&&($gagne==0))
        {
            afficherMauvaisesLettres($mauvaiseslettres);
        }
        $lettre=demanderLettre();
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

        // affichage de la liste de mauvaises lettres si la partie n'est pas terminée
        // et que le joueur à déja donné des mauvaises lettres
        
    }while($gagne==0);

    // affichage du mot du pendu et du résultat de la partie 
    dessinerPendu($nberreurs);
    afficherTableau($tabmotcode);

    if($gagne==1)
    {
        echo "\n******* La partie est gagnée *******\n\n";
    }
    else
    {
        echo "\n******* La partie est perdue !!!!!! *******"; 
    }
    echo "\n\n";

    // demande à l'utilisateur si il veux rejouer
    do{
        $rejouer=strtolower(readline ("voulez vous rejouer (O/N) ? "));
    }while(($rejouer!="o")&&($rejouer!="n"));

}while($rejouer=="o");
