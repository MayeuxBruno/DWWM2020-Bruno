<?php

/**
 * Méthode qui convertit les coordonnée de la position entrées par l'utilisateur
 * en coordonées pour le tableau
 * 
 * @param string chaine contenant les coordonées saisies par l'utilisateur
 * @return array tableau contenant les coordonées pour le tableau
 */
/*
 function conversionPosition($coordonnee)
 {
     if(ctype_alpha($coordonnee[0]))
    {
    
        $alpha=$coordonnee[0];
        $alpha=ord($alpha)-17;
        $alpha=chr($alpha);
        if (strlen($coordonnee)>2)
        {
            $chiffre=10*$coordonnee[1]+$coordonnee[2];
        }
        else
        {
            $chiffre=$coordonnee[1];
        }
    }
    else
    {
        $fin=strlen($coordonnee);
        $alpha=$coordonnee[$fin-1];
        $alpha=ord($alpha)-17;
        $alpha=chr($alpha);
        
        if ($fin>2)
        {
            $chiffre=10*$coordonnee[0]+$coordonnee[1];
        }
        else
        {
            $chiffre=$coordonnee[0];
        }
    }
    $tabCord[0]=$chiffre-1;
    $tabCord[1]=intval($alpha);
    var_dump($tabCord);
    return $tabCord;
 }
*/
/**
 * Compte le nombre de symboles alignés successif dans une direction
 * à partir d'une position. Cette position n'est pas comptée.
 * 
 */
/**
 * converti les coordonnées A3 en [3,0].
 * Les lettres représentent les colonnes. L'utilisateur peut saisir 4B pour [4,1]
 * Le tableau renvoyé contient le n° de ligne dans la case 0 et le n° de colonne dans la case 1
 *
 * @param string $coordonnee
 * @return void
 */
function conversionPosition($coordonnee)
{
    $coordonnee = strtoupper($coordonnee);
    if (ctype_alpha($coordonnee[0])) //La lettre est en premier
    {

        $alpha = $coordonnee[0];
        $numCol = ord($alpha) - ord("A");
        if (strlen($coordonnee) == 3) // Ligne a 2 digits
        {
            $chiffre = 10 * $coordonnee[1] + $coordonnee[2]; // on transforme [1,5] en 15
        }
        else
        {
            $chiffre = $coordonnee[1];
        }
    }
    else // La lettre est en dernier
    {
        $longueur = strlen($coordonnee);
        $alpha = $coordonnee[$longueur - 1];
        $numCol = ord($alpha) - ord("A");

        if ($longueur == 3)
        {
            $chiffre = 10 * $coordonnee[0] + $coordonnee[1];
        }
        else
        {
            $chiffre = $coordonnee[0];
        }
    }
    $tabCord[0] = $chiffre - 1;
    $tabCord[1] = $numCol;
    return $tabCord;
}
/**
 * demande à l'utilisateur la case dans laquelle il veut jouer, vérifie que cette case appartient bien au tableau, vérifie que la case du plateau est vide pour cette position
 *
 * @param array $plateau
 * @return array
 */
function selectionPosition($plateau)
{
    do
    {
        do//boucle pour verifier si les position existe dans le plateau
        {

            do//boucle pour verifier la position du caractere alpha au debut ou a la fin de la chaine de caractere
            {

                do// boucle pour la saisie et verifier si la chaine est bien alpha numerique de 2 ou 3 caractères
                {

                    $chaine = readline("veuillez saisir la position de votre pion: ");

                } while (strlen($chaine) > 3 || strlen($chaine) == 1 || !ctype_alnum($chaine));
                echo "boucle";
            } while (!(ctype_alpha($chaine[0]) xor ctype_alpha($chaine[strlen($chaine) - 1])));
            $positions = conversionPosition($chaine);
            $lig = $positions[0];
            $col = $positions[1];
        } while ($lig >= count($plateau) && $col >= count($plateau[0]));

    } while ($plateau[$lig][$col] == ".");
    echo "ca passe";
    return $positions;
}
$plateau=array(4.4);
 selectionPosition($plateau);