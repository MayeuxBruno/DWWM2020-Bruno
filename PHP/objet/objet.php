<?php

Class Personne
{
    //Attributs
    private $_nom;
    private $_prenom;
    private $_age;

    //Constructeur
    public function __construct()
    {

    }

    //Assesseurs

    //GETTER
    public function getNom()
    {
        return $this->_nom;
    }
    public function getPrenom()
    {
        return $this->_prenom;
    }
    public function getAge()
    {
        return $this->_age;
    }

    //SETTER
    public function setNom($n)
    {
        $this->_nom=$n;
    }
    public function setPrenom($p)
    {
        $this->_prenom=$p;
    }
    public function setAge($a)
    {
        $this->_age=$a;
    }

}
$nom="Dupont";
$prenom="Toto";
$age=35;
$p1=new Personne();
$p1->setNom($nom);
$p1->setPrenom($prenom);
$p1->setAge($age);
var_dump($p1);
echo $p1->getNom()."\n";
echo $p1->getPrenom()."\n";
echo $p1->getAge()."\n";