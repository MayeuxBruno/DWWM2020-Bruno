<?php
$mode=$_GET['mode'];

if (isset($_GET['id']))
{
    $idRecu=$_GET['id'];
    if($idRecu!=false)
    {
        $categorieChoisi=CategoriesManager::findById($idRecu);
    }
}
switch($mode)
{
    case"add":
    {
        echo'<form method="post" action="index.php?code=actionCategorie&mode=ajout">';
        break;
    }
    case "upd": 
    {
        echo'<form method="post" action="index.php?code=actionCategorie&mode=modif">
             <input name="idCategorie" value="'.$categorieChoisi->getIdCategorie().'" type="hidden"/>';
        break;
    }
    case "del":
    {
        echo'<form method="post" action="index.php?code=actionCategorie&mode=delete">
             <input name="idCategorie" value="'.$categorieChoisi->getIdCategorie().'" type="hidden"/>';
        break;
    }
    case "cons":
    {
        echo'<form>
             <input name="idCategorie" value="'.$categorieChoisi->getIdCategorie().'" type="hidden"/>';
        break;
    }
}
?>

<div>
    <label for="LibelleCategorie">Libelle : </label>
    <input name="LibelleCategorie" <?php if ($mode!="add") { echo 'value="'.$categorieChoisi->getLibelleCategorie().'"';} 
    if($mode=="cons"||$mode=="del") echo 'disabled';?>/>
</div>

<?php
switch($mode)
{
    case"add":
    {
        echo'<button type="submit">Ajouter une categorie</button>';
        break;
    }
    case "upd": 
    {
        echo'<button type="submit">Modifier une categorie</button>';
        break;
    }
    case "del":
    {
        echo'<button type="submit">Supprimmer une categorie</button>';
        break;
    }
}
echo '<button><a href="index.php?code=categories">Retour</a></button>
</form>';
?>