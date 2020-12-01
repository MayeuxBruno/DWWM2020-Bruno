<?php

function ChargerClasse($classe)
{
    if (file_exists("PHP/CONTROLLER/" . $classe . ".Class.php"))
    {
        require "PHP/CONTROLLER/" . $classe . ".Class.php";
    }
    if (file_exists("PHP/MODEL/" . $classe . ".Class.php"))
    {	
        require "PHP/MODEL/" . $classe . ".Class.php";
    }
}

function AfficherPage($page)
{
    $chemin = $page[0];
    $nom = $page[1];
    $titre = $page[2];

    include 'PHP/VIEW/Head.php';
    include 'PHP/VIEW/Header.php';
    include 'PHP/VIEW/nav.php';
    
    include $chemin . $nom . '.php';
}

/************** Cryptage ******************/

function crypte($mot)
{
    return md5(md5($mot).strlen(md5($mot)).strlen($mot));
}

function decrypte($motadecrypter)
{
    for($i=0;$i<strlen($motadecrypter);$i++)
    {
        $motadecrypter[$i]=chr(ord($motadecrypter[$i])-5);
    }
    return $motadecrypter;
}

/**
 * Fonction qui ramène le texte dans la bonne langue
 */
function texte($codetexte)
{
    global $lang; //on appel la variable globale
    return TexteManager::findByCodes($lang, $codetexte);
}
