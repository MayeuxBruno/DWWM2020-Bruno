<?php

class Produit
{

	/*****************Attributs***************** */

	private $_numero;
	private $_prixHt;
	private $_designation;
	private $_couleur;
	private $_dateValidite;
	private $_categorie;
	private $_lieuStockage;
	private static $_compteur;

	/***************** Accesseurs ***************** */


	public function getNumero()
	{
		return $this->_numero;
	}

	public function setNumero($numero)
	{
		$this->_numero=$numero;
	}

	public function getPrixHt()
	{
		return $this->_prixHt;
	}

	public function setPrixHt($prixHt)
	{
		$this->_prixHt=$prixHt;
	}

	public function getDesignation()
	{
		return $this->_designation;
	}

	public function setDesignation($designation)
	{
		$this->_designation=$designation;
	}

	public function getCouleur()
	{
		return $this->_couleur;
	}

	public function setCouleur($couleur)
	{
		$this->_couleur=$couleur;
	}

	public function getDateValidite()
	{
		return $this->_dateValidite;
	}

	public function setDateValidite(DateTime $dateValidite)
	{
		$this->_dateValidite=$dateValidite;
	}

	private function getCategorie()
	{
		return $this->_categorie;
	}

	public function setCategorie($categorie)
	{
		$this->_categorie=$categorie;
	}

	public function getLieuStockage()
	{
		return $this->_lieuStockage;
	}

	public function setLieuStockage($lieuStockage)
	{
		$this->_lieuStockage=$lieuStockage;
	}

	public static function getCompteur()
	{
		return self::$_compteur;
	}

	public static function setCompteur($compteur)
	{
		self::$_compteur=$compteur;
	}

	/*****************Constructeur***************** */

	public function __construct(array $options = [])
	{
 		 if (!empty($options)) // empty : renvoi vrai si le tableau est vide
		{
			$this->hydrate($options);
		}
		Self::$_compteur++;
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

	private function renvoiLieuDeStockage()
	{
		$rep="";
		foreach($this->getLieuStockage() as $elt)
		{
				$rep.=$elt->toString();
		}
		return $rep;
	}

	/*****************Autres Méthodes***************** */

	/**
	 * Transforme l'objet en chaine de caractères
	*
	* @return String
	*/
	public function toString()
	{
		$rep="\n****** Produit *******\nNuméro : ".$this->getNumero()
			."\nDésignation : ".$this->getDesignation()."\nCouleur : ".$this->getCouleur()
			."\nDate de validité : ".$this->getDateValidite()->format('j-m-Y')
			."\nCatégorie : ".$this->getCategorie()."\n\n** Lieu de Stockage ** \n"
			.$this->renvoiLieuDeStockage()."\n";
		return $rep;
	}

	

	/**
	*Indique si l'objet est périmé
	*
	* @return Boleen TRUE si le produit est périmé si non FALSE
	*/
	public function estPerime()
	{		
		$dateActuel=new DateTime ('now');
		if($dateActuel>$this->getDateValidite())
		{
			return TRUE;
		}
		return FALSE;

		// 
		return ($dateActuel>$this->getDateValidite());
	}

	/**
	* Ajoute un nouveau lieu de stockage à la liste des
	* des lieux de stockage du produit.
	*
	* @return Boleen TRUE si le produit est périmé si non FALSE
	*/
	public function entreeEnStock( lieuDeStockage $lieu )
	{		
		$lieux=$this->getLieuStockage();
		$lieux.=$lieu;
		$this->setLieuStockage($lieux);
	}

	/**
	*Calcul le prix T.T.C du produit
	*
	* @return Int Prix du produit ttc
	*/
	public function prixTtc()
	{		
		$prixTtc=$this->getPrixHt()+($this->getPrixHt()*($this->getCategorie()->getTva()/100));
		return $prixTtc;
	}

	public static function compareTo( Produit $p1,Produit $p2 )
	{

	}
}