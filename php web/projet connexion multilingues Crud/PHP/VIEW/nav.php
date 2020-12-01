<?php
/* construction de l'url en fonction de l'uri existante  */
// var_dump($_SERVER);
$uri = $_SERVER['REQUEST_URI'];
if (substr($uri, strlen($uri) - 1) == "/") // se termine par /
{
    $uri .= "index.php?";
}
else if (in_array("?", str_split($uri))) // si l'uri contient deja un ?
{
    $uri .= "&";
}
else
{
    $uri .= "?";
}
?>
<nav class="fondform padConex">
<div>
<div></div>
<div class="center">    
<?php
if (isset($_SESSION['utilisateur']))
{
    if($_SESSION['utilisateur']->getRoleUser()==2)
    {
        echo'<button><a href="index.php?codePage=listeutilisateurs">'.texte("listeutilisateur").'</a></button>';
    }
    echo '<button><a href="index.php?codePage=listevehicules">'.texte("listeVehicule").'</button>';
}
?>

</div>
<div>
<div class="fin"><a href="<?php echo $uri;?>lang=FR">FR</a> - <a href="<?php echo $uri;?>lang=EN">EN</a></div>
</div>
</nav>