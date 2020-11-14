<?php

include 'head.php';
include 'header.php';
include 'personne.php';

/*echo'<div class="ligne">';*/
$cmp=1;
echo'<table>';
foreach($personne as $elt)
{
   /* echo'<div class="personne colonne">
    <div class="nom">Nom : '.$elt->getNom().' '.$elt->getPrenom().'</div>
    <div class="age">Age : '.$elt->getAge().'</div>
    </div>';
    $cmp++;
    if($cmp==3){
        echo'</div>';
        echo'<div class="ligne">';
        $cmp=0;
    }*/
    echo'<tr>
            <td>'.$cmp.'</td>
            <td>'.$elt->getNom().'</td>
            <td>'.$elt->getPrenom().'</td>
            <td>'.$elt->getAge().'</td>
        </tr>';
    $cmp++;
}
/*echo'</div>';*/
echo'</table>';
include 'footer.php';