<?php
class ClientsManager
{
    public static function add(Clients $obj )
    {
        $db = DBConnect::getDB();
        $q = $db->prepare("INSERT INTO Clients (nom,prenom,age) VALUES (:nom,:prenom,:age)");
        $q->bindValue(":nom",$obj->getNom());
        $q->bindValue(":prenom",$obj->getPrenom());
        $q->bindValue(":age",$obj->getAge());
        $q->execute();
    }

    public static function getList()
    {
        $db = DbConnect::getDb();
        $liste=[];
        $q = $db->query("SELECT * FROM Clients");
        while ($donnees=$q->fetch(PDO::FETCH_ASSOC))
        {
            if ($donnees != false)
            {
                $liste[] = new Clients ($donnees);
            }
        }
        return $liste;
    }

    public static function delete(Clients $obj)
    {
        $db=DbConnect::getDb();
        $db->exec("DELETE FROM Clients WHERE idClient=".$obj->getIdClient());
    }

    public static function findById($id)
    {
        $db = DbConnect::getDb();
        $id = (int) $id;
        $q=$db->query("SELECT * FROM Clients WHERE idClient=".$id);
        $results = $q->fetch(PDO::FETCH_ASSOC);
        if ($results != false)
        {
            return new Clients ($results);
        }
        else
        {
            return false;
        }
    }

    public static function update(Clients $obj)
    {
        $db=DbConnect::getDb();
        $q=$db->prepare("UPDATE Clients SET nom=:nom, prenom=:prenom, age=:age WHERE idClient=:idClient");
        $q->bindValue(":nom",$obj->getNom());
        $q->bindValue(":prenom",$obj->getPrenom());
        $q->bindValue(":age",$obj->getAge());
        $q->bindValue(":idClient",$obj->getIdClient());
        $q->execute();
    }
}