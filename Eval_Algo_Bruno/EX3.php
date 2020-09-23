<?php

function saisieNombrePhrase($phrase)
{
    do
        {
            $nombre=readline($phrase);
    }while(!is_numeric($nombre));
    return $nombre;
}

echo"\n Racine de l'equation du 2nd degré\n";
echo"\t  Y= ax² + bX +c\n\n";

do
{
    // saisie des valeurs de a b c
    $a=saisieNombrePhrase("Quelle est la valeur de a : ");
    $b=saisieNombrePhrase("Quelle est la valeur de b : ");
    $c=saisieNombrePhrase("Quelle est la valeur de c : ");

    

    // test si il y a des valeurs nulles
    if($a==0 || $b==0 || $c==0)
    {
        if (($a==0 &&$b==0)||($a==0 && $c==0)||($b==0&&$c==0))
        {
            echo "\n L'équation n'en est plus une !!!\n\n";
        }
        else
        {
            echo "\n L'équation est du premier degré !\n\n L'équation s'annule pour x=-(c/b) : ".-1*($c/$b)."\n\n";
        }
    }
    else
    {
        // Calcul de delta et des racines
        
        $delta=$b*$b-(4*$a*$c);
        if($delta==0) 
        {
            echo "\nL'équation possède une racine double :\n d = ".$delta."\n";
            echo "x1=x2= ".-1*($b/(2*$a))."\n\n";
        }
        else
        {
            if($delta>0) 
            {
                echo "\n L'équation possède 2 racines distinctes : \n d = ".$delta."\n";
                echo " L'équation s'annule pour : \n x1 = ".((-1*$b+sqrt($delta))/(2*$a))."\n x2 = ".((-1*$b-sqrt($delta))/(2*$a))."\n\n";
            }
            else
            {
                echo "\n L'équation ne possède pas de racine réelle : \n d = ".$delta."\n\n";
            }
        }
    }
    do

    {
       $autre=strtolower(readline("Voulez-vous contunuer ? "));
    }while(($autre!="o")&&($autre!="n"));
}while($autre=="o");      

echo "Au revoir et à bientot !";
