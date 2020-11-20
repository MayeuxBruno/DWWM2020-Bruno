<?php

class Adherents 
{

	/*****************Attributs***************** */

	private $_idAdherent;
	private $_nom;
	private $_prenom;
	private $_pupitre;
	private $_fonction;

	/***************** Accesseurs ***************** */


	public function getIdAdherent()
	{
		return $this->_idAdherent;
	}

	public function setIdAdherent($idAdherent)
	{
		$this->_idAdherent=$idAdherent;
	}

	public function getNom()
	{
		return $this->_nom;
	}

	public function setNom($nom)
	{
		$this->_nom=$nom;
	}

	public function getPrenom()
	{
		return $this->_prenom;
	}

	public function setPrenom($prenom)
	{
		$this->_prenom=$prenom;
	}

	public function getPupitre()
	{
		return $this->_pupitre;
	}

	public function setPupitre($pupitre)
	{
		$this->_pupitre=$pupitre;
	}

	public function getFonction()
	{
		return $this->_fonction;
	}

	public function setFonction($fonction)
	{
		$this->_fonction=$fonction;
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
 			$methode = "set".ucfirst($key); //ucfirst met la 1ere lettre en majuscule
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
		return "IdAdherent : ".$this->getIdAdherent()."Nom : ".$this->getNom()."Prenom : ".$this->getPrenom()."Pupitre : ".$this->getPupitre()."Fonction : ".$this->getFonction()."\n";
	}


	
	/* Renvoit Vrai si lobjet en paramètre est égal 
	* à l'objet appelant
	*
	* @param [type] $obj
	* @return bool
	*/
	public function equalsTo($obj)
	{
		return;
	}


	/**
	* Compare l'objet à un autre
	* Renvoi 1 si le 1er est >
	*        0 si ils sont égaux
	*      - 1 si le 1er est <
	*
	* @param [type] $obj1
	* @param [type] $obj2
	* @return Integer
	*/
	public function compareTo($obj)
	{
		return;
	}
}