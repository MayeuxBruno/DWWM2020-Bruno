<?php
$total=0;
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
while ($rendu>0)
{
    if($rendu>=10)
    {
        echo"10 Euros\n";
        $rendu-=10;
    }
    else
    {
        if($rendu>=5)
        {
            echo"5 Euros\n";
            $rendu-=5;
        }
        else
        {
            if ($rendu>=1)
            {
                echo"1 Euro\n";
                $rendu-=1;
            }
        }
    }
}