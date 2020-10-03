<?php

Class DateTimeN
{
    private $_jour;
    private $_mois;
    private $_annee;

    //Constructeur
    public function __construct($date)
    {
        $this->setAnnee($date);
        $this->setMois($date);
        $this->setJour($date);
    }

    //Assesseurs
    public function setAnnee(String $date)
    {
        $this->_annee=substr($date,0,4);
    }

    public function setMois(String $date)
    {
        $this->_mois=substr($date,-5,2);
    }

    public function setJour(String $date)
    {
        $this->_jour=substr($date,-2);
    }

    public function getAnnee()
    {
        return $this->_annee;
    }

    public function getMois()
    {
        return $this->_mois;
    }

    public function getJour()
    {
        return $this->_jour;
    }

    //Autres méthodes
    public function toString()
    {
        $reponse="\nLe jour est : ".$this->_jour."\nLe mois est : ".$this->_mois."\nL'annee est : ".$this->_annee."\n";
        echo $reponse;
    }

    public function equalsTo($obj)
    {
        if(($this->_jour==$obj->getJour())&&($this->_mois==$obj->getMois())&&($this->_annee==$obj->getAnnee()))
        {
            return TRUE;
        }
        return FALSE;
    }

    public function compareTo($obj)
    {
        if(($this->_jour==$obj->getJour())&&($this->_mois==$obj->getMois())&&($this->_annee==$obj->getAnnee()))
        {
            return 0;
        }
        else
        {
            if($this->_annee > $obj->getAnnee())
            {
                return 1;
            }
            else
            {
                if($this->_annee == $obj->getAnnee())
                {
                    if(($this->_mois > $obj->getMois())||($this->_mois == $obj->getMois() && $this->_jour > $obj->getJour()))
                    {
                        return 1;
                    }
                }
            }
            return -1;
        }
    }
}
$date=new DateTimeN ("1981-05-22");
$date2=new DateTimeN("1981-06-22");
//var_dump($date);
$date->toString();
$date2->toString();
$egal=$date->compareTo($date2);
echo "\n";
var_dump($egal);

