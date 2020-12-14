<?php

class ChambresManager 
{
	public static function add(Chambres $obj)
	{
 		$db=DbConnect::getDb();
		$q=$db->prepare("INSERT INTO Chambres (numChambre,typeChambre,capaciteChambre,idHotel) VALUES (:numChambre,:typeChambre,:capaciteChambre,:idHotel)");
		$q->bindValue(":numChambre", $obj->getNumChambre());
		$q->bindValue(":typeChambre", $obj->getTypeChambre());
		$q->bindValue(":capaciteChambre", $obj->getCapaciteChambre());
		$q->bindValue(":idHotel", $obj->getIdHotel());
		$q->execute();
	}

	public static function update(Chambres $obj)
	{
 		$db=DbConnect::getDb();
		$q=$db->prepare("UPDATE Chambres SET IdChambre=:IdChambre,numChambre=:numChambre,typeChambre=:typeChambre,capaciteChambre=:capaciteChambre,idHotel=:idHotel WHERE IdChambre=:IdChambre");
		$q->bindValue(":IdChambre", $obj->getIdChambre());
		$q->bindValue(":numChambre", $obj->getNumChambre());
		$q->bindValue(":typeChambre", $obj->getTypeChambre());
		$q->bindValue(":capaciteChambre", $obj->getCapaciteChambre());
		$q->bindValue(":idHotel", $obj->getIdHotel());
		$q->execute();
	}
	public static function delete(Chambres $obj)
	{
 		$db=DbConnect::getDb();
		$db->exec("DELETE FROM Chambres WHERE IdChambre=" .$obj->getIdChambre());
	}
	public static function findById($id)
	{
 		$db=DbConnect::getDb();
		$id = (int) $id;
		$q=$db->query("SELECT * FROM Chambres WHERE IdChambre =".$id);
		$results = $q->fetch(PDO::FETCH_ASSOC);
		if($results != false)
		{
			return new Chambres($results);
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
		$q = $db->query("SELECT * FROM Chambres");
		while($donnees = $q->fetch(PDO::FETCH_ASSOC))
		{
			if($donnees != false)
			{
				$liste[] = new Chambres($donnees);
			}
		}
		return $liste;
	}
}