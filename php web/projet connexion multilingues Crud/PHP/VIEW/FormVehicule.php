<?php
$mode=$_GET['mode'];

if (isset($_GET['id'])) {
    $vehicule = VehiculesManager::findById($_GET['id']);
    $idVehicule = $vehicule->getIdVehicule();
}

$listeVehicules=VehiculesManager::getList();
if (isset($_GET['id']))
{
    $idRecu=$_GET['id'];
    if($idRecu!=false)
    {
        $vehiculeChoisi=VehiculesManager::findById($idRecu);
    }
}
echo '<div class="espacehor"></div>';
echo '<div>';
echo '<div></div>';
echo '<div class="center bordure fondform padConex">';
switch($mode)
{
    case"add":
    {
        echo'<form method="post" action="index.php?codePage=actionvehicule&mode=ajout">';
        break;
    }
    case "upd": 
    {
        echo'<form method="post" action="index.php?codePage=actionvehicule&mode=modif">
             <input name="idVehicule" value="'.$vehiculeChoisi->getIdVehicule().'" type="hidden"/>';
        break;
    }
    case "del":
    {
        echo'<form method="post" action="index.php?codePage=actionvehicule&mode=delete">
             <input name="idVehicule" value="'.$vehiculeChoisi->getIdVehicule().'" type="hidden"/>';
        break;
    }
    case "cons":
    {
        echo'<form>
             <input name="idVehicule" value="'.$vehiculeChoisi->getIdVehicule().'" type="hidden"/>';
        break;
    }
}
?>
<div class="fin">
    <label for="noParc"><?php echo texte("noparc")?></label>
    <input name="noParc" <?php if ($mode!="add") {echo 'value="'.$vehiculeChoisi->getNoParc().'"'; }
    if ($mode=="del" || $mode=="cons") echo 'disabled'; ?>/>
</div>
<div class="fin">
    <label for="marque"><?php echo texte("marque")?></label>
    <input name="marque" <?php if ($mode!="add") { echo 'value="'.$vehiculeChoisi->getMarque().'"';} 
    if($mode=="cons"||$mode=="del") echo 'disabled';?>/>
</div>
<div class="fin">
    <label for="modele"><?php echo texte("modele")?></label>
    <input name="modele" <?php if ($mode!="add") {echo 'value="'.$vehiculeChoisi->getModele().'"'; }
    if ($mode=="del" || $mode=="cons") echo 'disabled'; ?>/>
</div>
<div class="fin">
    <label for="immat"><?php echo texte("noimmat")?></label>
    <input type="text" name="immat" <?php if ($mode!="add") { echo 'value="'.$vehiculeChoisi->getImmat().'"';} 
    if($mode=="cons"||$mode=="del") echo 'disabled';?>/>
</div>
<div class="fin">
    <label for="capacite"><?php echo texte("capacite")?></label>
    <input name="capacite" <?php if ($mode!="add") {echo 'value="'.$vehiculeChoisi->getCapacite().'"'; }
    if ($mode=="del" || $mode=="cons") echo 'disabled'; ?>/>
</div class="fin">
<div class="center padConex">
<?php
switch($mode)
{
    case"add":
    {
        echo'<button type="submit">'.texte("ajvehicule").'</button>';
        break;
    }
    case "upd": 
    {
        echo'<button type="submit">'.texte("modifveh").'</button>';
        break;
    }
    case "del":
    {
        echo'<button type="submit">'.texte("suppveh").'</button>';
        break;
    }
}
echo '<button><a href="index.php?codePage=listevehicules">'.texte("retour").'</a></button>
</div>
</form>';
echo '</div>';
echo '<div></div>';
echo '</div>';
?>