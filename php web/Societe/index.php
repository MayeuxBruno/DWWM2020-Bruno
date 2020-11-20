<?php
$titre="Gestion Liste des Musiciens";
include "PHP/VIEW/Head.php";
include "PHP/VIEW/Header.php";

$pNew = new Adherents(["nom" => "Mayeux ","prenom" => "Bruno","pupitre" => "Saxophone Alto","fonction" => "Musicien"]);

echo 'On met a jour un objet Adherents <br>';
$pNew->setNom("Honnart");
var_dump($pNew);
AdherentsManager::update($pNew);
$pRecharge=AdherentsManager::findById(1);
var_dump($pRecharge);


include "PHP/VIEW/Footer.php";
?>