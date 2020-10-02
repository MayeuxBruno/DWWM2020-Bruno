<?php

$chaine=readline("Entrez une chaine de caractères : ");
echo "Cette chaine comporte ".str_word_count($chaine,0)." mots";
