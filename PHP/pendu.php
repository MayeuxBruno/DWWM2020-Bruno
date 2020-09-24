<?php
require "fonctionspendu.php";
$nberreurs=0;

$mot=choisirMot();
$motcode=coderMot($mot);

for($i=0;$i<strlen($mot);$i++)
{
    $tabmotcode[$i]=$mot[$i];
}
do
{
    //echo $mot;
    afficherTableau($motcode);
    $lettre=demanderLettre();
    $position=testerLettre($lettre,$tabmotcode,0);
    if($position!=[])
    {
        $motcode=ajouterLesLettres($lettre,$motcode,$position);
        afficherTableau($motcode);
    }
    else
    {
    
        $mauvaiseslettres[$nberreurs]=$lettre;
        $nberreurs++;
        dessinerPendu($nberreurs);
    }
    if($nberreurs>=1)
    {
        afficherMauvaisesLettres($mauvaiseslettres);
    }
    $gagne=testerGagner($nberreurs,$motcode);
}while($gagne==0);
if($gagne==1)
{
    echo "\n La partie est gagnée";
}
else
{
    echo "\n La partie est perdue"; 
    echo "\n Le mot à trouver était ".$mot;
}

