<?php

class Stations 
{

	/*****************Attributs***************** */

	private $_idStation;
	private $_nomStation;
	private $_altitudeStation;

	/***************** Accesseurs ***************** */


	public function getIdStation()
	{
		return $this->_idStation;
	}

	public function setIdStation($idStation)
	{
		$this->_idStation=$idStation;
	}

	public function getNomStation()
	{
		return $this->_nomStation;
	}

	public function setNomStation($nomStation)
	{
		$this->_nomStation=$nomStation;
	}

	public function getAltitudeStation()
	{
		return $this->_altitudeStation;
	}

	public function setAltitudeStation($altitudeStation)
	{
		$this->_altitudeStation=$altitudeStation;
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
		return "IdStation : ".$this->getIdStation()."NomStation : ".$this->getNomStation()."AltitudeStation : ".$this->getAltitudeStation()."\n";
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