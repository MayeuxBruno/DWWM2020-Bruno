<?php
$idRecu = $_GET['id'];
$hotelChoisi = HotelsManager::findById($idRecu);

echo '
<form action="index.php?codePage=actionModifHotel" method="POST">
    <input name="idHotel"  value="'.$hotelChoisi->getidHotel().'" type="hidden" />
    <div>
        <label for="nomHotel">Nom</label>
        <input name="nomHotel" value="'.$hotelChoisi->getNomHotel().'"/>
    </div>
    <div>
        <label for="AdresseHotel">Adresse</label>
        <input name="AdresseHotel"  value="'.$hotelChoisi->getAdresseHotel().'" />
    </div>
    <div>
        <label for="VilleHotel">Ville</label>
        <input name="VilleHotel"  value="'.$hotelChoisi->getVilleHotel().'" />
    </div>
    <div>
        <label for="CategorieHotel">Catégorie</label>
        <input name="CategorieHotel" value="'.$hotelChoisi->getCategorieHotel().'" />
    </div>
        <input name="idStation"  value="'.$hotelChoisi->getidStation().'" type="hidden" />
    <div></div>
    <button type="submit">Modifier l\' hotel</button>
<button><a href="index.php?codePage=listeHotel">Retour</a></button>
</form>';