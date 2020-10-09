<?php
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
function genereEntete($nom,$mere,$fichier,$herit)
{
    $entete='<?php'."\n\nclass $nom ";
    if ($herit==1)
    {
        $entete.="extends $mere";
    }
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
function affichageAttributs($tabAtt,$nbAtt,$fichier)
{
    $sepAt="\t/*****************Attributs***************** */\n\n";  
    for($i=0;$i<count($tabAtt);$i++)
    {
        if ($i<$nbAtt)
        {
            $sepAt.="\t".'private $_'.$tabAtt[$i].";\n";
        }
        else       // Si attributs statics
        {
            $sepAt.="\t".'private static $_'.$tabAtt[$i].";\n";
        }
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
function genereConstruct($fichier,$herit)
{
    $cons="\n\t/*****************Constructeur***************** */\n\n".
          "\t".'public function __construct(array $options = [])'."\n".
          "\t{\n ";
    if ($herit==1)
    {
        $cons.="\t\tparent::__construct(".'$options'.");\n";
    }        
    $cons.="\t\tif (!empty(".'$options'.")) // empty : renvoi vrai si le tableau est vide\n".
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
function genereSetters($tabAtt,$nbAtt,$fichier)
{
    $get="\n\t/***************** Accesseurs ***************** */\n\n";
    for($i=0;$i<count($tabAtt);$i++)
    {
        if ($i<$nbAtt)    
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
        else    // Si attributs statics
        {
            $get.="\n\t".'public static function get'.ucfirst($tabAtt[$i])."()".
                  "\n\t{".
                  "\n\t\treturn ".'self::$_'.$tabAtt[$i].";\n".  
                  "\t}\n".
                  "\n\t".'public function set'.ucfirst($tabAtt[$i])."($".$tabAtt[$i].")".
                  "\n\t{".
                  "\n\t\t".'self::$_'.$tabAtt[$i].'=$'.$tabAtt[$i].';'."\n".  
                  "\t}\n";
        }
    }
    fputs($fichier,$get);
}

/**
 * Méthode qui crée l'affichage de la méthode toString() de la classe
 * Prend en paramètre le tableau d'attribut et le fichier 
 * dans lequel on crée la classe
 * 
 * @param Array  $tabAtt
 * @param Resousce $fichier
 * @return Void
 */
function genereToString($tabAt,$fichier)
{
    $rep="";
    foreach ($tabAt as $elt)
    {
        $rep.='"\n\t'.ucfirst($elt).' : "'.'.$this->get'.ucfirst($elt).'().';
    }
    $rep.='"\n"';
    $toStr="\n\t/*****************Autres Méthodes***************** */\n\n".
            "\t/**\n".
            "\t* Transforme l'objet en chaine de caractères\n".
            "\t*\n".
            "\t* @return String\n".
            "\t*/\n".
            "\tpublic function toString()\n".
            "\t{\n".
            "\t\treturn ".$rep.";\n".
            "\t}\n";
    fputs($fichier,$toStr);
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
     $toStr="\n\n\t/**\n".
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

/**
 * Méthode qui permet de saisir les attributs de la classe
 * Prend en paramètre le tableau dans lequel les attributs
 * seront stockes ansi que la phrase d'invite utilisateur.
 * Elle retourne le tableau contenant les attributs saisis
 * 
 * @param Array $attributs
 * @param String $invite
 * @return Array $attributs
 */
function getAttribut($attribut,$invite)
{
    //Saisie et gestion des attributs
    do
    {
        do
        {
            do
            {
                $nbAttributs=readline($invite);
            }while(!is_numeric($nbAttributs));
        }while($nbAttributs<0);
    }while(!is_integer($nbAttributs*1));

// Saisie du nom des attributs et vérifie qu'ils n'ont pas déjà été saisis
    if($nbAttributs>0)
    {
        for($i=1;$i<=$nbAttributs;$i++)
        {
            do{
                do{
                    $attSaisie=lcfirst(readline("Entrez l'attribut $i : "));
                }while(in_array($attSaisie,$attribut));
            }while(!ctype_alnum($attSaisie));
            $attribut[]=$attSaisie;
        }
    }
    return $attribut;
} 
/********************* FIN DES FONCTIONS**************************** */

// Saisies de l'utilisateur
//Saisie du nom de la classe et vérifie que le format est alphanumerique
do
{
    $nomClasse=ucfirst(readline("Entrez le nom de la classe à créer :"));
}while(!ctype_alnum($nomClasse));

do
{
    $isHeritage=strtolower(readline("Cette classe hérite t'elle d'une autre classe ( O / N ) ? :"));
}while($isHeritage!='o'&& $isHeritage!='n');

// Si il y a un heritage
$heritage=0;
$nomMere="";
if ($isHeritage=='o')
{
    $heritage=1;
    // Saisie du nom de la classe mere
    do
    {
         $nomMere=ucfirst(readline("Entrez le nom de la classe mère :"));
    }while(!ctype_alnum($nomMere));
}

// Saisie des Attributs
$tabAttribut=[];
$tabAttribut=getAttribut($tabAttribut,"Entrez le nombre d'attributs : ");
$nbAttributs=count($tabAttribut);  // On stock le nombre d'attributs dans le tableau
// Saisie des attribut statics
$tabAttribut=getAttribut($tabAttribut,"Entrez le nombre d'attributs static : ");

// Genere le nom et ouvre le fichier contenant la classe
$nomFichier=$nomClasse.".Class.php";
$fp=fopen($nomFichier,"w");

// Affichage de l'entête du fichier
genereEntete($nomClasse,$nomMere,$fp,$heritage);
// Affichage des attributs
affichageAttributs($tabAttribut,$nbAttributs,$fp);
// Affichage des getters setters
genereSetters($tabAttribut,$nbAttributs,$fp);
// Affichage du constructeur
genereConstruct($fp,$heritage);
// Affichage la fonction toString
genereToString($tabAttribut,$fp);
// Affichage la fonction equalsTo
genereEqualsTo($fp);
// Affiche la fonction CompareTo
genereCompareTo($fp);
//Parenthèse de la fin de classe
fputs($fp,'}');
//Fermeture du fichier contenant la classe
fclose($fp);
