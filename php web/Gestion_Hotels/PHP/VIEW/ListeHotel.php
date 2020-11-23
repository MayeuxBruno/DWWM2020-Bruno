<?php

echo '<div class="colonne">
<button><a href="index.php?codePage=formAjoutHotel">Ajouter un Hotel</a></button>';
$listehotels = HotelsManager::getList();
foreach ($listehotels as $unHotel)
{
    echo '<div>';
    echo $unHotel->getNomHotel();
    echo '<button><a href="index.php?codePage=formEditHotel&id='.$unHotel->getIdHotel().'">Edition</a></button>';  
    echo '<button><a href="index.php?codePage=formModifHotel&id='.$unHotel->getIdHotel().'">Modification</a></button>'; 
    echo '<button><a href="index.php?codePage=formSupprHotel&id='.$unHotel->getIdHotel().'">Supression</a></button>';
    echo '</div>';
}

echo '</div>';
