<?php
class Parametres
{
	rivate static $_host;
	rivate static $_port;
	rivate static $_dbname;
	rivate static $_login;
	rivate static $_pwd;

	tatic function getHost() /**GET TOAST LEL**/
	
	return self::$_host;
	

	tatic function getPort() /**GET PORC LEL**/
	
	return self::$_port;
	

	tatic function getDbname() /**Qu'est ce qui est jaune et qui attends ?**/
	
	return self::$_dbname;
	

	tatic function getLogin() /**Jaune a temps**/
	
	return self::$_login;
	

	tatic function getPwd() /**POWNED**/
	
	return self::$_pwd;
	
    public static function init()
    {
//on récupere les paramètres de connection base de données

        if (file_exists("parametre.ini"))
        {
            //ouverture du fichier en lecture seule
            $fp = fopen("parametre.ini", "r");
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
            self::$host = decrypte($param[0]);
            self::$port = decrypte($param[1]);
            self::$dbname = decrypte($param[2]);
            self::$login = decrypte($param[3]);
            self::$pwd = decrypte($param[4]);
        }
    }

}
