<?php

class ClientsManager 
{
	public static function add(Clients $obj)
	{
 		$db=DbConnect::getDb();
		$q=$db->prepare("INSERT INTO Clients (idClient,nomClient,prenomClient,adresseClient,villeClient) VALUES (:idClient,:nomClient,:prenomClient,:adresseClient,:villeClient)");
		$q->bindValue(":idClient", $obj->getIdClient());
		$q->bindValue(":nomClient", $obj->getNomClient());
		$q->bindValue(":prenomClient", $obj->getPrenomClient());
		$q->bindValue(":adresseClient", $obj->getAdresseClient());
		$q->bindValue(":villeClient", $obj->getVilleClient());
		$q->execute();
	}

	public static function update(Clients $obj)
	{
 		$db=DbConnect::getDb();
		$q=$db->prepare("UPDATE Clients SET nomClient=:nomClient,prenomClient=:prenomClient,adresseClient=:adresseClient,villeClient=:villeClient) WHERE idClient=:idClient");
		$q->bindValue(":nomClient", $obj->getNomClient());
		$q->bindValue(":prenomClient", $obj->getPrenomClient());
		$q->bindValue(":adresseClient", $obj->getAdresseClient());
		$q->bindValue(":villeClient", $obj->getVilleClient());
		$q->execute();
	}
	public static function delete(Clients $obj)
	{
 		$db=DbConnect::getDb();
		$db->exec("DELETE FROM Clients WHERE idClient=" .$obj->getIdClient());
	}
}