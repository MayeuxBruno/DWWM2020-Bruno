<?php

function ChargerClasse($classe)
{
    require $classe.".Class.php";
}
spl_autoload_register("ChargerClasse");

$agence1=new Agence (["nom"=>"Agence 1","adresse"=>"115 avenue foch","codePostal"=>"59480","ville"=>"Dunkerque","restauration"=>"restaurant"]);
$agence2=new Agence (["nom"=>"Agence 2","adresse"=>"15 rue de gironde","codePostal"=>"62000","ville"=>"Arras","restauration"=>"tickets"]);


$listeEmployes[]=new Employe (["nom"=>"Dupont","prenom"=>"Marc","agence"=>$agence1,"dateEmbauche"=>new DateTime("01-12-2017"),"fonction"=>"comptable","salaireBrutAnnuel"=>25,"service"=>"maintenance"]);
$listeEmployes[]=new Employe (["nom"=>"veron","prenom"=>"Sebastien","agence"=>$agence1,"dateEmbauche"=>new DateTime("10-11-2019"),"fonction"=>"plombier","salaireBrutAnnuel"=>18,"service"=>"conduite"]);
$listeEmployes[]=new Employe (["nom"=>"Girot","prenom"=>"Alexandre","agence"=>$agence2,"dateEmbauche"=>new DateTime("01-12-2016"),"fonction"=>"electricien","salaireBrutAnnuel"=>20,"service"=>"maintenance"]);
$listeEmployes[]=new Employe (["nom"=>"Blarel","prenom"=>"Etienne","agence"=>$agence2,"dateEmbauche"=>new DateTime("01-12-2015"),"fonction"=>"drh","salaireBrutAnnuel"=>28,"service"=>"rh"]);
$listeEmployes[]=new Employe (["nom"=>"Dupont","prenom"=>"Yves","agence"=>$agence1,"dateEmbauche"=>new DateTime("01-12-2006"),"fonction"=>"electricien","salaireBrutAnnuel"=>20,"service"=>"maintenance"]);
$listeEmployes[]=new Employe (["nom"=>"Dupont","prenom"=>"Nicolas","agence"=>$agence1,"dateEmbauche"=>new DateTime("01-12-2007"),"fonction"=>"electricien","salaireBrutAnnuel"=>20,"service"=>"maintenance"]);


/********************************* Envoi l'ordre de virement à la banque ************************* */
$dateActuelle=new DateTime ('now');
$datePrime=(new DateTime())->setDate($dateActuelle->format('Y'),9,30);

if ($datePrime<$dateActuelle)
{
    //echo "L'odre de transfert a été envoyé à la banque :".$employe1->prime()." €\n"; 
}
else
{
    //echo "L'ordre de transfert n'a pas été envoyé à la banque\n";
}

/************************ Affiche le nombre d'employés ************************ */

//echo "L'entreprise compte ".Employe::getCompteur()." employés\n";

/*************** Tri des employés par ordre alphabétique et service ****** */


usort($listeEmployes,array('Employe','compareToServiceNomPrenom'));

foreach ($listeEmployes as $elt)
{
  //  echo $elt->toString();
}

/******************* Cout masse salariale  ************/

$cout=0;
foreach ($listeEmployes as $elt)
{
    $cout+=$elt->masseSalariale();
}
//echo "Cout masse salariale :".$cout;

/********* Affiche la restauration ******* */

for($i=0;$i<count($listeEmployes);$i++)
{
    //echo $listeEmployes[$i]->getNom()." - ".$listeEmployes[$i]->getPrenom()." - ".$listeEmployes[$i]->getAgence()->restauration()."\n";
}

//echo $listeEmployes[0]->toString();
//var_dump($listeEmployes[0]->chequeVacance());

$enfant1 = new Enfant(["nom"=>"Verron","prenom"=>"Pierre","dateDeNaissance"=>new DateTime('12-11-2012')]);
echo $enfant1->toString();