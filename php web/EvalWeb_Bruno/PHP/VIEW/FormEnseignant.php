<?php
$mode = $_GET['mode'];
if (isset($_GET['id']))  // si l'id est renseigné
{
    $idRecu = $_GET['id'];
    if ($idRecu != false)
    {
        $userChoisi = UtilisateursManager::findById($idRecu);
    }
}
echo'<div class="espacehor"></div>';
echo'<div>';
echo'<div class="vide"></div>';
echo'<div class="colonne fondform">';

switch ($mode)
{
    case "ajout": {
        echo '<form action="index.php?page=actionCompte&mode=ajout" method="POST">';
            break;
        }
    case "modif":    {
            echo '<form action="index.php?page=actionCompte&mode=modif" method="POST">
        <input name="idUtilisateur"  value="' . $userChoisi->getIdUtilisateur() . '" type="hidden" />';
            break;
        }
    case "suppr":    {
            echo '<form action="index.php?page=actionCompte&mode=suppr" method="POST">
        <input name="idUtilisateur"  value="' . $userChoisi->getIdUtilisateur() . '" type="hidden" />';
            break;
        }
}


?>
    <div class="padForm">
        <div class="justify"><label for="Login">Pseudo : </label></div>
        <div><input name="Login" <?php if ($mode !="ajout") { echo 'value="'.$userChoisi->getLogin().'"';} if ($mode=="suppr") echo 'disabled'; ?>/></div>
    </div>
    <div class="padForm">
        <div class="justify"><label for="NomUtilisateur">Nom : </label></div>
        <div><input name="NomUtilisateur" <?php if ($mode !="ajout") { echo 'value="'.$userChoisi->getNomUtilisateur().'"';} if ($mode=="suppr") echo 'disabled'; ?>/></div>
    </div>
    <div class="espace"></div>
    <div class="padForm">
        <div class="justify"><label for="PrenomUtilisateur">Prenom : </label></div>
        <div><input name="PrenomUtilisateur"  <?php if ($mode !="ajout") { echo 'value="'.$userChoisi->getPrenomUtilisateur().'"';} if ($mode=="suppr") echo 'disabled'; ?> /></div>
    </div>
    <div class="espace"></div>
    <div class="justify">
    <div>
    <label for="idMatiere">Matiere</label>
    <select name="idMatiere">
    <?php
    $listeMatiere=MatieresManager::getList();
    foreach ($listeMatiere as $uneMatiere)
    {
        if($mode!="ajout")
        {
            $sel="";
            if ($uneMatiere->getIdMatiere() == $userChoisi->getIdMatiere())
            {
               $sel ="selected";
            }
        }
        echo '<option value="'.$uneMatiere->getIdMatiere().'" '.$sel.' >'.$uneMatiere->getLibelleMatiere().'</option>';
    }
    ?>
    </select>
    </div>
</div>
    <div class="espace"></div>
    <div class="padForm">
        <div class="justify"><label for="MotDePasse">Mot De Passe : </label></div>
        <div><input name="MotDePasse" type="password" <?php if ($mode !="ajout") { echo 'value="'.$userChoisi->getMotDePasse().'"';} if ($mode=="suppr") echo 'disabled'; ?> /></div>
    </div>
    <input name="Role"  value="2" type="hidden" />'
    <div class="demiespacehor"></div>
    <div class="justify">
    <div class="justify">
    
<?php

 switch ($mode)
{
    case "ajout":    
    {
        echo '    <button type="submit">Ajouter</button>';
        break;
    }
    case "modif":   
    {
        echo '    <button type="submit">Modifier</button>';
        break;
    }
    case "suppr":    
    {
        echo '    <button type="submit">Supprimer</button>';
        break;
    }
}
echo'</div>';
echo '<div class="justify"><button><a href="index.php?page=listeEnseignants">Annuler</a></button></div>
</div>
</form>
</div>
    <div class="vide"></div>
</div>';