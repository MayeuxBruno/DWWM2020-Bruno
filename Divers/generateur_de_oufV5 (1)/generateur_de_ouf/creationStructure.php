<?php 

function creationStructure($path, $nomProjet, $nomDB, $repository, $tables)
{
        // CREATION DES DIFFERENTS DOSSIERS DU PROJET WEB
        mkdir($path . '/' . $nomProjet, 0777, true);
        mkdir($path . '/' . $nomProjet . '/IMG', 0777, true);
        mkdir($path . '/' . $nomProjet . '/DOCS', 0777, true);
        mkdir($path . '/' . $nomProjet . '/HTML', 0777, true);
        mkdir($path . '/' . $nomProjet . '/CSS', 0777, true);
        mkdir($path . '/' . $nomProjet . '/JS', 0777, true);
        mkdir($path . '/' . $nomProjet . '/PHP', 0777, true);
        mkdir($path . '/' . $nomProjet . '/SQL', 0777, true);
        mkdir($path . '/' . $nomProjet . '/PHP' . '/MODEL', 0777, true);
        mkdir($path . '/' . $nomProjet . '/PHP' . '/VIEW', 0777, true);
        mkdir($path . '/' . $nomProjet . '/PHP' . '/CONTROLLER', 0777, true);
        mkdir($path . '/' . $nomProjet . '/PHP' . '/MODEL' . '/TESTMANAGER', 0777, true);
    
        // CREATION DES DIFFERENTS FICHIERS DU PROJET WEB
        $HTML_file = fopen($path . '/' . $nomProjet . '/HTML/' . 'Index.html', "w");
        $CSS_file = fopen($path . '/' . $nomProjet . '/CSS/' . 'Style.css', "w");
        $JS_file = fopen($path . '/' . $nomProjet . '/JS/' . 'Script.js', "w");
        $GENERAL_INDEX_file = fopen($path . '/' . $nomProjet . '/' . 'Index.php', "w");
        $VIEW_HEADPHP_file = fopen($path . '/' . $nomProjet .'/PHP' .'/VIEW/' . 'Head.php', "w");
        $DBCONNECT_MODEL_file = fopen($path . '/' . $nomProjet .'/PHP' .'/MODEL/' . 'DbConnect.Class.php', "w");
        $SQL_file = fopen($path.'/' . $nomProjet . '/SQL/' . 'Script.sql', "w");
        $VIEW_NAVPHP_file=fopen($path . '/' . $nomProjet .'/PHP' .'/VIEW/' . 'Nav.php', "w");
        $VIEW_HEADERPHP_file=fopen($path . '/' . $nomProjet .'/PHP' .'/VIEW/' . 'Header.php', "w");
        $VIEW_FOOTERPHP_file=fopen($path . '/' . $nomProjet .'/PHP' .'/VIEW/' . 'Footer.php', "w");
        $OUTILS_GENERAL_file = fopen($path.'/' . $nomProjet . '/' . 'Outils.php', "w");
        $PARAMETRES_file=fopen($path.'/' . $nomProjet . '/' . 'Parametres.ini', "w");
        $CONTROLLER_PARAMETRESCLASS_file = fopen($path . '/' . $nomProjet .'/PHP' .'/CONTROLLER/' . 'Parametres.Class.php', "w");

        // INSERTION DES FICHIERS DE PROTECTIONS DE NIVEAU 1
        $IMG_security = fopen($path . '/' . $nomProjet . '/IMG/' . 'index.php', "w");
        $DOCS_security = fopen($path . '/' . $nomProjet . '/DOCS/' . 'index.php', "w");
        $HTML_security = fopen($path . '/' . $nomProjet . '/HTML/' . 'index.php', "w");
        $CSS_security = fopen($path . '/' . $nomProjet . '/CSS/' . 'index.php', "w");
        $JS_security = fopen($path . '/' . $nomProjet . '/JS/' . 'index.php', "w");
        $PHP_security = fopen($path . '/' . $nomProjet . '/PHP/' . 'index.php', "w");
        $MODEL_security = fopen($path . '/' . $nomProjet . '/PHP' . '/MODEL/' . 'index.php', "w");
        $VIEW_security = fopen($path . '/' . $nomProjet . '/PHP' . '/VIEW/' . 'index.php', "w");
        $CONTROLLER_security = fopen($path . '/' . $nomProjet . '/PHP' . '/CONTROLLER/' . 'index.php', "w");
        $SQL_security = fopen($path . '/' . $nomProjet . '/SQL/' . 'index.php', "w");
    
        // MESSAGE DE CONCLUSION DU PROGRAMME
        echo is_dir($repository) ? "Le dossier a été crée avec succès.\n" : "Le dossier n'a pas été crée, un problème est survenu, verifiez le répertoire de destination.\n";
    
    
    // CREATION DES VARIABLES PERMETTANT D'ECRIRE DANS LES FICHIERS CORRESPONDANTS
    if (is_dir($repository)) {
        $HTML_snippet = '<!doctype html>' . "\n"
            . '<html lang="fr">' . "\n"
            . '<head>' . "\n"
            . "\t" . '<meta charset="utf-8">' . "\n"
            . "\t" . '<title>Titre de la page</title>' . "\n"
            . "\t" . '<link rel="stylesheet" href="../CSS/style.css">' . "\n"
            . "\t" . '<script src="../JS/script.js"></script>' . "\n"
            . '</head>' . "\n"
            . '<body>' . "\n"
            . "\t" . '<header></header>' . "\n"
            . "\t" . '<nav></nav>' . "\n"
            . "\t" . '<!-- Le reste du contenu -->' . "\n"
            . "\t" . '<footer></footer>' . "\n"
            . '</body>' . "\n"
            . '</html>' . "\n";
    
        $CSS_snippet = '/****  GENERAL ****/' . "\n"
            . 'html, body {' . "\n"
            . "\t" . 'margin : 0;' . "\n"
            . "\t" . 'padding : 0;' . "\n"
            . '}' . "\n\n"
            . 'div, header, footer, nav, article {' . "\n"
            . "\t" . 'display : flex;' . "\n"
            . "\t" . 'flex : 1;' . "\n"
            . '}' . "\n\n"
            . 'img, video {' . "\n"
            . "\t" . 'width : 100%;' . "\n"
            . '}' . "\n\n";
    
        $ERROR_snippet = '<?php // fichier de protection des dossiers. ?>' . "\n" . '<h1>ERROR 404 NOT FOUND<h1>';
    
        $HEADPHP_snippet = 
            '<!doctype html>' . "\n"
            . '<html lang="fr">' . "\n"
            . '<head>' . "\n"
            . "\t" . '<meta charset="utf-8">' . "\n"
            . "\t" . '<title><?php echo $titre ?></title>' . "\n"
            . "\t" . '<link rel="stylesheet" href="./CSS/style.css">' . "\n"
            . "\t" . '<script src="./JS/script.js"></script>' . "\n"
            . '</head>' . "\n";
    
        $INDEXPHP_snippet = '<?php'
            . "\n\n" . 'require("./Outils.php");'
            . "\n\n" . 'Parametres::init();'
            . "\n\n" . 'DbConnect::init();'
            . "\n\n" . 'session_start();'
            . "\n\n" . '/******Les langues******/'
            . "\n" . '/***On récupère la langue***/'
            . "\n" . 'if (isset($_GET[\'lang\']))'
            . "\n" . '{'
            . "\n\t" . '$_SESSION[\'lang\'] = $_GET[\'lang\'];'
            . "\n" . '}'
            . "\n\n" .'/***On récupère la langue de la session/FR par défaut***/'
            . "\n" . '$lang=isset($_SESSION[\'lang\']) ? $_SESSION[\'lang\'] : \'FR\';'
            . "\n" . '/******Fin des langues******/'
            . "\n\n" .'$routes=['
            . "\n\t" .'"default"=>["PHP/VIEW/","accueil","Accueil"],';
                foreach($tables as $unetable) 
                {
                    $INDEXPHP_snippet .= "\n\t".'"Test'.$unetable.'Manager"=>["PHP/MODEL/TESTMANAGER/","Test'.$unetable.'Manager","Test de '.$unetable.'"],';
                }
            $INDEXPHP_snippet .="\n".'];'
            . "\n\n" .'if(isset($_GET["page"]))'
            . "\n" .'{'
            . "\n\n\t" .'$page=$_GET["page"];'
            . "\n\n\t" .'if(isset($routes[$page]))'
            . "\n\t" .'{'
            . "\n\t\t" .'AfficherPage($routes[$page]);'
            . "\n\t" .'}'
            . "\n\t" .'else'
            . "\n\t" .'{'
            . "\n\t\t" .'AfficherPage($routes["default"]);'
            . "\n\t" .'}'
            . "\n" .'}'
            . "\n" .'else'
            . "\n" .'{'
            . "\n\t" .'AfficherPage($routes["default"]);'
            . "\n" .'}';
            
        $DBCONNECT_snippet = '<?php'
        ."\n".'class DbConnect{'
        ."\n\t".'private static $db;'
        ."\n\n\t".'public static function getDb()'
        ."\n\t".'{'
        ."\n\t\t".'return DbConnect::$db;'
        ."\n\t".'}'
        ."\n\n\t".'public static function init()'
        ."\n\t".'{'
        ."\n\t\t".'try {'
        ."\n\t\t\t".'self::$db= new PDO ( \'mysql:host=\'. Parametres::getHost().\';port=\'. Parametres::getPort() .\';dbname=\'. Parametres::getDbname().\';charset=utf8\', Parametres::getLogin(), Parametres::getPwd());'
        ."\n\t\t".'}'
        ."\n\t\t".'catch (Exception $e)'
        ."\n\t\t".'{'
        ."\n\t\t\t".'die(\'Erreur :\'. $e->getMessage());'
        ."\n\t\t".'}'
        ."\n\t".'}'
        ."\n".'}';

        $OUTILS_snippet = '<?php'
        ."\n".'function ChargerClasse($classe)'
        ."\n".'{'
        ."\n\t".'if (file_exists("PHP/CONTROLLER/" . $classe . ".Class.php"))'
        ."\n\t".'{'
        ."\n\t\t".'require "PHP/CONTROLLER/" . $classe . ".Class.php";'
        ."\n\t".'}'
        ."\n\t".'if (file_exists("PHP/MODEL/" . $classe . ".Class.php"))'
        ."\n\t".'{'
        ."\n\t\t".'require "PHP/MODEL/" . $classe . ".Class.php";'
        ."\n\t".'}'
        ."\n".'}'
        ."\n".'spl_autoload_register("ChargerClasse");'
        ."\n\n".'function crypte($mot)'
        ."\n".'{'
        ."\n\t".'return md5(md5($mot));'
        ."\n".'}' 
        ."\n\n".'function texte($codeTexte)'
        ."\n".'{'
        ."\n\t".'global $lang; //on appel la variable globale'
        ."\n\t".'return TexteManager::findByCodes($lang, $codeTexte);'
        ."\n".'}'
        ."\n\n".'function afficherPage($page)'
        ."\n".'{'
        ."\n\t".'$chemin=$page[0];'
        ."\n\t".'$nom=$page[1];'
        ."\n\t".'$titre=$page[2];'
        ."\n\n\t".'include \'PHP/VIEW/Head.php\';'
        ."\n\t".'include \'PHP/VIEW/Header.php\';'
        ."\n\t".'include \'PHP/VIEW/Nav.php\';'
        ."\n\t".'include $chemin.$nom.\'.php\';'
        ."\n\t".'include \'PHP/VIEW/Footer.php\';'
        ."\n".'}';

        $PARAMETRES_snippet = 'Host:localhost'
        ."\r\n".'Port:3306'
        ."\r\n".'DbName:'.$nomDB
        ."\r\n".'Login:root'
        ."\r\n".'Pwd:'
        ."\r\n";

        $PARAMETRESCLASS_snippet='<?php'
        ."\n".'class Parametres'
        ."\n".'{'
        ."\n\t".'private static $_host;'
        ."\n\t".'private static $_port;'
        ."\n\t".'private static $_dbname;'
        ."\n\t".'private static $_login;'
        ."\n\t".'private static $_pwd;'
        ."\n\n\t".'static function getHost() /**GET TOAST LEL**/'
        ."\n\t".'{'
        ."\n\t\t".'return self::$_host;'
        ."\n\t".'}'
        ."\n\n\t".'static function getPort() /**GET PORC LEL**/'
        ."\n\t".'{'
        ."\n\t\t".'return self::$_port;'
        ."\n\t".'}'
        ."\n\n\t".'static function getDbname() /**Qu\'est ce qui est jaune et qui attends ?**/'
        ."\n\t".'{'
        ."\n\t\t".'return self::$_dbname;'
        ."\n\t".'}'
        ."\n\n\t".'static function getLogin() /**Jaune a temps**/'
        ."\n\t".'{'
        ."\n\t\t".'return self::$_login;'
        ."\n\t".'}'
        ."\n\n\t".'static function getPwd() /**POWNED**/'
        ."\n\t".'{'
        ."\n\t\t".'return self::$_pwd;'
        ."\n\t".'}'
        ."\n\n\t".'static function init() /**LES ESQUIMAUX LOL (inuit)**/'
        ."\n\t".'{'
        ."\n\t\t".'if (file_exists("parametres.ini"))'
        ."\n\t\t".'{'
        ."\n\t\t\t".'$fp=fopen("parametres.ini","r");'
        ."\n\t\t\t".'while(!feof($fp)) /**WHILE SMITH**/'
        ."\n\t\t\t".'{'
        ."\n\t\t\t\t".'$ligne=fgets($fp,4906);'
        ."\n\t\t\t\t".'if ($ligne)'
        ."\n\t\t\t\t".'{'
        ."\n\t\t\t\t\t".'$info=explode(":",$ligne);'
        ."\n\t\t\t\t\t".'$param[]=substr($info[1],0,strlen($info[1])-2);'
        ."\n\t\t\t\t".'}'
        ."\n\t\t\t".'}'
        ."\n\t\t\t".'self::$_host=$param[0];'
        ."\n\t\t\t".'self::$_port=$param[1];'
        ."\n\t\t\t".'self::$_dbname=$param[2];'
        ."\n\t\t\t".'self::$_login=$param[3];'
        ."\n\t\t\t".'self::$_pwd=$param[4];'
        ."\n\t\t".'}'
        ."\n\t".'}'
        ."\n".'}';

    // ECRITURE DU TEXTE CONTENU DANS LES VARIABLES CI-DESSUS
        fputs($HTML_file, $HTML_snippet);
        fputs($CSS_file, $CSS_snippet);
        fputs($GENERAL_INDEX_file, $INDEXPHP_snippet);
        fputs($VIEW_HEADPHP_file, $HEADPHP_snippet);
        fputs($DBCONNECT_MODEL_file,$DBCONNECT_snippet);
        fputs($OUTILS_GENERAL_file,$OUTILS_snippet);
        fputs($CONTROLLER_PARAMETRESCLASS_file,$PARAMETRESCLASS_snippet);
        fputs($PARAMETRES_file,$PARAMETRES_snippet);
    
    // ECRITURE DES PAGES ERROR 404 NOT FOUND DNAS LES FICHIERS DE SECURITE DE NIVEAU 1
        fputs($IMG_security, $ERROR_snippet);
        fputs($HTML_security, $ERROR_snippet);
        fputs($CSS_security, $ERROR_snippet);
        fputs($JS_security, $ERROR_snippet);
        fputs($PHP_security, $ERROR_snippet);
        fputs($MODEL_security, $ERROR_snippet);
        fputs($VIEW_security, $ERROR_snippet);
        fputs($CONTROLLER_security, $ERROR_snippet);
        fputs($SQL_security, $ERROR_snippet);
    
    } else {
        echo "Un problème est survenu lors de l'insertion du texte dans les différents dossiers.";
    }
}
