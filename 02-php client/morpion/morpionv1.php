<?php

/**
 * Méthode qui convertit les coordonnée de la position entrées par l'utilisateur
 * en coordonées pour le tableau
 * 
 * @param string chaine contenant les coordonées saisies par l'utilisateur
 * @return array tableau contenant les coordonées pour le tableau
 */

 function conversionPosition($coordonnee)
 {
     if(ctype_alpha($coordonnee[0])) //La lettre est en premier
    {
    
        $alpha=$coordonnee[0];
        $numCol=ord($alpha)-ord("A");
        if (strlen($coordonnee)>2)  // Ligne a 2 digits
        {
            $chiffre=10*$coordonnee[1]+$coordonnee[2];
        }
        else
        {
            $chiffre=$coordonnee[1];
        }
    }
    else  // La lettre est en dernier
    {
        $fin=strlen($coordonnee);
        $alpha=$coordonnee[$fin-1];
        $numCol=ord($alpha)-ord("A");
        //$alpha=chr($alpha);
        
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
    $tabCord[1]=$numCol;
    return $tabCord;
 }

/**
 * Compte le nombre de symboles alignés successif dans une direction
 * à partir d'une position. Cette position n'est pas comptée.
 * 
 * @param_arra
 * 
 */

 conversionPosition("K26");