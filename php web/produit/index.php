<?php

include "php/view/Head.php";
include "php/view/Header.php";

echo "liste des articles";
$tbleau=ProduitsManager::getList();
foreach($tableau as $unProduit)
{
    echo $unProduit->toString().'<br>';
}

include "php/view/Footer.php";
