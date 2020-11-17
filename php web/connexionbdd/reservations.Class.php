<?php

class reservations 
{

	/*****************Attributs***************** */

	private $_idReservation;
	private $_dateReservationSejour;
	private $_dateDebutSejour;
	private $_dateFinSejour;
	private $_prixSejour;
	private $_arrhesSejour;
	private $_idClient;
	private $_IdChambre;
	private $_archive;

	/***************** Accesseurs ***************** */


	public function getIdReservation()
	{
		return $this->_idReservation;
	}

	public function setIdReservation($idReservation)
	{
		$this->_idReservation=$idReservation;
	}

	public function getDateReservationSejour()
	{
		return $this->_dateReservationSejour;
	}

	public function setDateReservationSejour($dateReservationSejour)
	{
		$this->_dateReservationSejour=$dateReservationSejour;
	}

	public function getDateDebutSejour()
	{
		return $this->_dateDebutSejour;
	}

	public function setDateDebutSejour($dateDebutSejour)
	{
		$this->_dateDebutSejour=$dateDebutSejour;
	}

	public function getDateFinSejour()
	{
		return $this->_dateFinSejour;
	}

	public function setDateFinSejour($dateFinSejour)
	{
		$this->_dateFinSejour=$dateFinSejour;
	}

	public function getPrixSejour()
	{
		return $this->_prixSejour;
	}

	public function setPrixSejour($prixSejour)
	{
		$this->_prixSejour=$prixSejour;
	}

	public function getArrhesSejour()
	{
		return $this->_arrhesSejour;
	}

	public function setArrhesSejour($arrhesSejour)
	{
		$this->_arrhesSejour=$arrhesSejour;
	}

	public function getIdClient()
	{
		return $this->_idClient;
	}

	public function setIdClient($idClient)
	{
		$this->_idClient=$idClient;
	}

	public function getIdChambre()
	{
		return $this->_IdChambre;
	}

	public function setIdChambre($IdChambre)
	{
		$this->_IdChambre=$IdChambre;
	}

	public function getArchive()
	{
		return $this->_archive;
	}

	public function setArchive($archive)
	{
		$this->_archive=$archive;
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
		return "IdReservation : ".$this->getIdReservation()"DateReservationSejour : ".$this->getDateReservationSejour()"DateDebutSejour : ".$this->getDateDebutSejour()"DateFinSejour : ".$this->getDateFinSejour()"PrixSejour : ".$this->getPrixSejour()"ArrhesSejour : ".$this->getArrhesSejour()"IdClient : ".$this->getIdClient()"IdChambre : ".$this->getIdChambre()"Archive : ".$this->getArchive()"\n";
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