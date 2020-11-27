<?php
class Users
{

    /*****************Attributs***************** */
    private $_idUser;
    private $_nomUser;
    private $_prenomUser;
    private $_pseudoUser;
    private $_mailUser;
    private $_passwordUser;
    private $_roleUser;

    /*****************Accesseurs***************** */
    public function getIdUser()
    {
        return $this->_idUser;
    }

    public function setIdUser($idUser)
    {
        $this->_idUser = $idUser;
    }

    public function getNomUser()
    {
        return $this->_nomUser;
    }

    public function setNomUser($nomUser)
    {
        $this->_nomUser = ucfirst($nomUser);
    }

    public function getPrenomUser()
    {
        return $this->_prenomUser;
    }

    public function setPrenomUser($prenomUser)
    {
        $this->_prenomUser = ucfirst($prenomUser);
    }

    public function getPseudoUser()
    {
        return $this->_pseudoUser;
    }

    public function setPseudoUser($pseudoUser)
    {
        $this->_pseudoUser = $pseudoUser;
    }

    public function getMailUser()
    {
        return $this->_mailUser;
    }

    public function setMailUser($mailUser)
    {
        $this->_mailUser = $mailUser;
    }

    public function getPasswordUser()
    {
        return $this->_passwordUser;
    }

    public function setPasswordUser($passwordUser)
    {
        $this->_passwordUser = md5($passwordUser);
    }

    public function getRoleUser()
    {
        return $this->_roleUser;
    }

    public function setRoleUser($roleUser)
    {
        $this->_roleUser = $roleUser;
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
        return $this->getNomUser()." - ".$this->getPrenomUser()." - ".$this->getPseudoUser()." - "
        .$this->getMailUser()." - ".$this->getPasswordUser()." - ".$this->getRoleUser();
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