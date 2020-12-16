<?php
$mode = $_GET['mode'];
if (isset($_GET['id']))  // si l'id est renseigné
{
    $idRecu = $_GET['id'];
    if ($idRecu != false)
    {
        $eleveChoisi = ElevesManager::findById($idRecu);
    }
}
echo'<div class="espacehor"></div>';
echo'<div>';
echo'<div class="vide"></div>';
echo'<div class="colonne fondform">';

switch ($mode)
{
    case "ajout": {
        echo '<form action="index.php?page=actionEleve&mode=ajout" method="POST">';
            break;
        }
    case "modif":    {
            echo '<form action="index.php?page=actionEleve&mode=modif" method="POST">
        <input name="idEleve"  value="' . $eleveChoisi->getIdEleve() . '" type="hidden" />';
            break;
        }
    case "suppr":    {
            echo '<form action="index.php?page=actionEleve&mode=suppr" method="POST">
        <input name="idEleve"  value="' . $eleveChoisi->getIdEleve() . '" type="hidden" />';
            break;
        }
}


?>

    <div class="padForm">
        <div class="justify"><label for="NomEleve">Nom : </label></div>
        <div><input name="NomEleve" <?php if ($mode !="ajout") { echo 'value="'.$eleveChoisi->getNomEleve().'"';} if ($mode=="suppr") echo 'disabled'; ?>/></div>
    </div>
    <div class="espace"></div>
    <div class="padForm">
        <div class="justify"><label for="PrenomElevr">Prenom : </label></div>
        <div><input name="PrenomEleve"  <?php if ($mode !="ajout") { echo 'value="'.$eleveChoisi->getPrenomEleve().'"';} if ($mode=="suppr") echo 'disabled'; ?> /></div>
    </div>
    <div class="espace"></div>
    <div class="padForm">
        <div class="justify"><label for="Classe">Classe</label></div>
        <div><input name="Classe"  <?php if ($mode !="ajout") { echo 'value="'.$eleveChoisi->getClasse().'"';} if ($mode=="suppr") echo 'disabled'; ?> /></div>
    </div>
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
echo '<div class="justify"><button><a href="index.php?page=listeEleves">Annuler</a></button></div>
</div>
</form>
</div>
    <div class="vide"></div>
</div>';