<?php

class Document 
{

	/*****************Attributs***************** */

	private $_titre;
	private $_auteur;
	private $_emprunte;

	/***************** Accesseurs ***************** */


	public function getTitre()
	{
		return $this->_titre;
	}

	public function setTitre($titre)
	{
		$this->_titre=ucfirst($titre);
	}

	public function getAuteur()
	{
		return $this->_auteur;
	}

	public function setAuteur(Auteur $auteur)
	{
		$this->_auteur=$auteur;
	}

	public function getEmprunte()
	{
		return $this->_emprunte;
	}

	public function setEmprunte($emprunte)
	{
		$this->_emprunte=$emprunte;
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
		$emp=($this->estEmprunte())?'Oui':'Non'; //Affiche Oui ou Non en fonction de la valeur de emprunte (TRUE/FALSE)
		return "\nTitre : ".$this->getTitre()."\n\n*** Auteur ***\n".$this->getAuteur()->toString()."\nEmprunte : ".$emp."\n";
	}

	/**
	* Indique si le document est emprunté 
	* TRUE => l'objet est emprunt - FALSE => il est dispo
	*
	* @return Bool
	*/
	public function estEmprunte()
	{
		return $this->getEmprunte();
	}

	/**
	* Retourne TRUE si l'objet en paramètre est égal 
	* à l'objet appelant si non FALSE
	*
	* @param Document
	* @return bool
	*/
	public function equalsTo($obj)
	{
		if(($this->getAuteur()->equalsTo($obj->getAuteur()))&&($this->getTitre()==$obj->getTitre()))
		{	
			return TRUE;
		}
		return FALSE;
	}


	
}