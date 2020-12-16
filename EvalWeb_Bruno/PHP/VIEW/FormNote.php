<?php
$mode = $_GET['mode'];
if (isset($_GET['id']))  // si l'id est renseigné
{
    $idRecu = $_GET['id'];
    if ($idRecu != false)
    {
        $suiviChoisi = SuivisManager::findById($idRecu);
    }
}
echo'<div class="espacehor"></div>';
echo'<div>';
echo'<div class="vide"></div>';
echo'<div class="colonne fondform">';

switch ($mode)
{
    case "ajout": {
        echo '<form action="index.php?page=actionSuivi&mode=ajout" method="POST">';
            break;
        }
    case "modif":    {
            echo '<form action="index.php?page=actionSuivi&mode=modif" method="POST">
        <input name="idMatiere"  value="' . $suiviChoisi->getIdSuivis() . '" type="hidden" />';
            break;
        }
    case "suppr":    {
            echo '<form action="index.php?page=actionSuivi&mode=suppr" method="POST">
        <input name="idMatiere"  value="' . $suiviChoisi->getIdSuivis() . '" type="hidden" />';
            break;
        }
}


?>

    <div class="padForm">
        <div class="justify"><label for="">Nom de l'élève : </label></div>
        <div><input name="" <?php if ($mode !="ajout") { echo 'value="'.ElevesManager::findById().'"';} if ($mode=="suppr") echo 'disabled'; ?>/></div>
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
echo '<div class="justify"><button><a href="index.php?page=listeMatieres">Annuler</a></button></div>
</div>
</form>
</div>
    <div class="vide"></div>
</div>';