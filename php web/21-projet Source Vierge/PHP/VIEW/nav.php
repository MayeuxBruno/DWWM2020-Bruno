<?php

?>
<nav class="fondform padConex">
<div>
<div></div>
<div class="space">    
<?php
if (isset($_SESSION['utilisateur']))
{
    if($_SESSION['utilisateur']->getRoleUser()==2)
    {
        echo'<button><a href="index.php?codePage=admin">'. texte("administrateur").'</a></button>';
    }
    echo'<button><a href="index.php?codePage=user">'. texte("utilisateur").'</a></button>';
}
?>
</div>
<div>
<div class="fin"><a href="<?php echo uri();?>lang=FR">FR</a> - <a href="<?php echo uri();?>lang=EN">EN</a></div>
</div>
</nav>