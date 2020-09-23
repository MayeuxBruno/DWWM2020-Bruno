<?php
$chiffres=0;
$voyelles=array("a","e","i","o","u","y");
echo "**** Analyse des chaines de caractères ****\n\n";
$chaine=readline("Taper une chaine de caractères : (inférieur à 255, terminée par un point ) : ");

//détermine le nombre de chiffres dans la chaine
for ($i=0;$i<strlen($chaine);$i++)
{
    if (is_numeric($chaine[$i]))
    {
        $chiffres++;
    }

}

echo"La chaine comprend : \n";
echo"\t".strlen($chaine)." caractères\n";
echo "\t\t$chiffres chiffres";
