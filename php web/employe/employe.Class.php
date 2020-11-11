<?php

class Employe
{

    /*****************Attributs***************** */
    private $_nom;
    private $_prenom;
    private $_agence;
    private $_dateEmbauche;
    private $_fonction;
    private $_salaireBrutAnnuel;
    private $_service;
    private $_enfant;
    private static $_compteur=0;

    /*****************Accesseurs***************** */

    public function setEnfant(Array $enf)
    {
        $this->_enfant=$enf;
    }

    public function getEnfant()
    {
        return $this->_enfant;
    }

    public function getNom()
    {
        return $this->_nom;
    }

    public function setNom($nom)
    {
        $this->_nom = ucfirst($nom);
    }

    public function getPrenom()
    {
        return $this->_prenom;
    }

    public function setPrenom($prenom)
    {
        $this->_prenom = ucfirst($prenom);
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

    public static function getCompteur()
    {
        return self::$_compteur;
    }

    public static function setCompteur($compteur)
    {
        self::$_compteur = $compteur;
    }

    public function getAgence()
    {
        return $this->_agence;
    }

    public function setAgence(Agence $agence)
    {
        $this->_agence = $agence;
    }
    
    /*****************Constructeur***************** */

    public function __construct(array $options = [])
    {
        if (!empty($options)) // empty : renvoi vrai si le tableau est vide
        {
            $this->hydrate($options);
        }
            Self::$_compteur ++;
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
     * Calcul la prime sur salaire de l'emplyé (5% du brut)
     *
     * @return Double prime à verser à l'employé.
     */
    private function primeSalaire()
    {
        return ($this->getSalaireBrutAnnuel()*1000*0.05);
    }

    /**
     * Calcul la prime d'ancienneté de l'emplyé (2% du brut pour chaque année d'ancienneté)
     *
     * @return Double prime à verser à l'employé.
     */
    private function primeAnciennete()
    {
        return (($this->getSalaireBrutAnnuel()*1000*0.02)*$this->anciennete()) ;
    }

     /**
     * Calcul la prime d'ancienneté de l'emplyé (2% du brut pour chaque année d'ancienneté)
     *
     * @return Double prime à verser à l'employé.
     */
    public function prime()
    {
        return $this->primeSalaire()+$this->primeAnciennete();
    }

     /**
     * Permet l'affichage de la liste des enfants de l'employé.
     *
     * @return String Liste des enfants.
     */
    public function afficheEnfant()
    {
        if(!empty($this->getEnfant()))
        {
            $message="\n\n\t*** Enfant(s) ***\n";
            foreach($this->getEnfant() as $elt)
            {
                $message.=$elt->toString();
            }
            return $message;
        }
        return " ";
    }

    /**
     * Transforme l'objet en chaine de caractères
     *
     * @return String
     */
    public function toString()
    {
        $reponse="\n****** Fiche Employé ******\nNom :\t\t\t".$this->getNom()."\nPrénom :\t\t".$this->getPrenom().$this->getAgence()->toString()."\n\nDate d'embauche :\t".$this->getDateEmbauche()->format('j - m - Y')."\nFonction :\t\t".$this->getFonction()."\nSalaire Brut Annuel :   ".$this->getSalaireBrutAnnuel()." K€"."\nService :\t\t".$this->getService().$this->afficheEnfant()."\n\n****************************\n\n";
        return $reponse;
    }

    public function afficheEmployeHTML()
    {
        echo '<span class="gras">NOM :</span> '.$this->getNom().'<br>
              <span class="gras">PRENOM :</span> '.$this->getPrenom().'<br>
              <span class="gras">Date d\'embauche :</span> '.$this->getDateEmbauche()->format('j - m - Y').'<br>
              <span class="gras">FONCTION :</span> '.$this->getFonction().'<br>
              <span class="gras">SALAIRE BRUT ANNUEL :</span> '.$this->getSalaireBrutAnnuel().'<br>
              <span class="gras">SERVICE :</span> '.$this->getService().'<br><br>';
    }


    /**
     * Renvoi si l'employe bénéficie d'un restaurant ou si il 
     * doit recevoir des tickets repas.
     * 
     * @return string "Tickets" ou "Restaurant"
     */
    public function repas()
    {
        return $this->getAgence()->restauration();
    }


    /**
     * Compare 2 objets sur le nom et le prénom
     * Renvoi 1 si le 1er est >
     *        0 si ils sont égaux
     *        -1 si le 1er est <
     *
     * @param [type] $obj1
     * @param [type] $obj2
     * @return void
     */
    public static function compareToNomPrenom($obj1, $obj2)
    {
        if ($obj1->getNom() < $obj2->getNom())
        {
            return -1;
        }
        else if ($obj1->getNom() > $obj2->getNom())
        {
            return 1;
        }
        else if ($obj1->getPrenom() < $obj2->getPrenom())
        {
            return -1;
        }
        else if ($obj1->getPrenom() > $obj2->getPrenom())
        {
            return 1;
        }

        return 0;
    }
    /**
     * Compare 2 objets sur le nom et le prénom
     * Renvoi 1 si le 1er est >
     *        0 si ils sont égaux
     *        -1 si le 1er est <
     *
     * @param [type] $obj1
     * @param [type] $obj2
     * @return void
     */
    public static function compareToServiceNomPrenom($obj1, $obj2)
    {
        if ($obj1->getService() < $obj2->getService())
        {
            return -1;
        }
        else if ($obj1->getService() > $obj2->getService())
        {
            return 1;
        }
        else
        {
            return self::compareToNomPrenom($obj1, $obj2);
        }
    }

    /**
     * Renvoi la masse salariale de l'employé
     *
     * @return Int retourne la masse salariale de l'employe
     */
    public function masseSalariale()
    {
        return $this->getSalaireBrutAnnuel()*1000+ $this->prime();
    }

     /**
     * Indique si l'employé peux bénéficier des chèques vacances
     *
     * @return Boolean 1 si l'employé peu en bénéficier si non 0 
     */
    public function chequeVacance()
    {
        if($this->anciennete()>=1)
        {   
           return TRUE;
        }
        return FALSE;
    }

    /**
     * Détermine si l'employé peux bénéficier de chèques de noel
     * 
     * @return booleen TRUE si il peux en beneficier si non FALSE 
     */
    public function chequeNoel()
    {
        $tabenfant=$this->getEnfant();
        if(!empty($tabenfant))
        {
            foreach($tabenfant as $elt)
            {
                if (($elt->age())<=18)
                {
                    return TRUE;
                }
            }
        }
        return FALSE;
    }

    /**
     * Détermine la somme à remettre en chèque de noel en fonction
     * de l'age et du nombre d'enfants
     * @return Array contenant en index 0 la somme des chèques de 20€
     *                         en index 1 la somme des chèques de 30€
     *                         en index 2 la somme des chèques de 50€  
     */
    public function montantChequeNoel()
    {
        $cheque=["20€"=>0,"30€"=>0,"50€"=>0];
        foreach($this->getEnfant() as $elt)
        {
            if (($elt->age())<10)
            {
                $cheque["20€"]++;
            }
            else 
            {
                if(($elt->age())<15)
                {
                    $cheque["30€"]++;
                }
                else if($elt->age()<18)
                {
                    $cheque["50€"]++;
                }    
            }
        }
        return $cheque;
    }
}