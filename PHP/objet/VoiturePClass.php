<?php

//Attributs 
require "Voiture.Class.php";
require "DateTimeclass.php";
Class Personne
{
    private $_nom;
    private $_prenom;
    private $_dateDeNaissance;
    private $_voiturePrincipale;

    public function __construct($nom,$prenom,$dateDeNaissance,$voiture)
    {
        $this->setNom($nom);
        $this->setPrenom($prenom);
        $this->setDateDeNaissance($dateDeNaissance);
        $this->setVoiturePrincipale($voiture);
    }
    // Assesseurs
    public function setNom(String $nom)
    {
        $this->_nom=$nom;
    }

    public function setPrenom(String $prenom)
    {
        $this->_prenom=$prenom;
    }

    public function setDateDeNaissance(DateTimeN $_dateDeNaissance)
    {
        $this->_dateDeNaissance=$_dateDeNaissance;
    }
    
    public function setVoiturePrincipale( Voiture $_voiturePrincipale)
    {
        $this->_voiturePrincipale = $_voiturePrincipale;
    }
    
    public function getNom()
    {
        return $this->_nom;
    }

    public function getPrenom()
    {
        return $this->_prenom;
    }

    public function getdateDeNaissance()
    {
        return $this->_dateDeNaissance;
    }

    public function getVoiturePrincipale()
    {
        return $this->_voiturePrincipale;
    }

    // toString 
    public function toString()
    {
        return "Nom : ".$this->getNom()."\nPrenom".$this->getPrenom()."\nDate de Naissance : ".$this->getDateDeNaissance()->format("d-m-y")."\n Voiture Principale : ".$this->getVoiturePrincipale()->toString();
    }
}



$v1= new Voiture("renault","clio","an-896-gt",200000);
$toto = new Personne("Truc","toto",new DateTimeN("1979-03-06"),$v1);
var_dump($toto);
$toto->toString();