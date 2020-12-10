<div class="espacehor"></div>
<div>
    <div class="vide"></div>
    <div class="colonne fondform bordure">
        <form  action="index.php?page=actioncompte&mode=connexion" method="POST">
            <div class="fin padConex">
                <label for="pseudoUser">Pseudo :</label>
                <input name="pseudoUser" type="text" required/>
            </div>
            <div class="fin padConex">
                <?php echo'<label for="passwordUser">'.texte("motDePasse")." :".'</label>';?>
                <input name="passwordUser" type="password"required/>
            </div>
           <?php echo'<div class="center padConex"><button type="submit">'.texte("connexion").'</button></div>
        </form>
        <div class="center padConex"><button><a href="index.php?page=formcreecompte">'.texte("inscription").'</a></button></div>';
        ?>
    </div>
    <div class="vide"></div>
</div>


