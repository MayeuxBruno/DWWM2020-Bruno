<?php
do{   
   $jour=readline("Entrez le jour 'jj' : ");
    if (ctype_digit($jour)!=1)
    {
        echo"Entrée non valide\n";
    }
}while(ctype_digit($jour)!=1);
do{   
    $mois=readline("Entrez le mois 'mm' : ");
     if (ctype_digit($mois)!=1)
     {
         echo"Entrée non valide\n";
     }
 }while(ctype_digit($mois!=1));
 do{   
    $annee=readline("Entrez l'année 'aaaa' : ");
     if (ctype_digit($annee)!=1)
     {
         echo"Entrée non valide\n";
     }
 }while(ctype_digit($annee)!=1);

if ((($annee>0)&&(($jour>0))&&(($jour<=31))&&(($mois>0))&&($mois<=12)))
{
    if (($mois==4)||($mois==6)||($mois==9)||($mois==11))
    {
        echo($jour>30)?"date non valide:":"";
    }else
        {
        if ($mois==2){
            if ($jour<=28)
            {
                echo"date valide si non bissextile";
            }else 
                 {
                 if (($jour==29)&&!(($annee%4!=0)||(($annee%4==0)&&($annee%100==0)&&($annee%400==0)))
                    {
                            echo"date valide";
                    }
            
        }
        else{
            echo"date valide";
        }   
    }
   
}
else {
    echo"date non valide";
}