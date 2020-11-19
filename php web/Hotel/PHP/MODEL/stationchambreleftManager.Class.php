<?php

class StationchambreleftManager 
{
	public static function add(Stationchambreleft $obj)
	{
 		$db=DbConnect::getDb();
		$q=$db->prepare("INSERT INTO Stationchambreleft (nomHotel,numChambre,idChambre) VALUES (:nomHotel,:numChambre,:idChambre)");
		$q->bindValue(":nomHotel", $obj->getNomHotel());
		$q->bindValue(":numChambre", $obj->getNumChambre());
		$q->bindValue(":idChambre", $obj->getIdChambre());
		$q->execute();
	}

	public static function update(Stationchambreleft $obj)
	{
 		$db=DbConnect::getDb();
		$q=$db->prepare("UPDATE Stationchambreleft SET nomStation=:nomStation,nomHotel=:nomHotel,numChambre=:numChambre,idChambre=:idChambre WHERE nomStation=:nomStation");
		$q->bindValue(":nomStation", $obj->getNomStation());
		$q->bindValue(":nomHotel", $obj->getNomHotel());
		$q->bindValue(":numChambre", $obj->getNumChambre());
		$q->bindValue(":idChambre", $obj->getIdChambre());
		$q->execute();
	}
	public static function delete(Stationchambreleft $obj)
	{
 		$db=DbConnect::getDb();
		$db->exec("DELETE FROM Stationchambreleft WHERE nomStation=" .$obj->getNomStation());
	}
	public static function findById($id)
	{
 		$db=DbConnect::getDb();
		$id = (int) $id;
		$q=$db->query("SELECT * FROM Stationchambreleft WHERE nomStation =".$id);
		$results = $q->fetch(PDO::FETCH_ASSOC);
		if($results != false)
		{
			return new Stationchambreleft($results);
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
		$q = $db->query("SELECT * FROM Stationchambreleft");
		while($donnees = $q->fetch(PDO::FETCH_ASSOC))
		{
			if($donnees != false)
			{
				$liste[] = new Stationchambreleft($donnees);
			}
		}
		return $liste;
	}
}