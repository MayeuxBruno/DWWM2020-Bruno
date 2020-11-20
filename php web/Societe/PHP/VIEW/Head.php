<!doctype html>
<html lang="fr">
<head>
	<meta charset="utf-8">
	<?php echo'<title>'.$titre.'</title>'."\n" ?>
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
<?php

/* Autoload permet de charger toutes les classes necessaires */
function ChargerClasse($classe)
{
    if (file_exists("PHP/CONTROLLER/" . $classe . ".Class.php"))
    {
        require "PHP/CONTROLLER/" . $classe . ".Class.php"; // quand on vient de index.php
    }
    else if (file_exists("../CONTROLLER/" . $classe . ".Class.php"))
    {
        require "../CONTROLLER/" . $classe . ".Class.php"; // quand on vient du dossier VIEW
    }
    if (file_exists("PHP/MODEL/" . $classe . ".Class.php"))
    {
        require "PHP/MODEL/" . $classe . ".Class.php"; // quand on vient de index.php
    }
    else if (file_exists("../MODEL/" . $classe . ".Class.php"))
    {
        require "../MODEL/" . $classe . ".Class.php"; // quand on vient du dossier VIEW

    }
}
spl_autoload_register("ChargerClasse");

DbConnect::init();
