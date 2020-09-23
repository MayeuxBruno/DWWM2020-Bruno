<?php

/**
 * Affiche le tableau entré en paramètre
 * et sépare les lettres par des espaces.
 * 
 * @param array $t Tableau contenant une lettre par case
 * 
 * @return void  Affiche le mot.
 * 
 */
function afficherTableau($t)
{
    foreach($t as $car)
    {
        echo $car." ";
    }
    echo"\n";
}


/**
 * Retourne un tableau de caractère contenant 
 * autant de case que de lettres dans le mot.
 * 
 * @param string $mot contenant le mot à coder
 * 
 * @return array Retourne le tableau contenant le mot codé
 * 
 */
function coderMot($mot)
{
    for($i=0;$i<strlen($mot);$i++)
    {
        $tab[]="_";
    }
    return $tab;
}

/**
 * Cherche toutes les occurences d'une lettre passée en paramètre
 * dans un tableau de caractères passé en paramètre
 * 
 * @param string $lettre contenant la lettre à rechercher
 * @param array  $tab contenant le tableau dans lequel s'effectue la recherche
 * @param int    $depart contenant l'index de départ pour la recherche
 * 
 * @return array retourne un tableau contenant toutes les positions  
 */

function testerLettre($lettre,$tab,$depart)
{
   /* $result[0]=0;
    $indexresult=0;
    for ($i=$depart;$i<count($tab);$i++)
    {
        if($tab[$i]==$lettre)
        {
            $result[$indexresult]=$i;
            $indexresult++;
        }
    }
    return $result;*/
    $tab=array_slice($tab,$depart);
    $trouve=array_search($lettre,$tab);
    if ($trouve!=false)
    {
        $result=array_merge($result,testerLettre($lettre,$tab,$trouve));
    }

    return $result;
}

 
 /**
  * Modifie le tableau passé en paramètre en affectant
  * la lettre à la position passée en paramètre
  *
  * @param string $lettre contenant la lettre à ajouter
  * @param array  $tab contenant le tableau dans lequel la lettre 
  *                    doit être placée
  * @param int    $position contenant la position à laquelle 
  *                    la lettre doit être insérée. 
  * @return array retourne le tableau modifié
  */
function ajouterUneLettre($lettre,$tab,$position)
{
    $tab[$position]=$lettre;
    return $tab;
}

/**
 * Appelle la méthode ajouterUneLettre pour toutes les
 * valeurs contenues dans la liste passée en paramètre
 * 
 * @param string $lettre contenant la lettre à ajouter
 * @param array  $tab contenant le tableau dans lequel la lettre
 *                    doit etre placée
 * @param array  $listePosition contenant la liste des positions auxquelles
 *                    la lettre doit être placée
 * @return array retourne le tableau modifié
 */
function ajouterLesLettres($lettre,$tab,$listePosition)
{
    foreach($listePosition as $index)
    {
        $tab=ajouterUneLettre($lettre,$tab,$index);
    }
    return $tab;
}

function DessinerPendu($nbErreur)
{
	switch ($nbErreur)
            {
                case 0:
                    Echo "                      "."\n";
                    Echo "                      "."\n";
                    Echo "                      "."\n";
                    Echo "                      "."\n";
                    Echo "                      "."\n";
                    Echo "                      "."\n";
                    Echo "                      "."\n";
                    Echo "                      "."\n";
                    break;
                case 1:
                    Echo "                      "."\n";
                    Echo "                      "."\n";
                    Echo "                      "."\n";
                    Echo "                      "."\n";
                    Echo "                      "."\n";
                    Echo "                      "."\n";
                    Echo "                      "."\n";
                    Echo "     ________         "."\n";
                    break;
                case 2:
                    Echo "                      "."\n";
                    Echo "      |               "."\n";
                    Echo "      |               "."\n";
                    Echo "      |               "."\n";
                    Echo "      |               "."\n";
                    Echo "      |               "."\n";
                    Echo "      |               "."\n";
                    Echo "     _|_______        "."\n";
                    break;
                case 3:
                    Echo "     ________         "."\n";
                    Echo "      |               "."\n";
                    Echo "      |               "."\n";
                    Echo "      |               "."\n";
                    Echo "      |               "."\n";
                    Echo "      |               "."\n";
                    Echo "      |               "."\n";
                    Echo "     _|_______        "."\n";
                    break;
                case 4:
                    Echo "     ________         "."\n";
                    Echo "      |     |         "."\n";
                    Echo "      |               "."\n";
                    Echo "      |               "."\n";
                    Echo "      |               "."\n";
                    Echo "      |               "."\n";
                    Echo "      |               "."\n";
                    Echo "     _|_______        "."\n";
                    break;
                case 5:
                    Echo "     ________         "."\n";
                    Echo "      |     |         "."\n";
                    Echo "      |     O         "."\n";
                    Echo "      |               "."\n";
                    Echo "      |               "."\n";
                    Echo "      |               "."\n";
                    Echo "      |               "."\n";
                    Echo "     _|_______        "."\n";
                    break;
                case 6:
                    Echo "     ________         "."\n";
                    Echo "      |     |         "."\n";
                    Echo "      |     O         "."\n";
                    Echo "      |     |         "."\n";
                    Echo "      |     |         "."\n";
                    Echo "      |               "."\n";
                    Echo "      |               "."\n";
                    Echo "     _|_______        "."\n";
                break;
                case 7:
                    Echo "     ________          "."\n";
                    Echo "      |     |          "."\n";
                    Echo "      |     O          "."\n";
                    Echo "      |    /|\\        "."\n";
                    Echo "      |     |          "."\n";
                    Echo "      |                "."\n";
                    Echo "      |                "."\n";
                    Echo "     _|_______         "."\n";
                    break;
                case 8:
                    Echo "     ________          "."\n";
                    Echo "      |     |          "."\n";
                    Echo "      |     O          "."\n";
                    Echo "      |    /|\\        "."\n";
                    Echo "      |     |          "."\n";
                    Echo "      |    / \\        "."\n";
                    Echo "      |                "."\n";
                    Echo "     _|_______         "."\n";
                    break;
                default:
                    break;
        }
}
