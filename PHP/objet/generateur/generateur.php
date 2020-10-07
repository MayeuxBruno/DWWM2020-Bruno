<?php

function affichageAttributs($tabAttribut,$fichier)
{
    $sepAt="\t/*****************Attributs***************** */\n\n";  
    foreach($tabAttribut as $elt)
    {
        $sepAt.="\t".'private $_'.$elt.";\n";
    }
    fputs($fichier,$sepAt);
}

function genereConstruct($fichier)
{
    $cons="\n\t/*****************Constructeur***************** */\n\n".
          "\t".'public function __construct(array $options = [])'."\n".
          "\t{\n ".
          "\t\t if (!empty(".'$options'.")) // empty : renvoi vrai si le tableau est vide\n".
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
        $get.="\n\t".'private function get'.ucfirst($elt)."()".
              "\n\t{".
              "\n\t\treturn ".'$this->_'.$elt.";\n".  
              "\t}\n".
              "\n\t".'private function set'.ucfirst($elt)."($".$elt.")".
              "\n\t{".
              "\n\t\t".'$this->_'.$elt.'=$'.$elt.';'."\n".  
              "\t}\n";
    }
    fputs($fichier,$get);
}

function genereToString($fichier)
{
    $toStr="\n\t/*****************Autres Méthodes***************** */\n\n".
            "\t/**\n".
            "\t * Transforme l'objet en chaine de caractères\n".
            "\t*\n".
            "\t* @return String\n".
            "\t*/\n".
            "\tpublic function toString()\n".
            "\t{\n".
            "\t\treturn ;\n".
            "\t}\n";
    fputs($fichier,$toStr);
}

function genereEqualsTo($fichier)
{
    $toStr="\n\t/*****************Autres Méthodes***************** */\n\n".
            "\t/**\n".
            "\t * Transforme l'objet en chaine de caractères\n".
            "\t*\n".
            "\t* @return String\n".
            "\t*/\n".
            "\tpublic function equalsTo(".'$obj'.")\n".
            "\t{".
            "\t\treturn;\n".
            "\t}\n";
    fputs($fichier,$toStr);
}


$nomClasse=ucfirst(readline("Entrez le nom de la classe à créer :"));
$nomFichier=strtolower($nomClasse).".Class.php";
$nbAttributs=readline("Entre le nombre d'attributs : ");
for($i=1;$i<=$nbAttributs;$i++)
{
    $attribut[]=lcfirst(readline("Entrez l'attribut $i : "));
}

// Ouverture du fichier dans lequel la classe sera générée
$fp=fopen("..\\$nomFichier","w");

$entete='<?php'.
        "\n\nclass $nomClasse\n{\n\n";
fputs($fp,$entete);

// Affichage des attributs
affichageAttributs($attribut,$fp);
// Affichage des getters setters
genereSetters($attribut,$fp);
// Affichage du constructeur
genereConstruct($fp);
// Affichage de toString
genereToString($fp);
// Affichage de equalsTo
genereEqualsTo($fp);

fputs($fp,'}');
fclose($fp);