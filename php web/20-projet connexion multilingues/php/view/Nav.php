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
<nav class="space fondform padConex">
<?php
if (isset($_SESSION['utilisateur']))
{
    if($_SESSION['utilisateur']->getRoleUser()==2)
    {
        echo'<button><a href="index.php?codePage=admin">Administrateur</a></button>';
    }
    echo'<button><a href="index.php?codePage=user">Utilisateur</a></button>';
}
?>
<div>
<div class="fin"><a href="<?php echo $uri;?>lang=FR">FR</a> - <a href="<?php echo $uri;?>lang=EN">EN</a></div>
</div>
</nav>