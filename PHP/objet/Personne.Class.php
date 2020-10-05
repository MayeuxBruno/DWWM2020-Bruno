<?php

Class Personne
{
    //Attributs
    private $_nom;
    private $_prenom;
    private $_age;
    private $_genre;

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

    //Getters
    public function getNom()
    {
        return $this->_nom;
    }
    
    public function getPrenom()
    {
        return $this->_prenom;
    }

    public function getAge()
    {
        return $this->_age;
    }

    public function getGenre()
    {
        return $this->_genre;
    }



    //Setters
    public function setNom(String $nom)
    {
        $this->_nom=strtoupper($nom);
    }

    public function setPrenom(String $prenom)
    {
        $this->_prenom=strtoupper($prenom);
    }

    public function setAge(Int $age)
    {
        $this->_age=$age>0 ? $age : null;
    }

    public function setGenre(String $genre)
    {
        $this->_genre=strtoupper($genre);
    }
    

    //Autres méthodes
    public function toString()
    {
        $reponse = "Le nom est : \t".$this->_nom."\nLe prénom est : ".$this->_prenom." \nL'age est : \t". $this->_age."\nLe genre est : \t".$this->_genre."\n";
        return $reponse;
    }

    public function equalsTo($obj)
    {
        if ($this->_nom==$obj->getNom() && $this->_prenom==$obj->getPrenom() && $this->_age==$obj->getAge() && $this->_genre==$obj->getGenre())
        {
            return TRUE;
        }
        return FALSE;
    }

    public function compareTo($obj)
    {
        if(!($this->_nom==$obj->getNom() && $this->_prenom==$obj->getPrenom()))
        {
            if($this->_nom > $obj->getNom())
            {
                return 1;
            }
            else
            {
                if ($this->_prenom > $obj->getPrenom())
                {
                    return 1;
                }
                return -1;
            }
        }
        return 0;
    } 
}