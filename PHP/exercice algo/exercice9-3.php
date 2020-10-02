<?php

function trouve($chaine,$car)
{
    $valeur=0;
    for ($i=0;$i<strlen($chaine);$i++)
    {
        if ($chaine[$i]==$car)
        {
            $valeur++;
        }
    }
    return $valeur;
}

$chaine=strtolower(readline("Entrez une cahine de caractères : "));
$voyelles=trouve($chaine,"a");
$voyelles+=trouve($chaine,"e");
$voyelles+=trouve($chaine,"i");
$voyelles+=trouve($chaine,"o");
$voyelles+=trouve($chaine,"u");
$voyelles+=trouve($chaine,"y");
echo "La chaine saisie comporte ".$voyelles." voyelles";
