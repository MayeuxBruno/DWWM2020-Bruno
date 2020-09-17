<?php

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

function factorielle($nombre)
{
    $facto=1;
    for($i=1;$i<=$nombre;$i++)
    {
        $facto*=$i;
    }
    return $facto;
}

$partant=saisieEntierPhrase("Entrez le nombre de chevaux partants : ");

/* saisie du nombre de chevaux joués et verifie qu'il n'est pas supérieur au
** nombre de chevaux partants*/
do
{
    $joue=saisieEntierPhrase("Entrez le nombre de chevaux joués :  ");
}while($joue>$partant);

echo "Dans l'ordre, 1 chance sur ".factorielle($partant)/factorielle($partant-$joue)." de gagner.\n";
echo "Dans le désordre 1 chance sur ".(factorielle($partant)/(factorielle($joue)*factorielle($partant-$joue)))." de gagner.";