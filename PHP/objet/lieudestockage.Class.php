<?php

class LieuDeStockage
{

	/*****************Attributs***************** */

	private $_entrepot;
	private $_zone;

	/***************** Accesseurs ***************** */


	public function getEntrepot()
	{
		return $this->_entrepot;
	}

	public function setEntrepot($entrepot)
	{
		$this->_entrepot=$entrepot;
	}

	public function getZone()
	{
		return $this->_zone;
	}

	public function setZone($zone)
	{
		$this->_zone=$zone;
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
		return "\nNuméro d'entrepot :".$this->getEntrepot()."\nZone :".$this->getZone()."\n";
	}

	/*****************Autres Méthodes***************** */

	/**
	 * Transforme l'objet en chaine de caractères
	*
	* @return String
	*/
	public function equalsTo($obj)
	{		return;
	}
}