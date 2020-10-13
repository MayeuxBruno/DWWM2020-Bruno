<?php
function ChargerClasse($classe)
{
    require $classe.".Class.php";
}
spl_autoload_register("ChargerClasse");

$auteur1 = new Auteur (['nom'=>'Dupont','prenom'=>'jeremy','dateNaissance'=>new DateTime('12-06-1920'),'dateDeces'=>new DateTime('26-02-2017')]);
$auteur2 = new Auteur (['nom'=>'Delplace','prenom'=>'remi','dateNaissance'=>new DateTime('12-06-1920'),'dateDeces'=>NULL]);
$auteur3 = new Auteur (['nom'=>'Durand','prenom'=>'Yves','dateNaissance'=>new DateTime('06-09-1979'),'dateDeces'=>NULL]);


// Question 2-7
$document1 = new Document (['titre'=>'Toto','auteur'=>$auteur1,'emprunte'=>FALSE]); 
$document2 = new Document (['titre'=>'Tintin','auteur'=>$auteur2,'emprunte'=>TRUE]); 
$document3 = new Document (['titre'=>'Asterix','auteur'=>$auteur3,'emprunte'=>FALSE]);

// Parie 3
//echo $document1->toString();
// Partie 3-8
//var_dump($document1->equalsTo($document1));

// Partie 4 
// Objet Livre
$livre1 = new Livre (['titre'=>'Toto','auteur'=>$auteur1,'nbPages'=>150,'emprunte'=>FALSE]);
$livre2 = new Livre (['titre'=>'Toto','auteur'=>$auteur1,'nbPages'=>150,'emprunte'=>FALSE]); 

echo $livre1->toString();
//var_dump($livre1->equalsTo($livre2));

//Objet Video
$video1 = new Video (['titre'=>'Asterix','auteur'=>$auteur3,'sousTitres'=>TRUE,'emprunte'=>TRUE]);
$video2 = new Video (['titre'=>'Obelix','auteur'=>$auteur3,'sousTitres'=>TRUE,'emprunte'=>FALSE]);

echo $video1->toString();
//var_dump($video1->equalsTo($video2));

//Objet Enregistrement Audio
$enregistrement1= new Enraudio(['titre'=>'Tintin','auteur'=>$auteur1,'duree'=>2.30,'emprunte'=>TRUE]);
$enregistrement2= new Enraudio(['titre'=>'Tintin','auteur'=>$auteur2,'duree'=>2.30,'emprunte'=>TRUE]);

echo $enregistrement1->toString();
//var_dump($enregistrement1->equalsTo($enregistrement2));
