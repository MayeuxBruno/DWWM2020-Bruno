<?php
$mode = $_GET['mode'];
if (isset($_GET['id']))  // si l'id est renseigné
{
    $idRecu = $_GET['id'];
    if ($idRecu != false)
    {
        $userChoisi = UsersManager::findById($idRecu);
    }
}
echo'<div class="espacehor"></div>';
echo'<div>';
echo'<div class="vide"></div>';
echo'<div class="colonne fondform bordure padForm">';

switch ($mode)
{
    case "ajout": {
        echo '<form action="index.php?page=actionCompte&mode=ajout" method="POST">';
            break;
        }
    case "creer":  {
            echo '<form action="index.php?page=actionCompte&mode=creer" method="POST">';
            break;
        }
    case "modif":    {
            echo '<form action="index.php?page=actionCompte&mode=modif" method="POST">
        <input name="idUser"  value="' . $userChoisi->getIdUser() . '" type="hidden" />';
            break;
        }
    case "suppr":    {
            echo '<form action="index.php?page=actionCompte&mode=suppr" method="POST">
        <input name="idUser"  value="' . $userChoisi->getIdUser() . '" type="hidden" />';
            break;
        }
    case "detail":    { //il n'y a pas d'action sur le formulaire, juste le bouton retour
        echo '<form >  
    <input name="idUser"  value="' . $userChoisi->getIdUser() . '" type="hidden" />';
        break;
    }
}


?>

    <div class="padForm">
        <div class="justify"><label for="nomUser"><?php echo texte("nom");?></label></div>
        <div><input name="nomUser" <?php if ($mode !="ajout"&&$mode!="creer") { echo 'value="'.$userChoisi->getNomUser().'"';} if ($mode=="suppr" || $mode=="detail") echo 'disabled'; ?>/></div>
    </div>
    <div class="espace"></div>
    <div class="padForm">
        <div class="justify"><label for="prenomUser"><?php echo texte("prenom");?></label></div>
        <div><input name="prenomUser"  <?php if ($mode !="ajout"&&$mode!="creer") { echo 'value="'.$userChoisi->getPrenomUser().'"';} if ($mode=="suppr" || $mode=="detail") echo 'disabled'; ?> /></div>
    </div>
    <div class="espace"></div>
    <div class="padForm">
        <div class="justify"><label for="pseudoUser">Pseudo</label></div>
        <div><input name="pseudoUser"  <?php if ($mode !="ajout"&&$mode!="creer") { echo 'value="'.$userChoisi->getPseudoUser().'"';} if ($mode=="suppr" || $mode=="detail") echo 'disabled'; ?> /></div>
    </div>
    <div class="espace"></div>
    <div class="padForm">
        <div class="justify"><label for="mailUser"><?php echo texte("adressemail");?></label></div>
        <div><input name="mailUser" <?php if ($mode !="ajout"&&$mode!="creer") { echo 'value="'.$userChoisi->getMailUser().'"';} if ($mode=="suppr" || $mode=="detail") echo 'disabled'; ?> /></div>
     </div>
     <div class="espace"></div>
     <div class="padForm">
        <div class="justify"><label for="passwordUser"><?php echo texte("motDePasse");?></label></div>
        <div><input name="passwordUser" type="password"<?php if ($mode !="ajout"&&$mode!="creer") { echo 'value="'.$userChoisi->getPasswordUser().'"'; } if ($mode=="suppr" || $mode=="detail") echo 'disabled'; ?>  /></div>
     </div>
    <?php
    if ($mode=="ajout"||$mode=="creer")
    {
        echo'<div class="padForm">';
        echo'<div class="justify"><label for="confirmationMdp">'.texte("confirmationMdp")." :".'</label></div>';
        echo'<div><input name="confirmationMdp" type="password" required/></div>';
        echo'</div>';
    }

    ?>
    <div class="padForm">
        <div class="justify"><label for="roleUser"><?php echo texte("droitsUtilisateur");?></label></div>
        <div>    <select name="roleUser" <?php if ($mode=="suppr" || $mode=="detail") echo 'disabled';?>>
            <option value="1"<?php if (($mode=="suppr" || $mode=="detail"|| $mode=="modif")){if($userChoisi->getRoleUser()==1){echo 'selected';}}?>><?php echo texte("utilisateur");?></option>
            <option value="2"<?php if (($mode=="suppr" || $mode=="detail"|| $mode=="modif")){if($userChoisi->getRoleUser()==2){echo 'selected';}}?>><?php echo texte("administrateur");?></option>
            </select>
            </div>
    </div>
    <div class="justify">
    <div class="justify">
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
echo'</div>';
echo '<div class="justify"><button><a href="index.php?page=listeUtilisateurs">'.texte("retour").'</a></button></div>
</div>
</form>
</div>
    <div class="vide"></div>
</div>';

/**
 * Ajout d'un select liste déroulante 
 **/

/*<?php
if ($mode == "ajout" || $mode == "update") {

    $categorie = CategoriesManager::getList();
    foreach ($categorie as $uneCategorie) {
        echo '<option value="'.$uneCategorie->getIdCategorie().'">' . $uneCategorie->getLibelleCategorie() . '</option>';
    }
} else {
    echo $affCategorie;
}?>*/