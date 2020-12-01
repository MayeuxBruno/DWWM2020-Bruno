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
switch($mode)
{
    case"add":
    {
        echo'<form method="post" action="index.php?code=actionvehicule&mode=ajout">';
        break;
    }
    case "upd": 
    {
        echo'<form method="post" action="index.php?code=actionvehicule&mode=modif">
             <input name="idVehicule" value="'.$vehiculeChoisi->getIdVehicule().'" type="hidden"/>';
        break;
    }
    case "del":
    {
        echo'<form method="post" action="index.php?code=actionvehicule&mode=delete">
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
<div>
    <label for="noParc">Numéro de parc</label>
    <input name="noParc" <?php if ($mode!="add") {echo 'value="'.$vehiculeChoisi->getNoParc().'"'; }
    if ($mode=="del" || $mode=="cons") echo 'disabled'; ?>/>
</div>
<div>
    <label for="marque">Marque</label>
    <input name="marque" <?php if ($mode!="add") { echo 'value="'.$vehiculeChoisi->getMarque().'"';} 
    if($mode=="cons"||$mode=="del") echo 'disabled';?>/>
</div>
<div>
    <label for="modele">Modele</label>
    <input name="modele" <?php if ($mode!="add") {echo 'value="'.$vehiculeChoisi->getModele().'"'; }
    if ($mode=="del" || $mode=="cons") echo 'disabled'; ?>/>
</div>
<div>
    <label for="immat">Numéro d'immatriculation</label>
    <input type="text" name="immat" <?php if ($mode!="add") { echo 'value="'.$vehiculeChoisi->getImmat().'"';} 
    if($mode=="cons"||$mode=="del") echo 'disabled';?>/>
</div>
<div>
    <label for="capacite">Capacité</label>
    <input name="capacite" <?php if ($mode!="add") {echo 'value="'.$vehiculeChoisi->getCapacite().'"'; }
    if ($mode=="del" || $mode=="cons") echo 'disabled'; ?>/>
</div>

<?php
switch($mode)
{
    case"add":
    {
        echo'<button type="submit">Ajouter le véhicule</button>';
        break;
    }
    case "upd": 
    {
        echo'<button type="submit">Modifier le véhicule</button>';
        break;
    }
    case "del":
    {
        echo'<button type="submit">Supprimmer le véhicule</button>';
        break;
    }
}
echo '<button><a href="index.php?codePage=listevehicules">Retour</a></button>
</form>';
?>