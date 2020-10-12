<?php

class MonstreFacile 
{

	/*****************Attributs***************** */

	private $_estVivant;
	private static $_compteur=0;

	/***************** Accesseurs ***************** */


	public function getEstVivant()
	{
		return $this->_estVivant;
	}

	public function setEstVivant($estVivant)
	{
		$this->_estVivant=$estVivant;
	}

	public static function getCompteur()
	{
		return self::$_compteur;
	}

	public static function setCompteur($compteur)
	{
		self::$_compteur = $compteur;
	}

	/*****************Constructeur***************** */

	public function __construct(array $options = [])
	{
 		if (!empty($options)) // empty : renvoi vrai si le tableau est vide
		{
			$this->hydrate($options);
		}
		self::setCompteur(self::getCompteur()+1);
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
		return "EstVivant : ".$this->getEstVivant()."\n";
	}

	/**
	 * Lance une attaque contre le joueur
	 * 
	 * @param Joueur
	 * @return Array
	 */
	public function attaque($joueur)
	{
		$lanceJoueur = De::lanceLeDe();
		$lanceMonstre = De::lanceLeDe();
		if ($lanceMonstre>$lanceJoueur)
		{
			$joueur->subitDegats(10);	
		}
		else
		{
			$this->setEstVivant(FALSE);
			$joueur->subitDegats(0);
		}
		$result=['Monstre'=>$lanceMonstre,'Joueur'=>$lanceJoueur];
		return $result;
	}
}