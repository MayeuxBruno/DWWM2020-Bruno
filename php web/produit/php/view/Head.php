<!DOCTYPE html>
<html>
<head>

<?php

function chargerClasse($classe)
{
    if (file_exists("php/controller/".$classe.".class.php"))
    {
        require "php/controller/".$classe.".class.php";
    }
    if (file_exists("php/model/".$classe.".class.php"))
    {
        require "php/model/".$classe.".class.php";
    }
}

spl_autoload_register("chargerClasse");

DbConnect::Init();

echo(!empty($titre))?'<title>'.$titre.'</title>':'<title>Titre de la page</title>';

?>

<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link rel="stylesheet" href="css/style.css">
</head>