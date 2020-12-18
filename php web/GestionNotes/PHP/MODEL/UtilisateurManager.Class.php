<?php

class UtilisateurManager 
{
	public static function add(Utilisateur $obj)
	{
 		$db=DbConnect::getDb();
		$q=$db->prepare("INSERT INTO Utilisateurs (Login,NomUtilisateur,PrenomUtilisateur,MotDePasse,Role,IdMatiere) VALUES (:Login,:NomUtilisateur,:PrenomUtilisateur,:MotDePasse,:Role,:IdMatiere)");
		$q->bindValue(":Login", $obj->getLogin());
		$q->bindValue(":NomUtilisateur", $obj->getNomUtilisateur());
		$q->bindValue(":PrenomUtilisateur", $obj->getPrenomUtilisateur());
		$q->bindValue(":MotDePasse", $obj->getMotDePasse());
		$q->bindValue(":Role", $obj->getRole());
		$q->bindValue(":IdMatiere", $obj->getIdMatiere());
		$q->execute();
	}

	public static function update(Utilisateur $obj)
	{
 		$db=DbConnect::getDb();
		$q=$db->prepare("UPDATE Utilisateurs SET idUtilisateur=:idUtilisateur,Login=:Login,NomUtilisateur=:NomUtilisateur,PrenomUtilisateur=:PrenomUtilisateur,MotDePasse=:MotDePasse,Role=:Role,IdMatiere=:IdMatiere WHERE idUtilisateur=:idUtilisateur");
		$q->bindValue(":idUtilisateur", $obj->getIdUtilisateur());
		$q->bindValue(":Login", $obj->getLogin());
		$q->bindValue(":NomUtilisateur", $obj->getNomUtilisateur());
		$q->bindValue(":PrenomUtilisateur", $obj->getPrenomUtilisateur());
		$q->bindValue(":MotDePasse", $obj->getMotDePasse());
		$q->bindValue(":Role", $obj->getRole());
		$q->bindValue(":IdMatiere", $obj->getIdMatiere());
		$q->execute();
	}
	public static function delete(Utilisateur $obj)
	{
 		$db=DbConnect::getDb();
		$db->exec("DELETE FROM Utilisateurs WHERE idUtilisateur=" .$obj->getIdUtilisateur());
	}
	public static function findById($id)
	{
 		$db=DbConnect::getDb();
		$id = (int) $id;
		$q=$db->query("SELECT * FROM Utilisateurs WHERE idUtilisateur =".$id);
		$results = $q->fetch(PDO::FETCH_ASSOC);
		if($results != false)
		{
			return new Utilisateur($results);
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
		$q = $db->query("SELECT * FROM Utilisateurs");
		while($donnees = $q->fetch(PDO::FETCH_ASSOC))
		{
			if($donnees != false)
			{
				$liste[] = new Utilisateur($donnees);
			}
		}
		return $liste;
	}
	public static function getByPseudo($pseudo)
	{
		$db=DbConnect::getDb();
		if (!in_array(";",str_split( $pseudo))) // s'il n'y a pas de ; , je lance la requete
        {
			$q=$db->query("SELECT * FROM utilisateurs WHERE Login =".'"'.$pseudo.'"');
			$results = $q->fetch(PDO::FETCH_ASSOC);
			if($results != false)
			{
				return new Utilisateur($results);
			}
			else
			{
				return false;
			}
		}
		else
        {
            return false;
        }
    }
}