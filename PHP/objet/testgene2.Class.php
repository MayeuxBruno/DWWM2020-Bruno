<?php

class Testgene2
{

	/*****************Attributs***************** */

	private $_tr3;
	private $_ad2;
	private $_ad3;

	/***************** Accesseurs ***************** */


	public function getTr3()
	{
		return $this->_tr3;
	}

	public function setTr3($tr3)
	{
		$this->_tr3=$tr3;
	}

	public function getAd2()
	{
		return $this->_ad2;
	}

	public function setAd2($ad2)
	{
		$this->_ad2=$ad2;
	}

	public function getAd3()
	{
		return $this->_ad3;
	}

	public function setAd3($ad3)
	{
		$this->_ad3=$ad3;
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
		return "\n\tTr3 : ".$this->getTr3()."\n\tAd2 : ".$this->getAd2()."\n\tAd3 : ".$this->getAd3()."\n";
	}


	/**
	* Renvoit Vrai si l'objet en paramètre est égal 
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