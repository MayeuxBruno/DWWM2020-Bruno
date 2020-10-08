<?php

class Sphere extends Cercle
{

    /*****************Attributs***************** */
    

    /*****************Accesseurs***************** */

    
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
        return parent::toString()." - Volume de la sphère : ".$this->volumeSphere();
    }

    /**
     * Retourne le volume de la sphere
     *
     * @param Void
     * @return Float
     */
    public function volumeSphere()
    {
        return number_format(((pow(parent::rayon(),3)*pi()*4)/3),2);
    }
    
}