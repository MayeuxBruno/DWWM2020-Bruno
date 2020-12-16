<?php

class SuivisManager 
{
	public static function add(Suivis $obj)
	{
 		$db=DbConnect::getDb();
		$q=$db->prepare("INSERT INTO Suivis (idEleve,idMatiere,Note,Coefficient) VALUES (:idEleve,:idMatiere,:Note,:Coefficient)");
		$q->bindValue(":idEleve", $obj->getIdEleve());
		$q->bindValue(":idMatiere", $obj->getIdMatiere());
		$q->bindValue(":Note", $obj->getNote());
		$q->bindValue(":Coefficient", $obj->getCoefficient());
		$q->execute();
	}

	public static function update(Suivis $obj)
	{
 		$db=DbConnect::getDb();
		$q=$db->prepare("UPDATE Suivis SET idSuivis=:idSuivis,idEleve=:idEleve,idMatiere=:idMatiere,Note=:Note,Coefficient=:Coefficient WHERE idSuivis=:idSuivis");
		$q->bindValue(":idSuivis", $obj->getIdSuivis());
		$q->bindValue(":idEleve", $obj->getIdEleve());
		$q->bindValue(":idMatiere", $obj->getIdMatiere());
		$q->bindValue(":Note", $obj->getNote());
		$q->bindValue(":Coefficient", $obj->getCoefficient());
		$q->execute();
	}
	public static function delete(Suivis $obj)
	{
 		$db=DbConnect::getDb();
		$db->exec("DELETE FROM Suivis WHERE idSuivis=" .$obj->getIdSuivis());
	}
	public static function findById($id)
	{
 		$db=DbConnect::getDb();
		$id = (int) $id;
		$q=$db->query("SELECT * FROM Suivis WHERE idSuivis =".$id);
		$results = $q->fetch(PDO::FETCH_ASSOC);
		if($results != false)
		{
			return new Suivis($results);
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
		$q = $db->query("SELECT * FROM Suivis");
		while($donnees = $q->fetch(PDO::FETCH_ASSOC))
		{
			if($donnees != false)
			{
				$liste[] = new Suivis($donnees);
			}
		}
		return $liste;
	}

	public static function getByEleve($eleve)
	{
		$db=DbConnect::getDb();
		$q=$db->query("SELECT * FROM Suivis WHERE idEleve =".$eleve->getIdEleve());
		$results = $q->fetch(PDO::FETCH_ASSOC);
		if($results != false)
		{
			return new Suivis($results);
		}
		else
		{
			return false;
		}
	}


	public static function getListByMatiere($matiere)
	{
 		$db=DbConnect::getDb();
		$liste = [];
		$q=$db->query("SELECT * FROM Suivis WHERE idMatiere =".$matiere->getIdMatiere());
		while($donnees = $q->fetch(PDO::FETCH_ASSOC))
		{
			if($donnees != false)
			{
				$liste[] = new Suivis($donnees);
			}
		}
		return $liste;
	}
}