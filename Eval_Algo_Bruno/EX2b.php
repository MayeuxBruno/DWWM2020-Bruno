<?php

function saisieEntierPhrase($phrase)
{
    do
    {
        do
        {
            $nombre=readline($phrase);
        }while(!is_numeric($nombre));
    }while(!is_integer($nombre*1));
    return $nombre;
}

echo"\n  ****    Table de multiplication ****\n\n";
do
{
    //demande à l'utilisateur la table voulue et vérifie que la valeur entrée est positive
    do
    {
        $table=saisieEntierPhrase("Entrer le nombre pour lequel vous voulez la table de multiplication : ");
    }while($table<0);

    // affiche la table de multiplication
    for ($i=1;$i<=10;$i++)
    {
        echo"$table\tx $i\t= ".$table*$i."\n";
    }

    // demande à l'utilisateur si il souhaite continuer et vérifie la saisie
    do
    {
         $autre=strtolower(readline("Voulez-vous continuer ? "));
    }while(($autre!="o")&&($autre!="n"));
}while($autre=="o");     