<?php 
class ProduitdManager
{
    public static function add(Produits $obj)
    {
        $db = DbConnect::getDb();
        $q=$db->prepare("INSERT INTO Produits(libelleProduit,prix,dateDePeremption) VALUES (:libelleProduit,:prix,::dateDePeremption)");
        $q->bindValue(":libelleProduit",$obj->getLibelleProduit());
        $q->bindValue(":prix",$obj->getPrix());
        $q->bingValue(":dateDePeremption",$obj->getDateDePeremption());
        $q->execute();
    }

    public static function update (Produits $obj)
    {
        $db = DbConnect::getDb();
        $q = $db->prepare("UPDATE Produits SET libelleProduit=:libelleProduit,prix=:prix,dateDePeremption=:dateDePeremption WHERE idProduit=:idProduit");
        $q->bindValue(":libelleProduit",$obj->getLibelleProduit());
        $q->bindValue(":prix",$obj->prix());
        $q->bindValue(":dateDePeremption",$obj->getDateDePeremption());
        $q->bindValue(":idProduit",$obj->getIdProduit());
        $q->execute();
    }

    public static function delete (Produits $obj)
    {
        $db = DbConnect::getDb();
        $db->exec("DELETE FROM Produits WHERE idProduit=".$obj->getIdProduit());
    }

    public static function findById($id)
    {
        $db = DbConnect::getDb();
        $id = (int) $id;
        $q = $db->query("SELECT * FROM Produits WHERE idProduit=".$id);
        $results=$q->fetch(PDO::FEETCH_ASSOC);
        if ($result != false)
        {
            return new Produits($results);
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
        $q = $db->querry("SELECT * FROM Produits");
        while ($donnees = $q->fetch(P))
    }
}