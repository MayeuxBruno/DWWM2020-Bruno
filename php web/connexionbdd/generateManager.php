<?php

/**
 * Méthode qui crée l'entête de la classe
 * Prend en paramètre le nom de la classe, le nom de la classe mere le fichier
 * et un booleen indiquant si il y a un heritage 
 * dans lequel on crée la classe
 * 
 * @param String  $nom
 * @param Resousce $fichier
 * @return Void
 */
function genereEntete($nom,$fichier)
{
    $nom.="Manager";
    $entete='<?php'."\n\nclass $nom ";
    $entete.="\n{\n\n";
    fputs($fichier,$entete); 
}

function genereAdd($fichier,$nom,$tabAtt)
{
    $li=$val="";
    $cons= "\t".'public static function add('.$nom.' $obj)'."\n".
           "\t{\n ".
           "\t\t".'$db=DbConnect::getDb();'."\n";

           for($i=0;$i<count($taAtt);$i++)
           {
               $lib.= $tAtt[$i];
               if ($i==(count($taAtt)-1))
               {

               }
               else
               {
                   
               }
           }

           "\t\t".'$q=$db->prepare("INSERT INTO '.$nom.' ('.$tabAtt[0].','.$tabAtt[1].','."\n".
           

        fputs($fichier,$cons);
}



// Genere le nom et ouvre le fichier contenant la classe
    $nomFichier=$nomTable."Manager.Class.php";
    $nomObj=ucfirst($nomTable);
    $fp=fopen($nomFichier,"w");

    fclose($fp);
?>