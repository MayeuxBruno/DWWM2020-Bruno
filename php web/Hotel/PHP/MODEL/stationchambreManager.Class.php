<?php

class StationchambreManager 
{
	public static function add(Stationchambre $obj)
	{
 		$db=DbConnect::getDb();
		$q=$db->prepare("INSERT INTO Stationchambre (nomHotel,categorieHotel,adresseHotel,villeHotel,numChambre,typeChambre,capaciteChambre,idChambre) VALUES (:nomHotel,:categorieHotel,:adresseHotel,:villeHotel,:numChambre,:typeChambre,:capaciteChambre,:idChambre)");
		$q->bindValue(":nomHotel", $obj->getNomHotel());
		$q->bindValue(":categorieHotel", $obj->getCategorieHotel());
		$q->bindValue(":adresseHotel", $obj->getAdresseHotel());
		$q->bindValue(":villeHotel", $obj->getVilleHotel());
		$q->bindValue(":numChambre", $obj->getNumChambre());
		$q->bindValue(":typeChambre", $obj->getTypeChambre());
		$q->bindValue(":capaciteChambre", $obj->getCapaciteChambre());
		$q->bindValue(":idChambre", $obj->getIdChambre());
		$q->execute();
	}

	public static function update(Stationchambre $obj)
	{
 		$db=DbConnect::getDb();
		$q=$db->prepare("UPDATE Stationchambre SET nomStation=:nomStation,nomHotel=:nomHotel,categorieHotel=:categorieHotel,adresseHotel=:adresseHotel,villeHotel=:villeHotel,numChambre=:numChambre,typeChambre=:typeChambre,capaciteChambre=:capaciteChambre,idChambre=:idChambre WHERE nomStation=:nomStation");
		$q->bindValue(":nomStation", $obj->getNomStation());
		$q->bindValue(":nomHotel", $obj->getNomHotel());
		$q->bindValue(":categorieHotel", $obj->getCategorieHotel());
		$q->bindValue(":adresseHotel", $obj->getAdresseHotel());
		$q->bindValue(":villeHotel", $obj->getVilleHotel());
		$q->bindValue(":numChambre", $obj->getNumChambre());
		$q->bindValue(":typeChambre", $obj->getTypeChambre());
		$q->bindValue(":capaciteChambre", $obj->getCapaciteChambre());
		$q->bindValue(":idChambre", $obj->getIdChambre());
		$q->execute();
	}
	public static function delete(Stationchambre $obj)
	{
 		$db=DbConnect::getDb();
		$db->exec("DELETE FROM Stationchambre WHERE nomStation=" .$obj->getNomStation());
	}
	public static function findById($id)
	{
 		$db=DbConnect::getDb();
		$id = (int) $id;
		$q=$db->query("SELECT * FROM Stationchambre WHERE nomStation =".$id);
		$results = $q->fetch(PDO::FETCH_ASSOC);
		if($results != false)
		{
			return new Stationchambre($results);
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
		$q = $db->query("SELECT * FROM Stationchambre");
		while($donnees = $q->fetch(PDO::FETCH_ASSOC))
		{
			if($donnees != false)
			{
				$liste[] = new Stationchambre($donnees);
			}
		}
		return $liste;
	}
}