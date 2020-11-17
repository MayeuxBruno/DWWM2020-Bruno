<?php

class ChambresManager 
{
	public static function add(Chambres $obj)
	{
 		$db=DbConnect::getDb();
		$q=$db->prepare("INSERT INTO Chambres (IdChambre,numChambre,typeChambre,capaciteChambre,idHotel) VALUES (:IdChambre,:numChambre,:typeChambre,:capaciteChambre,:idHotel)");
		$q->bindValue(":IdChambre", $obj->getIdChambre());
		$q->bindValue(":numChambre", $obj->getNumChambre());
		$q->bindValue(":typeChambre", $obj->getTypeChambre());
		$q->bindValue(":capaciteChambre", $obj->getCapaciteChambre());
		$q->bindValue(":idHotel", $obj->getIdHotel());
		$q->execute();
	}

	public static function update(Chambres $obj)
	{
 		$db=DbConnect::getDb();
		$q=$db->prepare("UPDATE Chambres SET numChambre=:numChambre,typeChambre=:typeChambre,capaciteChambre=:capaciteChambre,idHotel=:idHotel) WHERE IdChambre=:IdChambre");
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
}