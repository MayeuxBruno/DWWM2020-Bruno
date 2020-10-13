<?php

class MonstreDifficile extends MonstreFacile
{

	/*****************Attributs***************** */

	private static $_nombreDifficile=0;

	/***************** Accesseurs ***************** */


	public static function getnombreDifficile()
	{
		return self::$_nombreDifficile;
	}

	public static function setNombreDifficile($nbDifficile)
	{
		self::$_nombreDifficile=$nbDifficile;
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
		return parent::toString()."\n";
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
		if ($lanceMonstre>$lanceJoueur)  // Si le monstre Gagne
		{
			$sort=De::lanceLeDe();
			if ($sort==6)	// Si le sort magique est bon 
			{
				$dommages=10;
			}
			else
			{
				$dommages=5*$sort;
			}
			$joueur->subitDegats($dommages);	
		}
		else
		{
			$this->setEstVivant(FALSE);
			self::setNombreDifficile(self::getNombreDifficile()+1);
			$joueur->subitDegats(0);
		}
		$result=['Monstre'=>$lanceMonstre,'Joueur'=>$lanceJoueur];
		return $result;
	}

	
}