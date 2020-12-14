<?php
$mode=$_GET['mode'];

if (isset($_GET['id'])) {
    $prod = ProduitsManager::findById($_GET['id']);
    $idCateg = $prod->getIdCategorie();
}

$listeCategorie=CategoriesManager::getList();
if (isset($_GET['id']))
{
    $idRecu=$_GET['id'];
    if($idRecu!=false)
    {
        $produitChoisi=ProduitsManager::findById($idRecu);
    }
}
switch($mode)
{
    case"add":
    {
        echo'<form method="post" action="index.php?code=actionProduit&mode=ajout">';
        break;
    }
    case "upd": 
    {
        echo'<form method="post" action="index.php?code=actionProduit&mode=modif">
             <input name="idProduit" value="'.$produitChoisi->getIdProduit().'" type="hidden"/>';
        break;
    }
    case "del":
    {
        echo'<form method="post" action="index.php?code=actionProduit&mode=delete">
             <input name="idProduit" value="'.$produitChoisi->getIdProduit().'" type="hidden"/>';
        break;
    }
    case "cons":
    {
        echo'<form>
             <input name="idProduit" value="'.$produitChoisi->getIdProduit().'" type="hidden"/>';
        break;
    }
}
?>

<div>
    <label for="libelleProduit">Nom</label>
    <input name="libelleProduit" <?php if ($mode!="add") { echo 'value="'.($produitChoisi->getLibelleProduit()).'"';} 
    if($mode=="cons"||$mode=="del") echo 'disabled';?>/>
</div>
<div>
    <label for="prix">Prix</label>
    <input name="prix" <?php if ($mode!="add") {echo 'value="'.$produitChoisi->getPrix().'"'; }
    if ($mode=="del" || $mode=="cons") echo 'disabled'; ?>/>
</div>
<div>
    <label for="dateDePeremption">Date de peremption</label>
    <input type="date" name="dateDePeremption" <?php if ($mode!="add") { echo 'value="'.$produitChoisi->getDateDePeremption()->format('Y-m-d').'"';} 
    if($mode=="cons"||$mode=="del") echo 'disabled';?>/>
</div>
<div>
    <label for="idCategorie">Categorie</label>
    <select name="idCategorie">
    <?php
    
    foreach ($listeCategorie as $uneCategorie)
    {
        $sel="";
        if ($uneCategorie->getIdCategorie() == $idCateg)
        {

            $sel ="selected";
        }
        var_dump($uneCategorie->getLibelleCategorie());
        echo '<option value="'.$uneCategorie->getIdCategorie().'" '.$sel.' >'.$uneCategorie->getLibelleCategorie().'</option>';
    }
    ?>
    </select>
    
</div>
<?php
switch($mode)
{
    case"add":
    {
        echo'<button type="submit">Ajouter un Produit</button>';
        break;
    }
    case "upd": 
    {
        echo'<button type="submit">Modifier un Produit</button>';
        break;
    }
    case "del":
    {
        echo'<button type="submit">Supprimmer un Produit</button>';
        break;
    }
}
echo '<button><a href="index.php?code=liste">Retour</a></button>
</form>';
?>