<?php
echo '<nav class="space fondform padConex">';
if (isset($_SESSION['utilisateur']))
{
    if($_SESSION['utilisateur']->getRoleUser()==2)
    {
        echo'<button><a href="index.php?codePage=admin">Administrateur</a></button>';
    }
    echo'<button><a href="index.php?codePage=user">Utilisateur</a></button>';
}
echo'<div>';
echo'<div><a href="">FR</a> - <a href="">EN</a></div>';
echo'</div>';
echo '</nav>';