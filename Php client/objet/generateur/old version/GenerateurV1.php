<?php

/****
 * Générateur de classe prenant en charge l'héritage
 * 09-10-2020
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

function affichageAttributs($tabAttribut,$fichier)
{
    $sepAt="\t/*****************Attributs***************** */\n\n";  
    foreach($tabAttribut as $elt)
    {
        $sepAt.="\t".'private $_'.$elt.";\n";
    }
    fputs($fichier,$sepAt);
}

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

function genereSetters($tabAttribut,$fichier)
{
    $get="\n\t/***************** Accesseurs ***************** */\n\n";
    foreach($tabAttribut as $elt)
    { 
        $get.="\n\t".'public function get'.ucfirst($elt)."()".
              "\n\t{".
              "\n\t\treturn ".'$this->_'.$elt.";\n".  
              "\t}\n".
              "\n\t".'public function set'.ucfirst($elt)."($".$elt.")".
              "\n\t{".
              "\n\t\t".'$this->_'.$elt.'=$'.$elt.';'."\n".  
              "\t}\n";
    }
    fputs($fichier,$get);
}

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

//Saisie et gestion des attributs
do
{
    do
    {
        do
        {
            $nbAttributs=readline("Entre le nombre d'attributs : ");
        }while(!is_numeric($nbAttributs));
    }while($nbAttributs<1);
}while(!is_integer($nbAttributs*1));

// Saisie du nom des attributs et vérifie qu'ils n'ont pas déjà été saisis
$attribut=[];
for($i=1;$i<=$nbAttributs;$i++)
{
    do{
        do{
            $attSaisie=lcfirst(readline("Entrez l'attribut $i : "));
        }while(in_array($attSaisie,$attribut));
    }while(!ctype_alnum($attSaisie));
    $attribut[]=$attSaisie;
}
// Genere le nom et ouvre le fichier contenant la classe
$nomFichier=ucfirst($nomClasse).".Class.php";
$fp=fopen($nomFichier,"w");

// Affichage de l'entête du fichier
genereEntete($nomClasse,$nomMere,$fp,$heritage);
// Affichage des attributs
affichageAttributs($attribut,$fp);
// Affichage des getters setters
genereSetters($attribut,$fp);
// Affichage du constructeur
genereConstruct($fp,$heritage);
// Affichage la fonction toString
genereToString($attribut,$fp);
// Affichage la fonction equalsTo
genereEqualsTo($fp);
// Affiche la fonction CompareTo
genereCompareTo($fp);
//Parenthèse de la fin de classe
fputs($fp,'}');
//Fermeture du fichier contenant la classe
fclose($fp);
