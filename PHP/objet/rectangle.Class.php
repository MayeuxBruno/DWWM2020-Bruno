<?php

Class Rectangle
{
    //Attributs
    private $_longueur;
    private $_largeur;

    //Assesseurs

    public function getLongueur()
    {
        return $this->_longueur;
    }

    public function setLongueur($_longueur)
    {
        $this->_longueur = $_longueur;
    }

    public function getLargeur()
    {
        return $this->_largeur;
    }

    public function setLargeur($_largeur)
    {
        $this->_largeur = $_largeur;
    }

    //Constructeur
    public function __construct(int $long,int $larg)
    {
        $this->setLongueur($long);
        $this->setLargeur($larg);
    }

    //Autres méthodes
    public function perimetre()
    {
        return (($this->getLongueur()+$this->getLargeur())*2);
    }

    public function aire()
    {
        return $this->getLongueur()*$this->getLargeur();
    }

    public function estCarre()
    {
        if ($this->getLongueur()==$this->getLargeur())
        {
            return "Il s'agit d'un carré";            
        }
        return "Il ne s'agit pas d'un carré";
    }

    public function toString()
    {
        echo "Longeur : ".$this->getLongueur()." - Largeur : ".$this->getLargeur()." - Périmètre : ".$this->perimetre()." - Aire : ".$this->aire()." - ".$this->estCarre()."\n";
    }
}
