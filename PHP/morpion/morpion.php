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

   

 conversionPosition("E26");