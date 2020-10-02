<?php

Class Voiture
{
    //Attributs
    private $_marque;
    private $_modele;
    private $_immat;
    private $_km;

    //Constructeur

    public function __construct(/*$marque,$modele,$immat,$km*/)
    {
        /*$this->setMarque($marque);
        $this->setModele($modele);
        $this->setImmat($immat);
        $this->setKm($km);*/
        parrent::__construct();
    }

    //Assesseurs
    
    //Getters
    public function getMarque()
    {
        return $this->_marque;
    }

    public function getModele()
    {
        return $this->_modele;
    }

    public function getImmat()
    {
        return $this->_immat;
    }

    public function getKm()
    {
        return $this->_km;
    }
    
    //Setters
    
    public function setMarque(String $marque)
    {
        $this->_marque=strtoupper($marque);
    }

    public function setModele(String $modele)
    {
        $this->_modele=strtoupper($modele);
    }

    public function setImmat(String $immat)
    {
        $this->_immat=$immat;
    }

    public function setKm(Int $km)
    {
        $this->_km=$km;
    }

    //Autres fonctions
    public function toString()
    {
        $reponse="\tMarque\t\t: ".$this->getMarque()."\n\tModèle\t\t: ".$this->getModele().
                 "\n\tImmatriculation\t: ".$this->getImmat()."\n\tKilomètrage\t: ".$this->getKm()."\n\n";
        return $reponse;
    }

    public function equalsTo($obj)
    {
        if($this->_immat==$obj->getImmat())
        {
            return TRUE;
        }
        return FALSE;
    }

    public function compareTo($obj)
    {
        if($this->_immat==$obj->getImmat())
        {
            return 0;
        }
        else
        {
            if($this->_immat > $obj->getImmat())
            return 1;
        }
        return-1;
    }
}

$v1=new Voiture("dacia","sandero","gn-888-dd",11076);
$v2=new Voiture("citroen","c3","fn-888-dd",300000);
echo "**************** Fiche Véhicule 1*****************\n\n";
echo $v1->toString();
echo "**************** Fiche Véhicule 2*****************\n\n";
echo $v2->toString();
$egal=$v1->compareTo($v2);
var_dump($egal);
