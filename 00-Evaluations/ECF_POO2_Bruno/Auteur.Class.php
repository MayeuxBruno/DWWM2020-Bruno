<?php

class Auteur 
{

	/*****************Attributs***************** */

	private $_nom;
	private $_prenom;
	private $_dateNaissance;
	private $_dateDeces;

	/***************** Accesseurs ***************** */


	public function getNom()
	{
		return $this->_nom;
	}

	public function setNom($nom)
	{
		$this->_nom=ucfirst($nom);
	}

	public function getPrenom()
	{
		return $this->_prenom;
	}

	public function setPrenom($prenom)
	{
		$this->_prenom=ucfirst($prenom);
	}

	public function getDateNaissance()
	{
		return $this->_dateNaissance;
	}

	public function setDateNaissance(DateTime $dateNaissance)
	{
		$this->_dateNaissance=$dateNaissance;
	}

	public function getDateDeces()
	{
		return $this->_dateDeces;
	}

	public function setDateDeces($dateDeces)
	{
		$this->_dateDeces=$dateDeces;
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
		$rep = "Nom : ".$this->getNom()."\nPrenom : ".$this->getPrenom()."\nDateNaissance : "
		.$this->getDateNaissance()->format('d-m-y')."\n";
		if(!$this->estVivant())  // Affiche la ligne date de deces uniquement si l'auteur est decede 
		{
			$rep.="DateDeces : ".$this->getDateDeces()->format('d-m-y')."\n";
		}
		return $rep;
	}

	/**
	 * Retourne TRUE si l'auteur est vivant si non FALSE
	 *
	 * @return Bool
	 */
	public function estVivant()
	{
		if ($this->getDateDeces()==NULL)
		{
			return TRUE;
		}
		return FALSE;
	}


	/**
	* Retourne TRUE si l'objet en paramètre est égal 
	* à l'objet appelant si non FALSE
	*
	* @param Auteur
	* @return bool
	*/
	public function equalsTo($obj)
	{
		if(($this->getNom()==$obj->getNom())&&($this->getPrenom()==$obj->getPrenom()))
		{	
			if(($this->getDateNaissance()==$obj->getDateNaissance())&&($this->getDateDeces()==$obj->getDateDeces()))
			{
				return TRUE;
			}
		}
		return FALSE;
	}


	
}