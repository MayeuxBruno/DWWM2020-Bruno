<?php

$nomDB="gestion_hotels";
$nomTable="reservations";
/********************************************/
/*****  CONNECTION A LA BASE DE DONNEES *****/
/********************************************/

try { // execute les instructions et rpère les erreurs
    $db = new PDO('mysql:host=localhost;dbname=baseproduits;charset=utf8', 'root', '');
}
catch (Exception $e) // si une erreur est levée, on agit en conséquence
{
    if ($e->getCode() == 1049)
    {
        echo "Base de données indisponible";
        die(); // permet d'arrêter l'execution
    }
    else if ($e->getCode() == 1045) // erreur identification
    {
        echo "La connexion a échouée";
        die();
    }
    else
    {
        die('Erreur : ' . $e->getMessage());
    }
}

echo "on est connecté à la base de données";

$requete = $db->query('SELECT TABLE_NAME,COLUMN_NAME FROM INFORMATION_SCHEMA.COLUMNS WHERE TABLE_SCHEMA="'.$nomDB.'" and TABLE_NAME="'.$nomTable.'"'); // $requete est un objet de type PDO_Statement
while ($donnees = $requete->fetch(PDO::FETCH_ASSOC)) // le while permet de boucler sur les enregistrements
// il s'arrete quand fetch renvoi false
{
   $colonne[]=$donnees["COLUMN_NAME"];
}

var_dump($colonne);

/********************************** GENERATION DE CLASSE ***********************************************/

/***
 * Generateur de classe prenant en charge l'héritage et les attributs statics
 * 09-10-2020 - MAYEUX Bruno
 */

 /**
 * Méthode qui crée l'entête de la classe
 * Prend en paramètre le nom de la classe, le nom de la classe mere le fichier
 * et un booleen indiquant si il y a un heritage 
 * dans lequel on crée la classe
 * 
 * @param String  $nom
 * @param String $mere
 * @param Resousce $fichier
 * @param Bool $herit
 * @return Void
 */
function genereEntete($nom,$fichier)
{
    $entete='<?php'."\n\nclass $nom ";
    $entete.="\n{\n\n";
    fputs($fichier,$entete); 
}

/**
 * Méthode qui crée l'affichage des attributs de la classe
 * Prend en paramètre le tableau d'attribut, le nombre d'attributs et le fichier 
 * dans lequel on crée la classe
 * 
 * @param Array  $tabAtt
 * @param Integer $nbAtt
 * @param Resousce $fichier
 * @return Array
 */
function affichageAttributs($tabAtt,$fichier)
{
    $sepAt="\t/*****************Attributs***************** */\n\n";  
    for($i=0;$i<count($tabAtt);$i++)
    {
            $sepAt.="\t".'private $_'.$tabAtt[$i].";\n";
    }
    fputs($fichier,$sepAt);
}

/**
 * Méthode qui crée l'affichage du constructeur de classe
 * Prend en paramètre le fichier dans lequel on crée la classe et
 * un booleen indiquant si il y a heritage
 * 
 * @param Bool $herit
 * @param Resousce $fichier
 * @return Void
 */
function genereConstruct($fichier)
{
    $cons= "\n\t/*****************Constructeur***************** */\n\n".
           "\t".'public function __construct(array $options = [])'."\n".
           "\t{\n ".
           "\t\tif (!empty(".'$options'.")) // empty : renvoi vrai si le tableau est vide\n".
           "\t\t{\n".
           "\t\t\t".'$this->hydrate($options);'."\n".
           "\t\t}\n".  
           "\t}\n".
           "\t".'public function hydrate($data)'."\n".
           "\t{\n ".
           "\t\t".'foreach ($data as $key => $value)'."\n".
           "\t\t{\n ".
           "\t\t\t".'$methode = "set" . ucfirst($key); //ucfirst met la 1ere lettre en majuscule'."\n". 
           "\t\t\t".'if (is_callable(([$this, $methode]))) // is_callable verifie que la methode existe'."\n". 
           "\t\t\t{\n".
           "\t\t\t\t".'$this->$methode($value);'."\n".
           "\t\t\t}\n".
           "\t\t}\n".
           "\t}\n";

        fputs($fichier,$cons);
}

