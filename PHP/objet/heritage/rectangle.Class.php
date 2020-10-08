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

    public function setLongueur(Int $_longueur)
    {
        $this->_longueur = $_longueur;
    }

    public function getLargeur()
    {
        return $this->_largeur;
    }

    public function setLargeur(Int $_largeur)
    {
        $this->_largeur = $_largeur;
    }


    //Constructeur
    public function __construct(array $options = [])
    {
        if (!empty($options)) // empty : renvoi vrai si le tableau est vide
        {
            $this->hydrate($options);
        }
    }
    
    public function hydrate($data)
    {
        foreach ($data as $key => $value)
        {
            $methode = "set" . ucfirst($key); //ucfirst met la 1ere lettre en majuscule
            if (is_callable(([$this, $methode]))) // is_callable verifie que la methode existe
            {
                $this->$methode($value);
             }
        }
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
        return ($this->getLongueur()==$this->getLargeur()?"Il s'agit d'un carré":"Il ne s'agit pas d'un carré");
    }

    public function toString()
    {
        return "Longeur : ".$this->getLongueur()." - Largeur : ".$this->getLargeur()." - Périmètre : ".$this->perimetre()." - Aire : ".$this->aire()." - ".$this->estCarre()."\n";
    }
}
