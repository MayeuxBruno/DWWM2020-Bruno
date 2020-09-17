<?php
$moyenne=0;

/**** Controle de la saisie d'un entien positif avec intitule ****/
function saisieEntierPhrase($phrase)
{
    do
    {
        do
        {
            $nombre=readline($phrase);
        }while(!is_numeric($nombre));
    }while((!is_integer($nombre*1))||($nombre<=0));
    return $nombre;
}

$nbNotes=saisieEntierPhrase("Entrez le nombre de notes à saisir :");

for ($i=0;$i<$nbNotes;$i++)
{
    $tab[$i]=saisieEntierPhrase("Entrez une note :");
}

for ($i=0;$i<$nbNotes;$i++)
{
    $moyenne+=$tab[$i];
}

echo "La moyenne de classe est de : ".$moyenne/$nbNotes;