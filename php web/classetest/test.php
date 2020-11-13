<?php

include 'head.php';
include 'header.php';
include 'personne.php';

echo'<div class="ligne'>';
echo'<div class="personne">';
    echo'<h1>'.$personne[0]->getNom().'</h1>';
echo'</div>';

include 'footer.php';