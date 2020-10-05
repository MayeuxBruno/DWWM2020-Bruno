<?php

class Employe
{

    /*****************Attributs***************** */
    private $_nom;
    private $_prenom;
    private $_dateEmbauche;
    private $_fonction;
    private $_salaireBrutAnnuel;
    private $_service;

    /*****************Accesseurs***************** */

    public function getNom()
    {
        return $this->_nom;
    }

    public function setNom($nom)
    {
        $this->_nom = $nom;
    }

    public function getPrenom()
    {
        return $this->_prenom;
    }

    public function setPrenom($prenom)
    {
        $this->_prenom = $prenom;
    }

    public function getDateEmbauche()
    {
        return $this->_dateEmbauche;
    }

    public function setDateEmbauche( DateTime $dateEmbauche)
    {
        $this->_dateEmbauche = $dateEmbauche;
    }

    public function getFonction()
    {
        return $this->_fonction;
    }

    public function setFonction($fonction)
    {
        $this->_fonction = $fonction;
    }

    public function getSalaireBrutAnnuel()
    {
        return $this->_salaireBrutAnnuel;
    }

    public function setSalaireBrutAnnuel($salaireBrutAnnuel)
    {
        $this->_salaireBrutAnnuel = $salaireBrutAnnuel;
    }

    public function getService()
    {
        return $this->_service;
    }

    public function setService($service)
    {
        $this->_service = $service;
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
     * Calcul depuis combien d'années l'employé est dans l'entreprise
     *
     * @return Int nombre d'années de présence.
     */
    public function anciennete()
    {
        $entree=$this->getDateEmbauche();
        $actuelle = new DateTime('now'); //récupère la date actuelle
        $interval = $entree->diff($actuelle);  // fait la différence entre la date d'embauche et la date actuelle
        return intval(($interval->format('%y')));  // retourne la différence en années sous forme d'entier
    }

     /**
     * Calcul la prime de l'emplyé (5% du brut) et (2% du brut pour chaque année d'ancienneté)
     *
     * @return Int prime à verser à l'employé.
     */
    public function calculePrime()
    {
        return "" ;
    }

    /**
     * Transforme l'objet en chaine de caractères
     *
     * @return String
     */
    public function toString()
    {
        return "";
    }

    /**
     * Renvoi vrai si l'objet en paramètre est égal à l'objet appelant
     *
     * @param [type] obj
     * @return bool
     */
    public function equalsTo($obj)
    {
        return true;
    }
    /**
     * Compare 2 objets
     * Renvoi 1 si le 1er est >
     *        0 si ils sont égaux
     *        -1 si le 1er est <
     *
     * @param [type] obj1
     * @param [type] obj2
     * @return void
     */
    public static function compareTo($obj1, $obj2)
    {
        return 0;
    }

   

    
}