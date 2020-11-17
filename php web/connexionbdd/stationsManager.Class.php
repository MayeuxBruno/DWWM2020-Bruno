<?php

class StationsManager 
{
	public static function add(Stations $obj)
	{
 		$db=DbConnect::getDb();
		$q=$db->prepare("INSERT INTO Stations (idStation,nomStation,altitudeStation) VALUES (:idStation,:nomStation,:altitudeStation)");
		$q->bindValue(":idStation", $obj->getIdStation());
		$q->bindValue(":nomStation", $obj->getNomStation());
		$q->bindValue(":altitudeStation", $obj->getAltitudeStation());
		$q->execute();
	}

	public static function update(Stations $obj)
	{
 		$db=DbConnect::getDb();
		$q=$db->prepare("UPDATE Stations SET nomStation=:nomStation,altitudeStation=:altitudeStation) WHERE idStation=:idStation");
		$q->bindValue(":nomStation", $obj->getNomStation());
		$q->bindValue(":altitudeStation", $obj->getAltitudeStation());
		$q->execute();
	}
	public static function delete(Stations $obj)
	{
 		$db=DbConnect::getDb();
		$db->exec("DELETE FROM Stations WHERE idStation=" .$obj->getIdStation());
	}
}