<?php

class SuiviManager 
{
	public static function add(Suivi $obj)
	{
 		$db=DbConnect::getDb();
		$q=$db->prepare("INSERT INTO Suivis (idEleve,idMatiere,Note,Coefficient) VALUES (:idEleve,:idMatiere,:Note,:Coefficient)");
		$q->bindValue(":idEleve", $obj->getIdEleve());
		$q->bindValue(":idMatiere", $obj->getIdMatiere());
		$q->bindValue(":Note", $obj->getNote());
		$q->bindValue(":Coefficient", $obj->getCoefficient());
		$q->execute();
	}

	public static function update(Suivi $obj)
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
	public static function delete(Suivi $obj)
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
			return new Suivi($results);
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
				$liste[] = new Suivi($donnees);
			}
		}
		return $liste;
	}
	public static function getListByMatiere(Matiere $obj)
	{
 		$db=DbConnect::getDb();
		$liste = [];
		$q=$db->query("SELECT * FROM Suivis WHERE idMatiere =".$obj->getIdMatiere());
		while($donnees = $q->fetch(PDO::FETCH_ASSOC))
		{
			if($donnees != false)
			{
				$liste[] = new Suivi($donnees);
			}
		}
		return $liste;
	}
}