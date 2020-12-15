<?php
class Parametres
{
	private static $_host;
	private static $_port;
	private static $_dbname;
	private static $_login;
	private static $_pwd;

	static function getHost() /**GET TOAST LEL**/
	{
		return self::$_host;
	}

	static function getPort() /**GET PORC LEL**/
	{
		return self::$_port;
	}

	static function getDbname() /**Qu'est ce qui est jaune et qui attends ?**/
	{
		return self::$_dbname;
	}

	static function getLogin() /**Jaune a temps**/
	{
		return self::$_login;
	}

	static function getPwd() /**POWNED**/
	{
		return self::$_pwd;
    }
    
    public static function init()
    {
//on récupere les paramètres de connection base de données

        if (file_exists("parametres.ini"))
        {
            //ouverture du fichier en lecture seule
            $fp = fopen("parametres.ini", "r");
            //boucle jusqu'à la fin du fichier
            while (!feof($fp))
            {
                //lecture d'une ligne, le contenu est stocké dans un tableau
                $ligne = fgets($fp, 4096);
                if ($ligne) //$ligne = false, si la ligne est vide. cela evite de planter s'il y a des passages à la lignes en fin de fichier
                {
                    //on garde la partie utile (c'est a dire le parametre)
                    $info = explode(":", $ligne);
                    // on enleve le caractere espace à la fin
                    $param[] = substr($info[1], 0, strlen($info[1]) - 2);
                }
            }
            /*self::$_host = decrypte($param[0]);
            self::$_port = decrypte($param[1]);
            self::$_dbname = decrypte($param[2]);
            self::$_login = decrypte($param[3]);
            self::$_pwd = decrypte($param[4]);*/

            /* Si parametres.ini non crypte*/
            self::$_host=$param[0];
			self::$_port=$param[1];
			self::$_dbname=$param[2];
			self::$_login=$param[3];
			self::$_pwd=$param[4];
        }
    }

}
