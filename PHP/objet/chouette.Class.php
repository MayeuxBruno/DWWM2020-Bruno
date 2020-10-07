<?php

class Chouette
{

	/*****************Attributs***************** */

	private $_e;
	private $_d;

	/***************** Accesseurs ***************** */


	public function getE()
	{
		return $this->_e;
	}

	public function setE($e)
	{
		$this->_e=$e;
	}

	public function getD()
	{
		return $this->_d;
	}

	public function setD($d)
	{
		$this->_d=$d;
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
		return "\n\tE : "$this->getE()"\n""\n\tD : "$this->getD()"\n";
	}
	 * Transforme l'objet en chaine de caractères
	*
	* @return String
	*/
	public function equalsTo($obj)
	{		return;
	}
}