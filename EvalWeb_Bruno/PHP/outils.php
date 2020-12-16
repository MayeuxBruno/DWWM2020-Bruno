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
    //include 'PHP/VIEW/nav.php';
    
    include $chemin . $nom . '.php';
    include 'PHP/VIEW/footer.php';
}

/* construction de l'url en fonction de l'uri existante  */
function uri()
{
    $uri = $_SERVER['REQUEST_URI'];
    if (substr($uri, strlen($uri) - 1) == "/") // se termine par /
    {
        $uri .= "index.php?";
    }
    else if (in_array("?", str_split($uri))) // si l'uri contient deja un ?
    {
        $uri .= "&";
    }
    else
    {
        $uri .= "?";
    }
    return $uri;
}

/************** Cryptage ******************/
/**
 * Fonction qui crypte le mot de passe en md5
 */
function crypte($mot)
{
    return md5(md5($mot).strlen(md5($mot)).strlen($mot));
}

/**
 * Fonction qui decrypte le fichier parametre.ini
 */
function decrypte($motadecrypter)
{
    for($i=0;$i<strlen($motadecrypter);$i++)
    {
        $motadecrypter[$i]=chr(ord($motadecrypter[$i])-5);
    }
    return $motadecrypter;
}
