<?php
require "fonctionspendu.php";


/*$tab=array("B","O","N","J","O","U","R");
echo "Cette méthode doir donner B O N J O U R et ca donne : ";
afficherTableau($tab);*/

/*$test = "bonjour";
echo "Cette méthode doit donner        et ca donne : " ;
afficherTableau(coderMot($test));*/

Echo "Cette méthode doit donner \n 1 \n 4 et ca donne \n" ;
$t = array( 'B', 'O', 'N', 'J', 'O', 'U', 'O' );
$positions = testerLettre('O', $t,0);
foreach ($positions as $pos)
{
    echo("position : ".$pos."\n");
}

/*Echo "Cette méthode doit donner B O N K O U R et ca donne ";
$t = array( 'B', 'O', 'N', 'J', 'O', 'U', 'R' );
afficherTableau( ajouterUneLettre('D', $t, 0));*/

/*$motATrouver="BONJOUR";
$t = array( 'B', '_', 'N', 'J', '_', 'U', '_' );
echo "Cette méthode doit donner B O N J O U _ et ca donne ";
afficherTableau(ajouterLesLettres('O', $t, testerLettre('O', str_split($motATrouver),0)));
// en l’absence des autres methodes
//Print_r(ajouterLesLettres('O', $t,[1,4]);*/

//DessinerPendu(5);