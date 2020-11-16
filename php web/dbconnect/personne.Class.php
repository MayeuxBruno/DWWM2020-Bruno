<?php
class Personne
{

    /*****************Attributs***************** */
    private $_idPersonne;
    private $_nomPersonne;
    private $_prenom;
    private $_age;

    /*****************Accesseurs***************** */

    public function getNomPersonne()
    {
        return $this->_nomPersonne;
    }

    public function setNomPersonne($nomPersonne)
    {
        $this->_nomPersonne = $nomPersonne;
    }

    public function getPrenom()
    {
        return $this->_prenom;
    }

    public function setPrenom($prenom)
    {
        $this->_prenom = $prenom;
    }

    public function getAge()
    {
        return $this->_age;
    }

    public function setAge($age)
    {
        $this->_age = $age;
    }
    public function getIdPersonne()
    {
        return $this->_idPersonne;
    }

    public function setIdPersonne($idPersonne)
    {
        $this->_idPersonne = $idPersonne;
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
    
    public function affichage()
    {
        echo $this->getNomPersonne().' - '.$this->getPrenom().' - '.$this->getAge().'<br>';
    }

    

   
}