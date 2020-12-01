<?php

function ChargerClasse($classe)
{
    require $classe.".Class.php";
}
spl_autoload_register("ChargerClasse");

/**
 * Génère et retourne un monstre de manière aleatoire
 *
 * @return void
 */
function genereMonstre()
{
    if(rand(1,2)==1)
    {
        echo "\n** Nouveau Monstre Facile**\n\n";
        return new MonstreFacile (['estVivant'=>TRUE]);  
    }
    echo "\n** Nouveau Monstre Difficile**\n\n";
    return new MonstreDifficile (['estVivant'=>TRUE]);
}

$de=new De ();

$joueur1 = new Joueur (['ptsDeVie'=>50]);
$monstre = genereMonstre();

do
{
    if (!$monstre->getEstVivant()) // Si le monstre est vivant
    { 
        $monstre = genereMonstre();
        
    }
    foreach ($joueur1->attaque($monstre) as $key=>$value )
    {
        echo "Le ".$key." attaque : ".$value."\t";
        
    }
    echo "\n".$joueur1->getPtsDeVie()."\n";
    if ($monstre->getEstVivant()) // Si le monstre est vivant
    {
        foreach ($monstre->attaque($joueur1) as $key=>$value )
        {
            echo "Le ".$key." attaque : ".$value."\t";
        }
        echo "\n".$joueur1->getPtsDeVie()."\n";
    }
    else 
    {
        $monstre = genereMonstre();
    }
}while($joueur1->getPtsDeVie()>0);


echo "Dommage vous êtes mort.....\n";
echo "Cela dit vous avez tué ". MonstreFacile::getCompteur()-MonstreDifficile::getCompteur()
    ." Monstres Faciles et ".MonstreDifficile::getCompteur()." Difficiles";


    