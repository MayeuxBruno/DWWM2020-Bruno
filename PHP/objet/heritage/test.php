<?php
function ChargerClasse($classe)
{
    require $classe.".Class.php";
}
spl_autoload_register("ChargerClasse");

$t1=new Triangle(["base"=>5,"hauteur"=>3]);

$c1 = new Cercle(["diametre"=>10]);

$pave = new Pave (["longueur"=>10,"largeur"=>5,"hauteur"=>5]);

$pyr = new Pyramide(["base"=>5,"hauteur"=>5,"hauteurP"=>5]);

$sph = new Sphere(["diametre"=>10]);



//echo $t1->toString();
//echo $c1->toString();
//echo $pave->toString();
//echo $pyr->toString();
echo $sph->toString();
