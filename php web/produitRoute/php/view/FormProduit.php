<?php

$mode=$_GET['mode'];
$code=$_GET['code'];
if(isset($_GET['id']))
{
    $id=$_GET['id'];
}

var_dump($mode);
?>

<div class="colonne">
     <div class="espacehor"></div>
     
     <form method="post" action="index.php?code=ajout">
        <div class="ligne">
        <div></div>
        <div class="bouton blanc">Nom</div>
        <div class="bouton vertclair"><input type="text" name="libelleProduit"/></div>
        <div></div>
        </div>
        <div class="ligne">
        <div></div>
        <div class="bouton blanc">Prix</div>
        <div class="bouton vertclair"><input type="text" size="6" name="prix"/>&nbsp;€</div>
        <div></div>
        </div>
        <div class="ligne">
        <div></div>
        <div class="bouton blanc">Date de peremption</div>
        <div class="bouton vertclair"><input type="text" name="dateDePeremption"/></div>
        <div></div>
        </div>
        <div class="espacehor"></div>
        <div>
        <!--<div></div>
        <div><input class="bouton vertclair" type="submit" value="ajouter">
        <div></div>-->
        <?php if($mode="add")
            {
                echo'<div class="bouton vertclair"><a href="index.php">Retour</a></div>';
            }
            else
            {
                echo'
                    <div></div>
                    <div class="bouton vertclair demi"><a href="index.php">Retour</a></div>
                    <div><input class="bouton orange" type="submit" value="Modifier">
                    <div></div>';

            }
     ?>
        </div>
     </form>
     </div>

     <div class="espacehor"></div>
     <?php if($mode="add")
            {
                echo'<div class="bouton vertclair"><a href="index.php">Retour</a></div>';
            }
            else
            {
                echo'<div>
                    <div></div>
                    <div class="bouton vertclair demi"><a href="index.php">Retour</a></div>
                    <div><input class="bouton orange" type="submit" value="Modifier">
                    <div></div>
                </div>';

            }
     ?>