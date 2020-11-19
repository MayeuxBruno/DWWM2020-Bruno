<?php

class Chambres 
{

	/*****************Attributs***************** */

	private $_IdChambre;
	private $_numChambre;
	private $_typeChambre;
	private $_capaciteChambre;
	private $_idHotel;

	/***************** Accesseurs ***************** */


	public function getIdChambre()
	{
		return $this->_IdChambre;
	}

	public function setIdChambre($IdChambre)
	{
		$this->_IdChambre=$IdChambre;
	}

	public function getNumChambre()
	{
		return $this->_numChambre;
	}

	public function setNumChambre($numChambre)
	{
		$this->_numChambre=$numChambre;
	}

	public function getTypeChambre()
	{
		return $this->_typeChambre;
	}

	public function setTypeChambre($typeChambre)
	{
		$this->_typeChambre=$typeChambre;
	}

	public function getCapaciteChambre()
	{
		return $this->_capaciteChambre;
	}

	public function setCapaciteChambre($capaciteChambre)
	{
		$this->_capaciteChambre=$capaciteChambre;
	}

	public function getIdHotel()
	{
		return $this->_idHotel;
	}

	public function setIdHotel($idHotel)
	{
		$this->_idHotel=$idHotel;
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
		return "IdChambre : ".$this->getIdChambre()."NumChambre : ".$this->getNumChambre()."TypeChambre : ".$this->getTypeChambre()."CapaciteChambre : ".$this->getCapaciteChambre()."IdHotel : ".$this->getIdHotel()."\n";
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