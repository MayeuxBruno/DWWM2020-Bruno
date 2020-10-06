<?php

function ChargerClasse($classe)
{
    require $classe.".Class.php";
}
spl_autoload_register("ChargerClasse");

$agence1=new Agence (["nom"=>"Agence 1","adresse"=>"115 avenue foch","codePostal"=>"59480","ville"=>"Dunkerque"]);
$agence2=new Agence (["nom"=>"Agence 2","adresse"=>"15 rue de gironde","codePostal"=>"62000","ville"=>"Arras"]);


$employe1=new Employe (["nom"=>"Dupont","prenom"=>"Marc","agence"=>$agence1,"dateEmbauche"=>new DateTime("01-12-2017"),"fonction"=>"comptable","salaireBrutAnnuel"=>25,"service"=>"maintenance"]);
$employe2=new Employe (["nom"=>"veron","prenom"=>"Sebastien","agence"=>$agence1,"dateEmbauche"=>new DateTime("10-09-2004"),"fonction"=>"plombier","salaireBrutAnnuel"=>18,"service"=>"conduite"]);
$employe3=new Employe (["nom"=>"Girot","prenom"=>"Alexandre","agence"=>$agence2,"dateEmbauche"=>new DateTime("01-12-2016"),"fonction"=>"electricien","salaireBrutAnnuel"=>20,"service"=>"maintenance"]);
$employe4=new Employe (["nom"=>"Blarel","prenom"=>"Etienne","agence"=>$agence2,"dateEmbauche"=>new DateTime("01-12-2015"),"fonction"=>"drh","salaireBrutAnnuel"=>28,"service"=>"rh"]);
$employe5=new Employe (["nom"=>"Dupont","prenom"=>"Yves","agence"=>$agence1,"dateEmbauche"=>new DateTime("01-12-2006"),"fonction"=>"electricien","salaireBrutAnnuel"=>20,"service"=>"maintenance"]);
$employe6=new Employe (["nom"=>"Dupont","prenom"=>"Nicolas","agence"=>$agence1,"dateEmbauche"=>new DateTime("01-12-2007"),"fonction"=>"electricien","salaireBrutAnnuel"=>20,"service"=>"maintenance"]);

var_dump($employe1);


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

/*************** Tri des employés par ordre alphabétique****** */
$listeEmployes=[$employe1,$employe2,$employe3,$employe4,$employe5,$employe6];
sort($listeEmployes);
foreach ($listeEmployes as $elt)
{
    //echo $elt->toString();
}

/***************** Tri par Service ************************* */
function orderByService($a,$b)
{
    if($a->getService()== $b->getService())
    {
        return 0;
    }
    else if ($a->getService() < $b->getService()) //retourner -1 en cas d’infériorité
    {
        return -1;
    } else {//retourner 1 en cas de supériorité
        return 1;
    }
}

sort ($listeEmployes);
usort($listeEmployes,'orderByService');
foreach ($listeEmployes as $elt)
{
    //echo $elt->toString();
}

/*********** Calcul le cout total de la masse salariale ********* */
$cout=0;
for ($i=0;$i<count($listeEmployes);$i++)
{
    $cout+=$listeEmployes[$i]-> getSalaireBrutAnnuel()*1000+$listeEmployes[$i]->prime();
}
//echo "Montant : ".$cout;

