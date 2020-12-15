<?php
$mode = $_GET['mode'];
if (isset($_GET['id']))  // si l'id est renseigné
{
    $idRecu = $_GET['id'];
    if ($idRecu != false)
    {
        $hotelChoisi = HotelsManager::findById($idRecu);
    }
}
echo'<div class="espacehor"></div>';
echo'<div>';
echo'<div class="vide"></div>';
echo'<div class="colonne fondform bordure padForm">';

switch ($mode)
{
    case "ajout": {
        echo '<form action="index.php?page=actionHotel&mode=ajout" method="POST">';
            break;
        }
    case "creer":  {
            echo '<form action="index.php?page=actionHotel&mode=creer" method="POST">';
            break;
        }
    case "modif":    {
            echo '<form action="index.php?page=actionHotel&mode=modif" method="POST">
        <input name="idUser"  value="' . $hotelChoisi->getIdHotel() . '" type="hidden" />';
            break;
        }
    case "suppr":    {
            echo '<form action="index.php?page=actionHotel&mode=suppr" method="POST">
        <input name="idUser"  value="' . $hotelChoisi->getIdHotel() . '" type="hidden" />';
            break;
        }
    case "detail":    { //il n'y a pas d'action sur le formulaire, juste le bouton retour
        echo '<form >  
    <input name="idUser"  value="' . $hotelChoisi->getIdHotel() . '" type="hidden" />';
        break;
    }
}


?>

    <div class="padForm">
        <div class="justify"><label for="nomHotel"><?php echo texte("nom");?></label></div>
        <div><input name="nomHotel" <?php if ($mode !="ajout"&&$mode!="creer") { echo 'value="'.$hotelChoisi->getNomHotel().'"';} if ($mode=="suppr" || $mode=="detail") echo 'disabled'; ?>/></div>
    </div>
    <div class="espace"></div>
    <div class="padForm">
        <div class="justify"><label for="categorieHotel"><?php /*echo texte("prenom");*/?>Catégorie</label></div>
        <div><input name="categorieHotel"  <?php if ($mode !="ajout"&&$mode!="creer") { echo 'value="'.$hotelChoisi->getCategorieHotel().'"';} if ($mode=="suppr" || $mode=="detail") echo 'disabled'; ?> /></div>
    </div>
    <div class="espace"></div>
    <div class="padForm">
        <div class="justify"><label for="adresseHotel">Adresse</label></div>
        <div><input name="adresseHotel"  <?php if ($mode !="ajout"&&$mode!="creer") { echo 'value="'.$hotelChoisi->getAdresseHotel().'"';} if ($mode=="suppr" || $mode=="detail") echo 'disabled'; ?> /></div>
    </div>
    <div class="espace"></div>
    <div class="padForm">
        <div class="justify"><label for="villeHotel"><?php /*echo texte("adressemail");*/?>Ville</label></div>
        <div><input name="villeHotel" <?php if ($mode !="ajout"&&$mode!="creer") { echo 'value="'.$hotelChoisi->getVilleHotel().'"';} if ($mode=="suppr" || $mode=="detail") echo 'disabled'; ?> /></div>
     </div>
     <div class="espace"></div>
     <div class="padForm">
        <div class="justify"><label for="station"><?php/* echo texte("motDePasse");*/?>Station</label></div>
        <div><input name="station" <?php if ($mode !="ajout"&&$mode!="creer") { echo 'value="'.StationsManager::findById($hotelChoisi->getIdStation())->getNomStation().'"'; } if ($mode=="suppr" || $mode=="detail") echo 'disabled'; ?>  /></div>
     </div>
     <div class="padForm">
        <div class="justify"><label for="altitude"><?php/* echo texte("motDePasse");*/?>Altitude</label></div>
        <div><input name="altitude" <?php if ($mode !="ajout"&&$mode!="creer") { echo 'value="'.StationsManager::findById($hotelChoisi->getIdStation())->getAltitudeStation().'"'; } if ($mode=="suppr" || $mode=="detail") echo 'disabled'; ?>  /></div>
     </div>
     <div class="padForm">
        <div class="justify"><label for="reservation"><?php/* echo texte("motDePasse");*/?>Reservation</label></div>
        <div><input name="reservation" type="date" <?php if ($mode !="ajout"&&$mode!="creer") { echo 'value="'.StationsManager::findById($hotelChoisi->getIdStation())->getAltitudeStation().'"'; } if ($mode=="suppr" || $mode=="detail") echo 'disabled'; ?>  /></div>
     </div>
    <div class="justify">
    <div class="space">
<?php
 switch ($mode)
{
    case "ajout":    
    {
        echo '    <button type="submit">'.texte("ajouter").'</button>';
        break;
    }
    case "creer":    
    {
        echo '    <button type="submit">'.texte("creer").'</button>';
        break;
    }
    case "modif":   
    {
        echo '    <button type="submit">'.texte("modifier").'</button>';
        break;
    }
    case "suppr":    
    {
        echo '    <button type="submit">'.texte("supprimer").'</button>';
        break;
    }
}
echo '<button><a href="index.php?page=listeHotels">'.texte("retour").'</a></button></div>
</div>
</form>
</div>
    <div class="vide"></div>
</div>';