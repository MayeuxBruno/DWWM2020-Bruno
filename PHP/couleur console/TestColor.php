<?php
function ChargerClasse($classe)
{
	require $classe.".Class.php";
}
spl_autoload_register("ChargerClasse");

$colors = new Colors();

echo $colors->getColoredString("Testing Colors class, this is purple string on yellow background.", "white", "red") . "\n";