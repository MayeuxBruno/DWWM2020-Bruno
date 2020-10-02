<?php

Class Personne
{
    //Attributs
    private $_nom;
    private $_prenom;
    private $_age;
    private $_genre;

    //Assesseurs
    public function __construct($nom,$prenom,$age,$genre)
    {
        $this->setNom=$nom;
        $this->setPrenom=$prenom;
        $this->setAge=$age;
        $this->setGenre=$genre;
    }

    //Getters
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

    public function getGenre()
    {
        return $this->_genre;
    }

    //Setters
    public function setNom($nom)
    {
        $this->_nom=$nom;
    }

    public function setPrenom($prenom)
    {
        $this->_prenom=$prenom;
    }

    public function setAge($age)
    {
        $this->_age=$age;
    }

    public function setGenre($genre)
    {
        $this->_genre=$genre;
    }
}

$p1=new Personne ("Mayeux","Bruno",41,"H");
var_dump($p1);