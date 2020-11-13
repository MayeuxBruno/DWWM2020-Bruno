<?php

include 'head.php';
include 'header.php';
include 'personne.php';

echo'<div class="ligne">';
$cmp=0;
foreach($personne as $elt)
{
    echo'<div class="personne">
    <span>Nom : '.$elt->getNom().'</span>';
    echo'</div>';
    $cmp++;
    if($cmp==3){
        echo'</div>';
        echo'<div class="ligne">';
        $cmp=0;
    }
}
echo'</div>';

include 'footer.php';