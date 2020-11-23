<?php

class StationshotelschambresManager 
{
	public static function add(Stationshotelschambres $obj)
	{
 		$db=DbConnect::getDb();
		$q=$db->prepare("INSERT INTO Stationshotelschambres (nomHotel,categorieHotel,adresseHotel,idStation,nomStation,altitudeStation,IdChambre,numChambre) VALUES (:nomHotel,:categorieHotel,:adresseHotel,:idStation,:nomStation,:altitudeStation,:IdChambre,:numChambre)");
		$q->bindValue(":nomHotel", $obj->getNomHotel());
		$q->bindValue(":categorieHotel", $obj->getCategorieHotel());
		$q->bindValue(":adresseHotel", $obj->getAdresseHotel());
		$q->bindValue(":idStation", $obj->getIdStation());
		$q->bindValue(":nomStation", $obj->getNomStation());
		$q->bindValue(":altitudeStation", $obj->getAltitudeStation());
		$q->bindValue(":IdChambre", $obj->getIdChambre());
		$q->bindValue(":numChambre", $obj->getNumChambre());
		$q->execute();
	}

	public static function update(Stationshotelschambres $obj)
	{
 		$db=DbConnect::getDb();
		$q=$db->prepare("UPDATE Stationshotelschambres SET idHotel=:idHotel,nomHotel=:nomHotel,categorieHotel=:categorieHotel,adresseHotel=:adresseHotel,idStation=:idStation,nomStation=:nomStation,altitudeStation=:altitudeStation,IdChambre=:IdChambre,numChambre=:numChambre WHERE idHotel=:idHotel");
		$q->bindValue(":idHotel", $obj->getIdHotel());
		$q->bindValue(":nomHotel", $obj->getNomHotel());
		$q->bindValue(":categorieHotel", $obj->getCategorieHotel());
		$q->bindValue(":adresseHotel", $obj->getAdresseHotel());
		$q->bindValue(":idStation", $obj->getIdStation());
		$q->bindValue(":nomStation", $obj->getNomStation());
		$q->bindValue(":altitudeStation", $obj->getAltitudeStation());
		$q->bindValue(":IdChambre", $obj->getIdChambre());
		$q->bindValue(":numChambre", $obj->getNumChambre());
		$q->execute();
	}
	public static function delete(Stationshotelschambres $obj)
	{
 		$db=DbConnect::getDb();
		$db->exec("DELETE FROM Stationshotelschambres WHERE idHotel=" .$obj->getIdHotel());
	}
	public static function findById($id)
	{
 		$db=DbConnect::getDb();
		$id = (int) $id;
		$q=$db->query("SELECT * FROM Stationshotelschambres WHERE idHotel =".$id);
		$results = $q->fetch(PDO::FETCH_ASSOC);
		if($results != false)
		{
			return new Stationshotelschambres($results);
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
		$q = $db->query("SELECT * FROM Stationshotelschambres");
		while($donnees = $q->fetch(PDO::FETCH_ASSOC))
		{
			if($donnees != false)
			{
				$liste[] = new Stationshotelschambres($donnees);
			}
		}
		return $liste;
	}
}