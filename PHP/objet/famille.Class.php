<?php

Class Famille
{
    private $_pere;
    private $_mere;
    private $_voiture;

    //Construvteur
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

    //Assesseurs
    public function getPere()
    {
        return $this->_pere;
    }

    public function setPere($pere)
    {
        $this->_pere = $pere;
    }

    public function getMere()
    {
        return $this->_mere;
    }

    public function setMere($mere)
    {
        $this->_mere = $mere;
    }

    public function getVoiture()
    {
        return $this->_voiture;
    }

    public function setVoiture($voiture)
    {
        $this->_voiture = $voiture;
    }

    public function toString()
    {
        return "*** Père ***\n\nNom : ".$this->getPere()->getNom()."\nPrenom : ".$this->getPere()->getPrenom()."\nAge : ".$this->getPere()->getAge();
    }
}
