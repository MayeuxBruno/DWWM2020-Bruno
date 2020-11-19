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

$detailProduit=$_POST;

/*$Produit=new Produits($detailProduit);

ProduitsManager::update($Produit);

header("Location: ../../index.php");*/

var_dump($detailProduit);