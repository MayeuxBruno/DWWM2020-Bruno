<?php

class Cercle
{

	/*****************Attributs***************** */

	private $_diametre;

	/***************** Accesseurs ***************** */


	public function getDiametre()
	{
		return $this->_diametre;
	}

	public function setDiametre($diametre)
	{
		$this->_diametre=$diametre;
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
		return "\nDiametre : ".$this->getDiametre()." - Périmètre : ".$this->perimetre()." - Aire : ".$this->aire()."\n";
	}


	/**
	* Retourne le rayon du cercle 
	*
	* @param Void
	* @return Float
	*/
	public function rayon()
	{
		return ($this->getDiametre()/2);
	}

	/**
	* Retourne le perimetre du cercle 
	*
	* @param Void
	* @return Float
	*/
	public function perimetre()
	{
		return number_format((2*pi()*$this->rayon()),2);
	}

	/**
	* Retourne l'aire du carcle
	*
	* @param Void
	* @return Float
	*/
	public function aire()
	{
		return number_format((pi()*pow($this->rayon(),2)),2);
	}

	
}