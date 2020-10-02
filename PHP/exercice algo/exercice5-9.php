<?php
$total=$dix=$cinq=$un=0;
/** Controle de la saisie des prix **/
do
{
    do
    {
        do
        {
            $prix=readline("Entrez un prix ou 0 pour stopper la saisie : ");
        }
        while(!is_numeric($prix));
    } 
    while(!is_integer($prix*1));
    $total+=$prix;

}
while($prix!=0);
echo"Le total de vos achats est de : ".$total." Euros.\n";

/** Test si la somme donné par le client est supérieur au total* */
do
{
    do
    {
        $donne=readline("Entrez la somme donnée : ");
    }
    while(!is_numeric($donne));
} 
while((!is_integer($prix*1))||($donne<$total));
$rendu=$donne-$total;
echo"La somme à rendre est de : ".$rendu." Euros\n";

/** Calcul du rendu de monnaie **/
while ($rendu>0)
{
    if($rendu>=10)
    {
        $dix++;
        $rendu-=10;
    }
    else
    {
        if($rendu>=5)
        {
            $cinq++;
            $rendu-=5;
        }
        else
        {
            if ($rendu>=1)
            {
                $un++;
                $rendu-=1;
            }
        }
    }
}
echo"La somme rendue est de : \n".$dix." billet(s) de 10€ \n".$cinq." billet(s) de 5€ \n".$un." pièce(s) de 1€";
