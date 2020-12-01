<?php
$mot=readline("Entrez la ligne à decrypter:");
$motadecrypter=explode(":",$mot);
$motadecrypter=$motadecrypter[1];
var_dump($motadecrypter);
for($i=0;$i<strlen($motadecrypter);$i++)
{
            $motadecrypter[$i]=chr(ord($motadecrypter[$i])-5);
}
echo $motadecrypter;
