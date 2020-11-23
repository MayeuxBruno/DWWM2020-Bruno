<?php
$idRecu = $_GET['id'];
$hotelChoisi = HotelsManager::findById($idRecu);

echo '
<form action="index.php?codePage=actionSupprHotel" method="POST">
    <input name="idHotel"  value="'.$hotelChoisi->getidHotel().'" type="hidden" />
    <div>
        <label for="nomHotel">Nom</label>
        <input name="nomHotel" value="'.$hotelChoisi->getNomHotel().'" disabled />
    </div>
    <div>
        <label for="AdresseHotel">Adresse</label>
        <input name="AdresseHotel"  value="'.$hotelChoisi->getAdresseHotel().'" disabled  />
    </div>
    <div>
        <label for="VilleHotel">Ville</label>
        <input name="VilleHotel"  value="'.$hotelChoisi->getVilleHotel().'" disabled  />
    </div>
    <div>
        <label for="CategorieHotel">Catégorie</label>
        <input name="CategorieHotel" value="'.$hotelChoisi->getCategorieHotel().'" disabled  />
    </div>
        <input name="idStation"  value="'.$hotelChoisi->getidStation().'" type="hidden" />
    <div></div>
    <button type="submit">Supprimer l\'hotel</button>
<button><a href="index.php?codePage=listeHotel">Retour</a></button>
</form>';