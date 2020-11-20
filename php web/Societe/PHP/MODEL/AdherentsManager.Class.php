<?php

class AdherentsManager 
{
	public static function add(Adherents $obj)
	{
 		$db=DbConnect::getDb();
		$q=$db->prepare("INSERT INTO Adherents (nom,prenom,pupitre,fonction) VALUES (:nom,:prenom,:pupitre,:fonction)");
		$q->bindValue(":nom", $obj->getNom());
		$q->bindValue(":prenom", $obj->getPrenom());
		$q->bindValue(":pupitre", $obj->getPupitre());
		$q->bindValue(":fonction", $obj->getFonction());
		$q->execute();
	}

	public static function update(Adherents $obj)
	{
 		$db=DbConnect::getDb();
		$q=$db->prepare("UPDATE Adherents SET idAdherent=:idAdherent,nom=:nom,prenom=:prenom,pupitre=:pupitre,fonction=:fonction WHERE idAdherent=:idAdherent");
		$q->bindValue(":idAdherent", $obj->getIdAdherent());
		$q->bindValue(":nom", $obj->getNom());
		$q->bindValue(":prenom", $obj->getPrenom());
		$q->bindValue(":pupitre", $obj->getPupitre());
		$q->bindValue(":fonction", $obj->getFonction());
		$q->execute();
	}
	public static function delete(Adherents $obj)
	{
 		$db=DbConnect::getDb();
		$db->exec("DELETE FROM Adherents WHERE idAdherent=".$obj->getIdAdherent());
	}
	public static function findById($id)
	{
 		$db=DbConnect::getDb();
		$id = (int) $id;
		$q=$db->query("SELECT * FROM Adherents WHERE idAdherent =".$id);
		$results = $q->fetch(PDO::FETCH_ASSOC);
		if($results != false)
		{
			return new Adherents($results);
		}
		else
		{
			return false;
		}
	}
	public static function getList()
	{
 		$db=DbConnect::getDb();
		$liste = [];
		$q = $db->query("SELECT * FROM Adherents");
		while($donnees = $q->fetch(PDO::FETCH_ASSOC))
		{
			if($donnees != false)
			{
				$liste[] = new Adherents($donnees);
			}
		}
		return $liste;
	}
}