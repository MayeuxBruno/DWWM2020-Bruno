<?php
$mode=$_GET['mode'];

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
    <input name="libelleProduit" <?php if ($mode!="add") { echo 'value="'.$produitChoisi->getLibelleProduit().'"';} 
    if($mode=="cons"||$mode=="del") echo 'disabled';?>/>
</div>
<div>
    <label for="prix">Prix</label>
    <input name="prix" <?php if ($mode!="add") {echo 'value="'.$produitChoisi->getPrix().'"'; }
    if ($mode=="del" || $mode=="cons") echo 'disabled'; ?>/>
</div>
<div>
    <label for="dateDePeremption">Date de peremption</label>
    <input name="dateDePeremption" <?php if ($mode!="add") { echo 'value="'.$produitChoisi->getDateDePeremption().'"';} 
    if($mode=="cons"||$mode=="del") echo 'disabled';?>/>
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
<?php
/*$mode=$_GET['mode'];
$code=$_GET['code'];
if(isset($_GET['id']))
{
    $id=$_GET['id'];

    $produit=ProduitsManager::findById($id);
    $idProduit=$produit->getIdProduit();
    $libelle=$produit->getLibelleProduit();
    $prix=$produit->getPrix();
    $date=$produit->getDateDePeremption();
}


if($mode=="add")
{
    $libelle=$prix=$date="";
    $methode='<form method="post" action="index.php?code=ajj">';
    $boutons='
    <div></div>
    <div class="bouton vertclair demi"><a href="index.php">Retour</a></div>
    <div><input class="bouton orange" type="submit" value="Ajouter">
    <div></div>';
    }
    else if ($mode=="upd")
    {
        $methode='<form method="post" action="index.php?code=modif">
                <input class="cache" type="text" name="idProduit" value="'.$idProduit.'"/>';
        $boutons='
        <div></div>
        <div class="bouton vertclair demi"><a href="index.php">Retour</a></div>
        <div><input class="bouton orange" type="submit" value="Modifier">
        <div></div>';
    }
    else if ($mode=="cons")
    {
        $methode='<form method="post"">';
        $boutons='<div class="bouton vertclair"><a href="index.php">Retour</a></div>';
    }

        


   <div class="espacehor"></div>
     '.$methode.'
     
        <div class="ligne">
        <div></div>
        <div class="bouton blanc">Nom</div>
        <div class="bouton vertclair"><input type="text" name="libelleProduit" value="'.$libelle.'"/></div>
        <div></div>
        </div>
        <div class="ligne">
        <div></div>
        <div class="bouton blanc">Prix</div>
        <div class="bouton vertclair"><input type="text" size="6" name="prix"value="'.$prix.'">&nbsp;€</div>
        <div></div>
        </div>
        <div class="ligne">
        <div></div>
        <div class="bouton blanc">Date de peremption</div>
        <div class=echo '<div class="colonne">
  "bouton vertclair"><input type="text" name="dateDePeremption" value="'.$date.'"/></div>
        <div></div>
        </div>
        <div class="espacehor"></div>
        <div>
        '.$boutons.'
        </div>
     </form>
     </div>';*/
?>