<?php

class Triangle
{

	/*****************Attributs***************** */

	private $_base;
	private $_hauteur;

	/***************** Accesseurs ***************** */


	public function getBase()
	{
		return $this->_base;
	}

	public function setBase($base)
	{
		$this->_base=$base;
	}

	public function getHauteur()
	{
		return $this->_hauteur;
	}

	public function setHauteur($hauteur)
	{
		$this->_hauteur=$hauteur;
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
		return "\nBase : ".$this->getBase()." - Hauteur : ".$this->getHauteur()." - Périmètre : ".$this->perimetre()." - Aire : ".$this->aire()."\n";
	}

	/**
	 *  Retourne l'aire du triangle
	 * 
	 * @return Float perimetre du triangle
	 */

	public function aire ()
	{
		return number_format(($this->getHauteur()*$this->getBase())/2,2);

	} 

	/**
	 *  Retourne la longueur de l'hypotenuse
	 * 
	 * @return Float perimetre du triangle 
	 */

	public function hypotenuse ()
	{
		return sqrt(pow($this->getHauteur(),2)+pow($this->getBase(),2));
	} 
	/**
	 *  Retourne le perimetre du triangle
	 * 
	 * @return Float perimetre du triangle
	 */

	 public function perimetre ()
	 {
		 return number_format($this->hypotenuse()+$this->getHauteur()+$this->getBase(),2);

	 } 
}