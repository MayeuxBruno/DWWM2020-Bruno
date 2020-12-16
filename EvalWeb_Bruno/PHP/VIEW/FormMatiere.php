<?php
$mode = $_GET['mode'];
if (isset($_GET['id']))  // si l'id est renseigné
{
    $idRecu = $_GET['id'];
    if ($idRecu != false)
    {
        $matiereChoisi = MatieresManager::findById($idRecu);
    }
}
echo'<div class="espacehor"></div>';
echo'<div>';
echo'<div class="vide"></div>';
echo'<div class="colonne fondform">';

switch ($mode)
{
    case "ajout": {
        echo '<form action="index.php?page=actionMatiere&mode=ajout" method="POST">';
            break;
        }
    case "modif":    {
            echo '<form action="index.php?page=actionMatiere&mode=modif" method="POST">
        <input name="idMatiere"  value="' . $matiereChoisi->getIdMatiere() . '" type="hidden" />';
            break;
        }
    case "suppr":    {
            echo '<form action="index.php?page=actionMatiere&mode=suppr" method="POST">
        <input name="idMatiere"  value="' . $matiereChoisi->getIdMatiere() . '" type="hidden" />';
            break;
        }
}


?>

    <div class="padForm">
        <div class="justify"><label for="LibelleMatiere">Libelle de la Matiere : </label></div>
        <div><input name="LibelleMatiere" <?php if ($mode !="ajout") { echo 'value="'.$matiereChoisi->getLibelleMatiere().'"';} if ($mode=="suppr") echo 'disabled'; ?>/></div>
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