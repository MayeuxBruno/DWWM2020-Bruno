<?php
class VehiculesManager 
{
	public static function add(Vehicules $obj)
	{
 		$db=DbConnect::getDb();
		$q=$db->prepare("INSERT INTO vehicules (idVehicule, noParc, marque,immat, modele, capacite) VALUES 
        (:idVehicule, :noParc, :marque,:immat, :modele, :capacite)");
        $q->bindValue(":idVehicule", $obj->getIdVehicule());
        $q->bindValue(":noParc", $obj->getNoParc());
        $q->bindValue(":marque", $obj->getMarque());
        $q->bindValue(":modele", $obj->getModele());
        $q->bindValue(":immat", $obj->getImmat());
        $q->bindValue(":capacite", $obj->getCapacite());
		$q->execute();
	}

	public static function update(Vehicules $obj)
	{
 		$db=DbConnect::getDb();
		$q=$db->prepare("UPDATE vehicules SET idVehicule=:idVehicule, noParc=:noParc, marque=:marque, modele=:modele,immat=:immat, capacite=:capacite
        WHERE idVehicule=:idVehicule");
		$q->bindValue(":idVehicule", $obj->getIdVehicule());
        $q->bindValue(":noParc", $obj->getNoParc());
        $q->bindValue(":marque", $obj->getMarque());
        $q->bindValue(":modele", $obj->getModele());
        $q->bindValue(":immat", $obj->getImmat());
        $q->bindValue(":capacite", $obj->getCapacite());
		$q->execute();
	}
	public static function delete(Vehicules $obj)
	{
 		$db=DbConnect::getDb();
		$db->exec("DELETE FROM vehicules WHERE idVehicule=" .$obj->getIdVehicule());
    }
    
	public static function findById($id)
	{
 		$db=DbConnect::getDb();
		$id = (int) $id;
		$q=$db->query("SELECT * FROM vehicules WHERE idVehicule =".$id);
		$results = $q->fetch(PDO::FETCH_ASSOC);
		if($results != false)
		{
			return new Vehicules($results);
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
		$q = $db->query("SELECT * FROM vehicules");
		while($donnees = $q->fetch(PDO::FETCH_ASSOC))
		{
			if($donnees != false)
			{
				$liste[] = new Vehicules($donnees);
			}
		}
		return $liste;
	}
}