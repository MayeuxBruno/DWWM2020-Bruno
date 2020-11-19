<?php

class ReservationsManager 
{
	public static function add(Reservations $obj)
	{
 		$db=DbConnect::getDb();
		$q=$db->prepare("INSERT INTO Reservations (dateReservationSejour,dateDebutSejour,dateFinSejour,prixSejour,arrhesSejour,idClient,IdChambre,archive) VALUES (:dateReservationSejour,:dateDebutSejour,:dateFinSejour,:prixSejour,:arrhesSejour,:idClient,:IdChambre,:archive)");
		$q->bindValue(":dateReservationSejour", $obj->getDateReservationSejour());
		$q->bindValue(":dateDebutSejour", $obj->getDateDebutSejour());
		$q->bindValue(":dateFinSejour", $obj->getDateFinSejour());
		$q->bindValue(":prixSejour", $obj->getPrixSejour());
		$q->bindValue(":arrhesSejour", $obj->getArrhesSejour());
		$q->bindValue(":idClient", $obj->getIdClient());
		$q->bindValue(":IdChambre", $obj->getIdChambre());
		$q->bindValue(":archive", $obj->getArchive());
		$q->execute();
	}

	public static function update(Reservations $obj)
	{
 		$db=DbConnect::getDb();
		$q=$db->prepare("UPDATE Reservations SET idReservation=:idReservation,dateReservationSejour=:dateReservationSejour,dateDebutSejour=:dateDebutSejour,dateFinSejour=:dateFinSejour,prixSejour=:prixSejour,arrhesSejour=:arrhesSejour,idClient=:idClient,IdChambre=:IdChambre,archive=:archive WHERE idReservation=:idReservation");
		$q->bindValue(":idReservation", $obj->getIdReservation());
		$q->bindValue(":dateReservationSejour", $obj->getDateReservationSejour());
		$q->bindValue(":dateDebutSejour", $obj->getDateDebutSejour());
		$q->bindValue(":dateFinSejour", $obj->getDateFinSejour());
		$q->bindValue(":prixSejour", $obj->getPrixSejour());
		$q->bindValue(":arrhesSejour", $obj->getArrhesSejour());
		$q->bindValue(":idClient", $obj->getIdClient());
		$q->bindValue(":IdChambre", $obj->getIdChambre());
		$q->bindValue(":archive", $obj->getArchive());
		$q->execute();
	}
	public static function delete(Reservations $obj)
	{
 		$db=DbConnect::getDb();
		$db->exec("DELETE FROM Reservations WHERE idReservation=" .$obj->getIdReservation());
	}
	public static function findById($id)
	{
 		$db=DbConnect::getDb();
		$id = (int) $id;
		$q=$db->query("SELECT * FROM Reservations WHERE idReservation =".$id);
		$results = $q->fetch(PDO::FETCH_ASSOC);
		if($results != false)
		{
			return new Reservations($results);
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
		$q = $db->query("SELECT * FROM Reservations");
		while($donnees = $q->fetch(PDO::FETCH_ASSOC))
		{
			if($donnees != false)
			{
				$liste[] = new Reservations($donnees);
			}
		}
		return $liste;
	}
}