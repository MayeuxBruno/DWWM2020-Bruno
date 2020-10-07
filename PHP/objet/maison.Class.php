<?php

class Maison
{

	/*****************Attributs***************** */

	private $_uyzuau;
	private $_uyeauiyai;
	private $_gsdjsdk;

	/***************** Accesseurs ***************** */


	public function getUyzuau()
	{
		return $this->_uyzuau;
	}

	public function setUyzuau($uyzuau)
	{
		$this->_uyzuau=$uyzuau;
	}

	public function getUyeauiyai()
	{
		return $this->_uyeauiyai;
	}

	public function setUyeauiyai($uyeauiyai)
	{
		$this->_uyeauiyai=$uyeauiyai;
	}

	public function getGsdjsdk()
	{
		return $this->_gsdjsdk;
	}

	public function setGsdjsdk($gsdjsdk)
	{
		$this->_gsdjsdk=$gsdjsdk;
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
		return "\n\tUyzuau : ".$this->getUyzuau()."\n\tUyeauiyai : ".$this->getUyeauiyai()."\n\tGsdjsdk : ".$this->getGsdjsdk()."\n";
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