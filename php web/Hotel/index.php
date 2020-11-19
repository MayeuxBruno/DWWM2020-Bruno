<?php
$titre = "Ton titre infobulle";
include "PHP/VIEW/head.php";

echo'<body>';
    $hotel=HotelsManager::getList();
    echo'<div class="colonne">';
    foreach($hotel as $unhotel)
    {
        echo'<div class="ligne">
             <div></div>
             <div class="bouton bleuCiel">'.$unhotel->getNomHotel().' - '.$unhotel->getVilleHotel().'</div>
             <a href="PHP/VIEW/consult.php?id='.$unhotel->getIdHotel().'"><div class="demi bouton vert">Consulter</div></a>
             <a href="PHP/VIEW/delete.php?id='.$unhotel->getIdHotel().'"><div class="demi bouton rouge">Supprimmer</div></a>
             <div></div>
             </div>';
    }

echo '</div>
      </body>
    </html>';