<?php

class Maison
{

	/*****************Attributs***************** */

	private $_cuisine;
	private $_salon;
	private $_chambre;

	/***************** Accesseurs ***************** */


	private function getCuisine()
	{
		return $this->_cuisine;
	}

	private function setCuisine($cuisine)
	{
		$this->_cuisine=$cuisine;
	}

	private function getSalon()
	{
		return $this->_salon;
	}

	private function setSalon($salon)
	{
		$this->_salon=$salon;
	}

	private function getChambre()
	{
		return $this->_chambre;
	}

	private function setChambre($chambre)
	{
		$this->_chambre=$chambre;
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
		return ;
	}

	/*****************Autres Méthodes***************** */

	/**
	 * Transforme l'objet en chaine de caractères
	*
	* @return String
	*/
	public function equalsTo($obj)
	{		return;
	}}