<?php

/************** GESTION DE L'AUTOLOAD *****************/

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
spl_autoload_register("ChargerClasse");

function afficherPage($page)
{
	$chemin=$page[0];
	$nom=$page[1];
	$titre=$page[2];

	include 'PHP/VIEW/Head.php';
	include 'PHP/VIEW/Header.php';
	include $chemin.$nom.'.php';
	include 'PHP/VIEW/Footer.php';
}

/************* GESTION DES DIFFERENTS CRYPTAGE *************/
/**
 * Cryptage du mot de passe utilisateur
 */

function crypte($mot)
{
	return md5($mot);
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

