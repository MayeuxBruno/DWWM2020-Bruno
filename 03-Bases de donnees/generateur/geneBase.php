 <?php
/***
 * Generateur de classe prenant en charge l'héritage et les attributs statics
 * 09-10-2020 - MAYEUX Bruno
 */

 /**
 * Méthode qui crée l'entête de la base de données
 * Prend en paramètre le nom de la classe et le fichier
 * dans lequel on crée la base
 * 
 * @param String  $nom
 * @return Void
 */
function afficheEntete($nom,$fichier)
{
    $entete="DROP DATABASE IF EXISTS $nom ;\n";
    $entete.='CREATE DATABASE'." $nom;\n";
    $entete.="USE $nom;\n\n";
    fputs($fichier,$entete); 
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
function afficheTable($tableau,$fichier)
{
   for ($i=0;$i<count($tableau);$i++)
   {
        $aff='CREATE TABLE '.$tableau[$i][0]."(\n";
        $aff.="\t".$tableau[$i][1].' int(11) not NULL auto_increment PRIMARY KEY,'."\n";
        for ($j=2;$j<count($tableau[$i]);$j+=2)
       {
            $aff.="\t".$tableau[$i][$j]." ".$tableau[$i][$j+1];
            $aff.=($j==count($tableau[$i])-2)?"\n":",\n";
       }
       $aff.=')ENGINE = InnoDB DEFAULT CHARSET=utf8;'."\n\n";
       fputs($fichier,$aff);
   }
        
}



/********************* FIN DES FONCTIONS**************************** */


// Saisies de l'utilisateur
//Saisie du nom de la classe et vérifie que le format est alphanumerique
do
{
    $nomBase=ucfirst(readline("Entrez le nom de la base de données à créer :"));
}while(!ctype_alnum($nomBase));

$tab=[];
$i=1;
do
{
    do
    {
        $nomTable=ucfirst(readline("Entrez le nom de la table $i :"));
    }while(!ctype_alnum($nomTable));
    $tab[$i-1][]=$nomTable;

    do
    {
        $nomCle=ucfirst(readline("Entrez la clé primaire de la table $i :"));
    }while(!ctype_alnum($nomCle));
    $tab[$i-1][]=$nomCle;

     //Saisie et gestion des attributs
     do
     {
         do
         {
             do
             {
                 $nbAttributs=readline("Entrez le nombre d'attributs de la classe : ");
             }while(!is_numeric($nbAttributs));
         }while($nbAttributs<0);
     }while(!is_integer($nbAttributs*1));
 
 // Saisie du nom des attributs et vérifie qu'ils n'ont pas déjà été saisis
     if($nbAttributs>0)
     {
         for($j=1;$j<=$nbAttributs;$j++)
         {
             do{
                     $attSaisie=lcfirst(readline("Entrez l'attribut $j : "));
             }while(!ctype_alnum($attSaisie));
            
             $tab[$i-1][]=$attSaisie;
        
            $typeSaisie=strtolower(readline("Entrez le type de l'attribut $j : "));
            $tab[$i-1][]=$typeSaisie;
         }
     }

    $isTable=strtolower(readline("Voulez vous entrer une autre table ( O / N ) ? :"));
    $i++;
}while($isTable=='o');

// Genere le nom et ouvre le fichier contenant la classe

$fp=fopen($nomBase.".sql","w");

// Affichage de l'entête du fichier
afficheEntete($nomBase,$fp);

afficheTable($tab,$fp);

fclose($fp);
