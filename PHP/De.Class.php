<?php

class De 
{

	/*****************Attributs***************** */


	/***************** Accesseurs ***************** */


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
		return "\n";
	}

	/**
	 * Genere Un lancé de dé aléatoirement
	 * Retourne le résultat du lancé
	 * 
	 * @return Integer
	 */
	public static function lanceLeDe()
	{
		return rand(1,6);
	}
}