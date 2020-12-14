<div class="espacehor"></div>
<div>
    <div class="vide"></div>
    <div class="colonne fondform bordure">
        <form  action="index.php?page=actionCompte&mode=connexion" method="POST">
            <div class="fin padForm">
                <label for="pseudoUser">Pseudo :</label>
                <input name="pseudoUser" type="text" required/>
            </div>
            <div class="fin padForm">
                <?php echo'<label for="passwordUser">'.texte("motDePasse")." :".'</label>';?>
                <input name="passwordUser" type="password"required/>
            </div>
           <?php echo'<div class="justify padForm"><button type="submit">'.texte("connexion").'</button></div>
        </form>
        <div class="justify padForm"><button><a href="index.php?page=formUtilisateurs&mode=creer">'.texte("inscription").'</a></button></div>';
        ?>
    </div>
    <div class="vide"></div>
</div>


