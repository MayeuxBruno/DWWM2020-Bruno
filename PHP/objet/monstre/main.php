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
        echo "\n** Nouveau Monstre Facile**\n";
        return new MonstreFacile (['estVivant'=>TRUE]);  
    }
    echo "\n** Nouveau Monstre Difficile**\n";
    return new MonstreDifficile (['estVivant'=>TRUE]);
}

$joueur1 = new Joueur (['nom'=>"Joe",'ptsDeVie'=>50]);
$monstre = genereMonstre();

while ($joueur1->estEnVie())
{
    $joueur1->attaque($monstre);
}

echo "Dommage vous êtes mort.....\n";
echo "Cela dit vous avez tué ".MonstreFacile::getNombreFacile()
    ." Monstres Faciles et ".MonstreDifficile::getNombreDifficile()." Difficiles";


    