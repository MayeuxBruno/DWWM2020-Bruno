<?php

class Livre extends Document
{

	/*****************Attributs***************** */

	private $_nbPages;

	/***************** Accesseurs ***************** */


	public function getNbPages()
	{
		return $this->_nbPages;
	}

	public function setNbPages($nbPages)
	{
		$this->_nbPages=$nbPages;
	}

	/*****************Constructeur***************** */

	public function __construct(array $options = [])
	{
 		parent::__construct($options);
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
		return "\n****** LIVRE *****\n\nNombre de Pages : ".$this->getNbPages().parent::toString()."\n";
	}


	/**
	* Returne TRUE si l'objet en paramètre est égal 
	* à l'objet appelant si non FALSE
	*
	* @param Livre
	* @return bool
	*/
	public function equalsTo($obj)
	{
		if(($this->getAuteur()->equalsTo($obj->getAuteur()))&&($this->getTitre()==$obj->getTitre())&&($this->getNbPages()==$obj->getNbPages()))
		{
			return TRUE;
		}
		return FALSE;
	}

}