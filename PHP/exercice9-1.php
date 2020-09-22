<?php 

$chaine=readline("Entrez une chaine de caracteres : ");
echo "Cette chaine comporte ".iconv_strlen($chaine)." caractères";