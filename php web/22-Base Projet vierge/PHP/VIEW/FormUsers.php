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
switch ($mode)
{
    case "ajout":
    case "creer":  {
            echo '<form action="index.php?page=actionCompte&mode=ajout" method="POST">';
            break;
        }
    case "modif":    {
            echo '<form action="index.php?page=actionUsers&mode=modif" method="POST">
        <input name="idUser"  value="' . $userChoisi->getIdUser() . '" type="hidden" />';
            break;
        }
    case "suppr":    {
            echo '<form action="index.php?page=actionUsers&mode=suppr" method="POST">
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

    <div>
        <label for="nomUser">Nom</label>
        <input name="nomUser" <?php if ($mode !="ajout") { echo 'value="'.$userChoisi->getNomUser().'"';} if ($mode=="suppr" || $mode=="detail") echo 'disabled'; ?>/>
    </div>
    <div class="espace"></div>
     <div>
     <label for="prenomUser">Prenom</label>
     <input name="prenomUser"  <?php if ($mode !="ajout") { echo 'value="'.$userChoisi->getPrenomUser().'"';} if ($mode=="suppr" || $mode=="detail") echo 'disabled'; ?> />
     </div>
     <div class="espace"></div>
     <div>
     <label for="pseudoUser">Pseudo</label>
     <input name="pseudoUser"  <?php if ($mode !="ajout") { echo 'value="'.$userChoisi->getPseudoUser().'"';} if ($mode=="suppr" || $mode=="detail") echo 'disabled'; ?> />
     </div>
     <div class="espace"></div>
     <div>
         <label for="mailUser">Mail</label>
         <input name="mailUser" <?php if ($mode !="ajout") { echo 'value="'.$userChoisi->getMailUser().'"';} if ($mode=="suppr" || $mode=="detail") echo 'disabled'; ?> />
     </div>
     <div class="espace"></div>
     <div>
         <label for="passwordUser">Mot de passe</label>
         <input name="passwordUser" <?php if ($mode !="ajout") { echo 'value="'.$userChoisi->getPasswordUser().'"'; } if ($mode=="suppr" || $mode=="detail") echo 'disabled'; ?>  />
     </div>
    <?php
    if ($mode=="ajout"||$mode=="creer")
    {
        echo'<div>';
        echo'<div class="center"><label for="confirmationMdp">'.texte("confirmation")." :".'</label></div>';
        echo'<div><input name="confirmationMdp" type="password" required/></div>';
        echo'</div>';
    }

    ?>
    <div>
            <label for="roleUser">Role</label>
            <select name="roleUser">
            <option value="1">utilisateur</option>
            <option value="2">administrateur</option>
            </select>
    </div>
  
<?php
 switch ($mode)
{
    case "ajout":    
    {
        echo '    <button type="submit">Ajouter un utilisateur</button>';
        break;
    }
    case "crer":    
    {
        echo '    <button type="submit">Créer le compte</button>';
        break;
    }
    case "modif":   
    {
        echo '    <button type="submit">Modifier l\'utilisateur</button>';
        break;
    }
    case "suppr":    
    {
        echo '    <button type="submit">Supprimer l\'utilisateur</button>';
        break;
    }
}
   echo '<button><a href="index.php?page=listeUtilisateurs">Retour</a></button>
</form>';

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