<?php

function inverseMot ($mot)
{
    $longeur=strlen($mot);
    if ($longeur==1)
    {
        return $mot;
    }
    else
    {
        return substr($mot,$longeur-1).inverseMot(substr($mot,0,$longeur-1));
    }
}

//echo inverseMot("bonjour");
$longeur=strlen("bonjour");
echo substr("bonjour",0,$longeur-1);