/**
 * Méthode qui crée l'affichage des Accesseurs de la classe
 * Prend en paramètre le tableau d'attribut, le nombre d'attributs et le fichier 
 * dans lequel on crée la classe
 * 
 * @param Array  $tabAtt
 * @param Integer $nbAtt
 * @param Resousce $fichier
 * @return Void
 */
function genereSetters($tabAtt,$fichier)
{
    $get="\n\t/***************** Accesseurs ***************** */\n\n";
    for($i=0;$i<count($tabAtt);$i++)
    {
            $get.="\n\t".'public function get'.ucfirst($tabAtt[$i])."()".
                  "\n\t{".
                  "\n\t\treturn ".'$this->_'.$tabAtt[$i].";\n".  
                  "\t}\n".
                  "\n\t".'public function set'.ucfirst($tabAtt[$i])."($".$tabAtt[$i].")".
                  "\n\t{".
                  "\n\t\t".'$this->_'.$tabAtt[$i].'=$'.$tabAtt[$i].';'."\n".  
                  "\t}\n";
    }
    fputs($fichier,$get);
}

/**
 * Méthode qui crée l'affichage de la méthode toString() de la classe
 * Prend en paramètre le tableau d'attribut le nombre d'attributs et le fichier 
 * dans lequel on crée la classe
 * 
 * @param Array  $tabAtt
 * @param Integer $nbAtt
 * @param Resousce $fichier
 * @return Void
 */
function genereToString($tabAt,$fichier)
{
    $rep="";
    for ($i=0;$i<count($tabAt);$i++)
    {
        $rep.='"'.ucfirst($tabAt[$i]).' : ".$this->get'.ucfirst($tabAt[$i]).'().';
    }
    $rep.='"\n"';
    fputs($fichier,$rep);
}

/**
 * Méthode qui crée l'affichage de la méthode equalsTo()de la classe
 * Prend en paramètre le fichier dans lequel on crée la classe
 * 
 * @param Resousce $fichier
 * @return Void
 */
function genereEqualsTo($fichier)
{
     $toStr="\n\n\t\n".
            "\t* Renvoit Vrai si l'objet en paramètre est égal \n".
            "\t* à l'objet appelant\n".
            "\t*\n".
            "\t* @param [type] ".'$obj'."\n".
            "\t* @return bool\n".
            "\t*/\n".
            "\tpublic function equalsTo(".'$obj'.")\n".
            "\t{\n".
            "\t\treturn;\n".
            "\t}\n";
    fputs($fichier,$toStr);
}

/**
 * Méthode qui crée l'affichage de la méthode compareTo()de la classe
 * Prend en paramètre le fichier dans lequel on crée la classe
 * 
 * @param Resousce $fichier
 * @return Void
 */
function genereCompareTo($fichier)
{
     $toStr="\n\n\t/**\n".
            "\t* Compare l'objet à un autre\n".
            "\t* Renvoi 1 si le 1er est >\n".
            "\t*        0 si ils sont égaux\n".
            "\t*      - 1 si le 1er est <\n".
            "\t*\n".
            "\t* @param [type] ".'$obj1'."\n".
            "\t* @param [type] ".'$obj2'."\n".
            "\t* @return Integer\n".
            "\t*/\n".
            "\tpublic function compareTo(".'$obj'.")\n".
            "\t{\n".
            "\t\treturn;\n".
            "\t}\n";
    fputs($fichier,$toStr);
}


/********************* FIN DES FONCTIONS**************************** */



// Genere le nom et ouvre le fichier contenant la classe
$nomFichier=$nomTable.".Class.php";
$fp=fopen($nomFichier,"w");

// Affichage de l'entête du fichier
genereEntete($nomTable,$fp);
// Affichage des attributs
affichageAttributs($colonne,$fp);
// Affichage des getters setters
genereSetters($colonne,$fp);
// Affichage du constructeur
genereConstruct($fp);
// Affichage la fonction toString
genereToString($colonne,$fp);
// Affichage la fonction equalsTo
genereEqualsTo($fp);
// Affiche la fonction CompareTo
genereCompareTo($fp);
//Parenthèse de la fin de classe
fputs($fp,'}');
//Fermeture du fichier contenant la classe
fclose($fp);

