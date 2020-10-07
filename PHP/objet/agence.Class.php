<?php

class Agence
{

    /*****************Attributs***************** */
    private $_nom;
    private $_adresse;
    private $_codePostal;
    private $_ville;
    private $_restauration;

    /*****************Accesseurs***************** */
    
    public function getNom()
    {
        return $this->_nom;
    }

    public function setNom(String $nom)
    {
        $this->_nom = ucfirst($nom);
    }

    public function getAdresse()
    {
        return $this->_adresse;
    }

    public function setAdresse(String $adresse)
    {
        $this->_adresse = $adresse;
    }

    public function getCodePostal()
    {
        return $this->_codePostal;
    }

    public function setCodePostal(Int $codePostal)
    {
        $this->_codePostal = $codePostal;
    }

    public function getVille()
    {
        return $this->_ville;
    }

    public function setVille(String $ville)
    {
        $this->_ville = ucfirst($ville);
    }

    public function getRestauration()
    {
        return $this->_restauration;
    }

    public function setRestauration(String $restauration)
    {
        $this->_restauration = $restauration;
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
     * Transforme l'objet en chaine de caractères
     *
     * @return String
     */
    public function toString()
    {
        $reponse= "\n\n\t*** Agence ***\n\nNom :\t\t\t".$this->_nom."\nAdresse:\t\t".$this->_adresse."\nCode postal :\t\t".$this->_codePostal."\nVille :\t\t\t".$this->_ville."\nRestauration :\t\t".$this->_restauration;
        return $reponse;
    }

    /**
     * Renvoi le mode de restauration de l'agence
     *
     * @param void
     * @return String mode de restauration restaurant ou ticket
     */
    public function restauration()
    {
        return $this->getRestauration();
    }
}