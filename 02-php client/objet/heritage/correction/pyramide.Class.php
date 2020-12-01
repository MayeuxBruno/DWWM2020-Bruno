<?php

class Pyramide extends Triangle
{

    /*****************Attributs***************** */
    private $_hauteurP;

    /*****************Accesseurs***************** */

    public function getHauteurP()
    {
        return $this->_hauteur;
    }

    public function setHauteurP($hauteur)
    {
        $this->_hauteur = $hauteur;
    }
    
    /*****************Constructeur***************** */

    public function __construct(array $options = [])
    {
        parent::__construct($options);
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

    /*****************Autres Méthodes***************** */
    
    /**
     * Transforme l'objet en chaine de caractères
     *
     * @return String
     */
    public function toString()
    {
        return parent::toString()." - Hauteur de la pyramide : ".$this->getHauteurP()." - Volume de la pyramide : ".$this->volumePyramide() ;
    }

    /**
     * Renvoi l'aire de la pyramide
     *
     * @param Void
     * @return Float
     */
    public function volumePyramide()
    {
        return number_format(((parent::aire()*$this->getHauteurP())/3),2);
    }

    /**
     * Renvoi le perimetre de la pyramide
     *
     * @param Void
     * @return Float
     */
    public function perimetrePyramide()
    {
        
    }
   

    
}