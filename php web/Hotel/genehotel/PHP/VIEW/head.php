<!doctype html>
<html lang="fr">
<head>
<?php

function chargerClasse($classe)
{
    if (file_exists("php/controller/".$classe.".class.php"))
    {
        require "php/controller/".$classe.".class.php";
    }
    else if (file_exists("../controller/".$classe.".class.php"))
    {
        require "../controller/".$classe.".class.php";
    }


    if (file_exists("php/model/".$classe.".class.php"))
    {
        require "php/model/".$classe.".class.php";
    }
    else if (file_exists("../model/".$classe.".class.php"))
    {
        require "../model/".$classe.".class.php";
    }
}

spl_autoload_register("chargerClasse");
DbConnect::Init();
?>
	<meta charset="utf-8">
	<title><?php echo $titre ?></title>
<?php
if (file_exists("./css/style.css"))
{
    echo'<link rel="stylesheet" href="./css/style.css">';
}
else if (file_exists("../../css/style.css"))
{
    echo'<link rel="stylesheet" href="../../css/style.css">';
}
?>


	<script src="./JS/script.js"></script>
</head>
