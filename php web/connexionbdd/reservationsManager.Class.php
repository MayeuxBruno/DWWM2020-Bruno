<?php

class ReservationsManager 
{
	public static function add(Reservations $obj)
	{
 		$db=DbConnect::getDb();
		$q=$db->prepare("INSERT INTO Reservations (idReservation,dateReservationSejour,dateDebutSejour,dateFinSejour,prixSejour,arrhesSejour,idClient,IdChambre) VALUES (:idReservation,:dateReservationSejour,:dateDebutSejour,:dateFinSejour,:prixSejour,:arrhesSejour,:idClient,:IdChambre)");
		$q->bindValue(":idReservation", $obj->getIdReservation());
		$q->bindValue(":dateReservationSejour", $obj->getDateReservationSejour());
		$q->bindValue(":dateDebutSejour", $obj->getDateDebutSejour());
		$q->bindValue(":dateFinSejour", $obj->getDateFinSejour());
		$q->bindValue(":prixSejour", $obj->getPrixSejour());
		$q->bindValue(":arrhesSejour", $obj->getArrhesSejour());
		$q->bindValue(":idClient", $obj->getIdClient());
		$q->bindValue(":IdChambre", $obj->getIdChambre());
		$q->execute();
	}

	public static function update(Reservations $obj)
	{
 		$db=DbConnect::getDb();
		$q=$db->prepare("UPDATE Reservations SET dateReservationSejour=:dateReservationSejour,dateDebutSejour=:dateDebutSejour,dateFinSejour=:dateFinSejour,prixSejour=:prixSejour,arrhesSejour=:arrhesSejour,idClient=:idClient,IdChambre=:IdChambre) WHERE idReservation=:idReservation");
		$q->bindValue(":dateReservationSejour", $obj->getDateReservationSejour());
		$q->bindValue(":dateDebutSejour", $obj->getDateDebutSejour());
		$q->bindValue(":dateFinSejour", $obj->getDateFinSejour());
		$q->bindValue(":prixSejour", $obj->getPrixSejour());
		$q->bindValue(":arrhesSejour", $obj->getArrhesSejour());
		$q->bindValue(":idClient", $obj->getIdClient());
		$q->bindValue(":IdChambre", $obj->getIdChambre());
		$q->execute();
	}
	public static function delete(Reservations $obj)
	{
 		$db=DbConnect::getDb();
		$db->exec("DELETE FROM Reservations WHERE idReservation=" .$obj->getIdReservation());
	}
}