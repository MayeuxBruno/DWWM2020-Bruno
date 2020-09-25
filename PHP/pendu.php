<?php
require "fonctionspendu.php";
$nberreurs=0;       
$indexmauvltrs=0;   // index le tableau de la liste des mauvaises lettres 
$mauvaiseslettres=array();

// selection et codage automatique du mot 
$mot=choisirMot();
$motcode=coderMot($mot);

// conversion du mot en tableau 
$tabmotcode = str_split($mot);

do
{
    afficherTableau($motcode);
    echo"\n Il vous reste ".(8-$nberreurs)." chances.\n\n";
    $lettre=demanderLettre();
    $position=testerLettre($lettre,$tabmotcode,0);
    if($position!=[])
    {
        $motcode=ajouterLesLettres($lettre,$motcode,$position);
    }
    else
    {
        // verifie que la mauvaise lettre n'a pas deja été donnée
        if(!in_array($lettre,$mauvaiseslettres)) 
        {
            $mauvaiseslettres[$indexmauvltrs]=$lettre;
            $indexmauvltrs++;
        }
        $nberreurs++;
        dessinerPendu($nberreurs);
    }
    $gagne=testerGagner($nberreurs,$motcode);

    // affichage de la liste de mauvaises lettres si la partie n'est pas terminée
    // et que le joueur à déja donné des mauvaises lettres
    if(((count($mauvaiseslettres))!=0)&&($gagne==0))
    {
        afficherMauvaisesLettres($mauvaiseslettres);
    }
}while($gagne==0);

// affichage du mot et du résultat de la partie 

afficherTableau($tabmotcode);

if($gagne==1)
{
    
    echo "\n******* La partie est gagnée *******\n\n";
}
else
{
    echo "\n La partie est perdue !!!!!!"; 
}

