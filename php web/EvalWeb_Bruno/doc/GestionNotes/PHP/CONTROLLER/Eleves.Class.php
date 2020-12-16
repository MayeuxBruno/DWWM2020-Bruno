<?php

class Eleves 
{

	/*****************Attributs***************** */

	private $_idEleve;
	private $_NomEleve;
	private $_PrenomEleve;
	private $_Classe;

	/***************** Accesseurs ***************** */


	public function getIdEleve()
	{
		return $this->_idEleve;
	}

	public function setIdEleve($idEleve)
	{
		$this->_idEleve=$idEleve;
	}

	public function getNomEleve()
	{
		return $this->_NomEleve;
	}

	public function setNomEleve($NomEleve)
	{
		$this->_NomEleve=$NomEleve;
	}

	public function getPrenomEleve()
	{
		return $this->_PrenomEleve;
	}

	public function setPrenomEleve($PrenomEleve)
	{
		$this->_PrenomEleve=$PrenomEleve;
	}

	public function getClasse()
	{
		return $this->_Classe;
	}

	public function setClasse($Classe)
	{
		$this->_Classe=$Classe;
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
		return "IdEleve : ".$this->getIdEleve()."NomEleve : ".$this->getNomEleve()."PrenomEleve : ".$this->getPrenomEleve()."Classe : ".$this->getClasse()."\n";
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