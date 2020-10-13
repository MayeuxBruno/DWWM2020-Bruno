<?php

class Joueur 
{

	/*****************Attributs***************** */
	private $_nom;
	private $_ptsDeVie;

	/***************** Accesseurs ***************** */

	public function getNom()
	{
		return $this->_nom;
	}

	public function setNom($nom)
	{
		$this->_nom = $nom;
	}

	public function getPtsDeVie()
	{
		return $this->_ptsDeVie;
	}

	public function setPtsDeVie($ptsDeVie)
	{
		$this->_ptsDeVie=$ptsDeVie;
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
		return "PtsDeVie : ".$this->getPtsDeVie()."\n";
	}


	/**
	 * Indique si le joueur est en vie
	 * 
	 * @return Bool
	 */
	public function estEnVie()
	{
		if ($this->_ptsDeVie>0)
		{
			return TRUE;
		}
		return FALSE;
	} 

	/**
	 * Lance une attaque contre le monstre
	 * 
	 * @param Monstre
	 * @return Array
	 * 
	 */
	public function attaque($monstre)
	{
		$lanceJoueur = De::lanceLeDe();
		$lanceMonstre = De::lanceLeDe();
		if ($lanceJoueur>=$lanceMonstre)
		{
			$monstre->setEstVivant(FALSE);
		}
		else
		{
			$this->subitDegats(10);
		}
		$result=['Hero'=>$lanceJoueur,'Monstre'=>$lanceMonstre];
		return $result;
	}

	/**
	 * Mets a jour les point de vies en fonction de
	 * le valeur des degats subis
	 * 
	 * @param Integer $degat
	 * 
	 */
	public function subitDegats($degats)
	{
		if ($degats>0)
		{
			if (De::LanceLeDe()>2) //lance le bouclier du héro
			{
				$this->setPtsDeVie($this->getPtsDeVie()-$degats);
			}
		}
	}


}