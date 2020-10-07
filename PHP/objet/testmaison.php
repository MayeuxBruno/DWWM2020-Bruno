<?php
function ChargerClasse($classe)
{
    require $classe.".Class.php";
}
spl_autoload_register("ChargerClasse");




$maison=new Maison(["chambre"=>"bleu","cuisine"=>"rouge","cave"=>"blanc","toilettes"=>"vert"]);
var_dump($maison);
echo $maison->toString();