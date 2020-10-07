<?php

class Test
{

	/*****************Attributs***************** */

	private $_r;
	private $_t;

	/***************** Accesseurs ***************** */


	private function getR()
	{
		return $this->_r;
	}

	private function setR($r)
	{
		$this->_r=$r;
	}

	private function getT()
	{
		return $this->_t;
	}

	private function setT($t)
	{
		$this->_t=$t;
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
	}
}