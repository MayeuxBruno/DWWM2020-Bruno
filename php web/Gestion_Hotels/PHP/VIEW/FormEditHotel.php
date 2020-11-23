<?php
$idRecu = $_GET['id'];
$hotelChoisi = HotelsManager::findById($idRecu);
echo '<div class="colonne">
<div>  nom : '. $hotelChoisi->getNomHotel().'</div>
<div>  adresse : '. $hotelChoisi->getAdresseHotel().'</div>
<div>  ville : '. $hotelChoisi->getVilleHotel().'</div>
<div></div>
<button><a href="index.php?codePage=listeHotel">Retour</a></button>
</div>';