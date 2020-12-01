<?php

class DbConnect{
    private static $db;

    public static function getDb()
    {
        return DbConnect::$db;
    }

    public static function init()
    {
        try {
            //self::$db=new PDO ('mysql:host=localhost;dbname=testconnexion;charset=utf8','root',''); 
            //self::$db = new PDO('mysql:host=' . Parametre::getHost() . ';port=' . Parametre::getPort() . ';dbname=' . Parametre::getDbname() . ';charset=utf8', Parametre::getLogin(), Parametre::getPwd());
            var
        }
        catch (Exception $e)
        {
            die('Erreur : '.$e->getMessage());
        }
    }
}