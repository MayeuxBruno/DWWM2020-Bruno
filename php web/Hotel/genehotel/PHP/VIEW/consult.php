<?php
$titre = "Ton titre infobulle";
include "head.php";

$hotel=HotelsManager::findById($_GET['id']);

    echo'<div class="ligne">
         <div></div>
         <div class="bouton blanc">Nom</div>
         <div class="demi bouton bleuCiel">'.$hotel->getNomHotel().'</div></a>
         <div></div>
         </div>
         <div class="ligne">
         <div></div>
         <div class="bouton blanc">Catégorie</div>
         <div class="demi bouton bleuCiel">'.$hotel->getCategorieHotel().'</div></a>
         <div></div>
         </div>
         <div class="ligne">
         <div></div>
         <div class="bouton blanc">Adresse</div>
         <div class="demi bouton bleuCiel">'.$hotel->getAdresseHotel().'</div></a>
         <div></div>
         </div>
         <div class="ligne">
         <div></div>
         <div class="bouton blanc">Ville</div>
         <div class="demi bouton bleuCiel">'.$hotel->getVilleHotel().'</div></a>
         <div></div>
         </div>';


echo '</div>
      </body>
    </html>';