<?php

function purge ($chaine,$car)
{
    for ($i=0;$i<strlen($chaine);$i++)
    {
        if ($chaine[$i]==$car)
        {
            for ($j=$i;$j<strlen($chaine)-1;$j++)
            {
                $chaine[$j]=$chaine[$j+1];
            }
        
        }
    }
    return $chaine;
}

$chaine=readline("Entrez une chaine de caratcères : ");
$caractere=readline("Entrez le caractère à supprimer : ");
$chaine=purge($chaine,$caractere);
echo $chaine;