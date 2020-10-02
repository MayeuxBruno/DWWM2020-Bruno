<?php

Class Personne
{
    //Attributs
    private $_nom;
    private $_prenom;
    private $_age;
    private $_genre;

    //Assesseurs
    public function __construct($nom,$prenom,$age,$genre)
    {
        $this->setNom($nom);
        $this->setPrenom($prenom);
        $this->setAge($age);
        $this->setGenre($genre);
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

$p1=new Personne ("Fupont","Toto",20,"H");
$p2=new Personne ("Dupont","Toto",20,"H");
//echo $p1->toString();
//echo $p2->toString();
echo $p1->compareTo($p2);