<?php
$mot=readline("Entrez le mot à crypter:");
$motacrypter=explode(":",$mot);
var_dump($motacrypter);
$motcrypte="";
$sepa=0;
foreach($motacrypter as $mot)
{
    for($i=0;$i<strlen($mot);$i++)
    {
            $mot[$i]=chr(ord($mot[$i])+5);
    }
    $motcrypte.=$mot;
    if ($sepa==0){
        $motcrypte.=":";
        $sepa=1;
    }
}
echo $motcrypte;


