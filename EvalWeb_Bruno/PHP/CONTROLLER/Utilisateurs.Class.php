<?php

class Utilisateurs 
{

	/*****************Attributs***************** */

	private $_idUtilisateur;
	private $_Login;
	private $_NomUtilisateur;
	private $_PrenomUtilisateur;
	private $_MotDePasse;
	private $_Role;
	private $_IdMatiere;

	/***************** Accesseurs ***************** */


	public function getIdUtilisateur()
	{
		return $this->_idUtilisateur;
	}

	public function setIdUtilisateur($idUtilisateur)
	{
		$this->_idUtilisateur=$idUtilisateur;
	}

	public function getLogin()
	{
		return $this->_Login;
	}

	public function setLogin($Login)
	{
		$this->_Login=$Login;
	}

	public function getNomUtilisateur()
	{
		return $this->_NomUtilisateur;
	}

	public function setNomUtilisateur($NomUtilisateur)
	{
		$this->_NomUtilisateur=$NomUtilisateur;
	}

	public function getPrenomUtilisateur()
	{
		return $this->_PrenomUtilisateur;
	}

	public function setPrenomUtilisateur($PrenomUtilisateur)
	{
		$this->_PrenomUtilisateur=$PrenomUtilisateur;
	}

	public function getMotDePasse()
	{
		return $this->_MotDePasse;
	}

	public function setMotDePasse($MotDePasse)
	{
		$this->_MotDePasse=$MotDePasse;
	}

	public function getRole()
	{
		return $this->_Role;
	}

	public function setRole($Role)
	{
		$this->_Role=$Role;
	}

	public function getIdMatiere()
	{
		return $this->_IdMatiere;
	}

	public function setIdMatiere($IdMatiere)
	{
		$this->_IdMatiere=$IdMatiere;
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
		return "IdUtilisateur : ".$this->getIdUtilisateur()."Login : ".$this->getLogin()."NomUtilisateur : ".$this->getNomUtilisateur()."PrenomUtilisateur : ".$this->getPrenomUtilisateur()."MotDePasse : ".$this->getMotDePasse()."Role : ".$this->getRole()."IdMatiere : ".$this->getIdMatiere()."\n";
	}

}