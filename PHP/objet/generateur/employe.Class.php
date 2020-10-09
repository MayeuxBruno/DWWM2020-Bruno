<?php

class Employe extends Personne
{

	/*****************Attributs***************** */

	private $_matricule;
	private $_agence;

	/***************** Accesseurs ***************** */


	public function getMatricule()
	{
		return $this->_matricule;
	}

	public function setMatricule($matricule)
	{
		$this->_matricule=$matricule;
	}

	public function getAgence()
	{
		return $this->_agence;
	}

	public function setAgence($agence)
	{
		$this->_agence=$agence;
	}

	/*****************Constructeur***************** */

	public function __construct(array $options = [])
	{
 		parent::__construct($options);
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
		return "\n\tMatricule : ".$this->getMatricule()."\n\tAgence : ".$this->getAgence()."\n";
	}


	/**
	* Renvoit Vrai si l'objet en paramètre est égal 
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