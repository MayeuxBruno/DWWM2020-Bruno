<?php
class UsersManager 
{
	public static function add(Users $obj)
	{
 		$db=DbConnect::getDb();
		$q=$db->prepare("INSERT INTO users (idUser, nomUser, prenomUser, pseudoUser, mailUser, passwordUser, roleUser) VALUES 
        (:idUser,:nomUser,:prenomUser,:pseudoUser,:mailUser,:passwordUser,:roleUser)");
        $q->bindValue(":idUser", $obj->getIdUser());
        $q->bindValue(":nomUser", $obj->getNomUser());
        $q->bindValue(":prenomUser", $obj->getPrenomUser());
        $q->bindValue(":pseudoUser", $obj->getPseudoUser());
        $q->bindValue(":mailUser", $obj->getMailUser());
		$q->bindValue(":passwordUser",$obj->getPasswordUser());
		$q->bindValue(":roleUser", $obj->getRoleUser());
		$q->execute();
	}

	public static function update(Users $obj)
	{
 		$db=DbConnect::getDb();
		$q=$db->prepare("UPDATE users SET idUser=:idUser,nomUser=:nomUser,prenomUser=:prenomUser,pseudoUser=:pseudoUser,passwordUser=:passwordUser,roleUser=:roleUser
        WHERE idUser=:idUser");
		$q->bindValue(":idUser", $obj->getIdUser());
        $q->bindValue(":nomUser", $obj->getNomUser());
        $q->bindValue(":prenomUser", $obj->getPrenomUser());
        $q->bindValue(":pseudoUser", $obj->getPseudoUser());
        $q->bindValue(":mailUser", $obj->getMailUser());
		$q->bindValue(":passwordUser", $obj->getPasswordUser());
		$q->bindValue(":roleUser", $obj->getRoleUser());
		$q->execute();
	}
	public static function delete(Users $obj)
	{
 		$db=DbConnect::getDb();
		$db->exec("DELETE FROM users WHERE idUser=" .$obj->getIdUser());
    }
    
	public static function findById($id)
	{
 		$db=DbConnect::getDb();
		$id = (int) $id;
		$q=$db->query("SELECT * FROM users WHERE idUser =".$id);
		$results = $q->fetch(PDO::FETCH_ASSOC);
		if($results != false)
		{
			return new Users($results);
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
		$q = $db->query("SELECT * FROM users");
		while($donnees = $q->fetch(PDO::FETCH_ASSOC))
		{
			if($donnees != false)
			{
				$liste[] = new Users($donnees);
			}
		}
		return $liste;
	}

	public static function findByPseudo($pseudo)
	{
		$db=DbConnect::getDb();
		$q=$db->query("SELECT * FROM users WHERE pseudoUser =".'"'.$pseudo.'"');
		$results = $q->fetch(PDO::FETCH_ASSOC);
		if($results != false)
		{
			return new Users($results);
		}
		else
		{
			return false;
		}
    }
}