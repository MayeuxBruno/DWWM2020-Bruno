<?php

class Clients 
{

	/*****************Attributs***************** */

	private $_idClient;
	private $_nomClient;
	private $_prenomClient;
	private $_adresseClient;
	private $_villeClient;

	/***************** Accesseurs ***************** */


	public function getIdClient()
	{
		return $this->_idClient;
	}

	public function setIdClient($idClient)
	{
		$this->_idClient=$idClient;
	}

	public function getNomClient()
	{
		return $this->_nomClient;
	}

	public function setNomClient($nomClient)
	{
		$this->_nomClient=$nomClient;
	}

	public function getPrenomClient()
	{
		return $this->_prenomClient;
	}

	public function setPrenomClient($prenomClient)
	{
		$this->_prenomClient=$prenomClient;
	}

	public function getAdresseClient()
	{
		return $this->_adresseClient;
	}

	public function setAdresseClient($adresseClient)
	{
		$this->_adresseClient=$adresseClient;
	}

	public function getVilleClient()
	{
		return $this->_villeClient;
	}

	public function setVilleClient($villeClient)
	{
		$this->_villeClient=$villeClient;
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
		return "IdClient : ".$this->getIdClient()."NomClient : ".$this->getNomClient()."PrenomClient : ".$this->getPrenomClient()."AdresseClient : ".$this->getAdresseClient()."VilleClient : ".$this->getVilleClient()."\n";
	}


	
	/* Renvoit Vrai si lobjet en paramètre est égal 
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