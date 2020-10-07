<?php

class Enfant
{

    /*****************Attributs***************** */
    private $_nom;
    private $_prenom;
    private $_dateDeNaissance;

    /*****************Accesseurs***************** */

    public function getNom()
    {
        return $this->_nom;
    }

    public function setNom(String $nom)
    {
        $this->_nom = ucfirst($nom);
    }

    public function getPrenom()
    {
        return $this->_prenom;
    }

    public function setPrenom(String $prenom)
    {
        $this->_prenom = ucfirst($prenom);
    }

    public function getDateDeNaissance()
    {
        return $this->_dateDeNaissance;
    }

    public function setDateDeNaissance(DateTime $dateDeNaissance)
    {
        $this->_dateDeNaissance = $dateDeNaissance;
    }
    
    /*****************Constructeur***************** */

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

    /*****************Autres Méthodes***************** */
    
     /**
     * Renvoi l'age de l'enfant
     *
     * @param void
     * @return Integer  age de l'enfant
     */
    public function age()
    {
        $dateActuelle = new DateTime('now');
        $dateNaissance=$this->getDateDeNaissance();
        $age=$dateNaissance->diff($dateActuelle);
        return ($age->format('%y')*1);
    }
    /**
     * Transforme l'objet en chaine de caractères
     *
     * @return String
     */
    public function toString()
    {
        $reponse = "\nNom :\t\t\t".$this->getNom()."\nPrenom :\t\t".$this->getPrenom()."\nDate de Naissance :\t".$this->getDateDeNaissance()->format('j - m - Y')."\n";
        return $reponse;
    }
}