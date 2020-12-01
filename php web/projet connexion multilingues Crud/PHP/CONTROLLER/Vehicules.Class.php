<?php
class Vehicules
{

    /*****************Attributs***************** */
    private $_idVehicule;
    private $_noParc;
    private $_marque;
    private $_modele;
    private $_capacite;

    /*****************Accesseurs***************** */

    public function getIdVehicule()
    {
        return $this->_idVehicule;
    }

    public function setIdVehicule($idVehicule)
    {
        $this->_idVehicule = $idVehicule;
    }

    public function getNoParc()
    {
        return $this->_noParc;
    }

    public function setNoParc($noParc)
    {
        $this->_noParc = $noParc;
    }

    public function getMarque()
    {
        return $this->_marque;
    }

    public function setMarque($marque)
    {
        $this->_marque = $marque;
    }

    public function getModele()
    {
        return $this->_modele;
    }

    public function setModele($modele)
    {
        $this->_modele = $modele;
    }

    public function getCapacite()
    {
        return $this->_capacite;
    }

    public function setCapacite($capacite)
    {
        $this->_capacite = $capacite;
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