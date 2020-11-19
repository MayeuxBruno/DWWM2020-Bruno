<?php

class Stationchambreleft 
{

	/*****************Attributs***************** */

	private $_nomStation;
	private $_nomHotel;
	private $_numChambre;
	private $_idChambre;

	/***************** Accesseurs ***************** */


	public function getNomStation()
	{
		return $this->_nomStation;
	}

	public function setNomStation($nomStation)
	{
		$this->_nomStation=$nomStation;
	}

	public function getNomHotel()
	{
		return $this->_nomHotel;
	}

	public function setNomHotel($nomHotel)
	{
		$this->_nomHotel=$nomHotel;
	}

	public function getNumChambre()
	{
		return $this->_numChambre;
	}

	public function setNumChambre($numChambre)
	{
		$this->_numChambre=$numChambre;
	}

	public function getIdChambre()
	{
		return $this->_idChambre;
	}

	public function setIdChambre($idChambre)
	{
		$this->_idChambre=$idChambre;
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
		return "NomStation : ".$this->getNomStation()."NomHotel : ".$this->getNomHotel()."NumChambre : ".$this->getNumChambre()."IdChambre : ".$this->getIdChambre()."\n";
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