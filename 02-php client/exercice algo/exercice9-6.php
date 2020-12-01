<?php

function purge ($chaine,$car)
{
    $cpt=0;
    for ($i=0;$i<strlen($chaine);$i++)
    {
        if ($chaine[$i]==$car)
        {
            $k=$i;
            do{
                $k++;
                $cpt++;
            }while($chaine[$k]==$car);
            echo $cpt;
            for ($j=$i;$j<strlen($chaine)-$cpt;$j++)
            {
                $chaine[$j]=$chaine[$j+$cpt];
                //echo $chaine;
            }
            $chaine=substr($chaine,0,strlen($chaine)-$cpt); 
        }
    }
    return $chaine;
}

$str=readline("Entrez une chaine de caratcères : ");
$caractere=readline("Entrez le caractère à supprimer : ");
$str=purge($str,$caractere);
echo $str;