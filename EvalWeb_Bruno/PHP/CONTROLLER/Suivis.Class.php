<?php

class Suivis 
{

	/*****************Attributs***************** */

	private $_idSuivis;
	private $_idEleve;
	private $_idMatiere;
	private $_Note;
	private $_Coefficient;

	/***************** Accesseurs ***************** */


	public function getIdSuivis()
	{
		return $this->_idSuivis;
	}

	public function setIdSuivis($idSuivis)
	{
		$this->_idSuivis=$idSuivis;
	}

	public function getIdEleve()
	{
		return $this->_idEleve;
	}

	public function setIdEleve($idEleve)
	{
		$this->_idEleve=$idEleve;
	}

	public function getIdMatiere()
	{
		return $this->_idMatiere;
	}

	public function setIdMatiere($idMatiere)
	{
		$this->_idMatiere=$idMatiere;
	}

	public function getNote()
	{
		return $this->_Note;
	}

	public function setNote($Note)
	{
		$this->_Note=$Note;
	}

	public function getCoefficient()
	{
		return $this->_Coefficient;
	}

	public function setCoefficient($Coefficient)
	{
		$this->_Coefficient=$Coefficient;
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
 			$methode = "set".ucfirst($key); //ucfirst met la 1ere lettre en majuscule
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
		return "IdSuivis : ".$this->getIdSuivis()."IdEleve : ".$this->getIdEleve()."IdMatiere : ".$this->getIdMatiere()."Note : ".$this->getNote()."Coefficient : ".$this->getCoefficient()."\n";
	}

}