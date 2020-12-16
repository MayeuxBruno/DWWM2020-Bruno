<div class="espacehor"></div>
<div>
    <div class="vide"></div>
    <div class="colonne fondform">
        <form  action="index.php?page=actionCompte&mode=connexion" method="POST">
            <div class="fin padForm">
                <label for="Login">Pseudo :</label>
                <input name="Login" type="text" required/>
            </div>
            <div class="fin padForm">
                <?php echo'<label for="MotDePasse">Mot De Passe : </label>';?>
                <input name="MotDePasse" type="password"required/>
            </div>
            <div>
           <?php echo'<div class="justify padForm"><button type="submit">Connexion</button></div>
           </div>
           </form>';
        
        ?>
    </div>
    <div class="vide"></div>
    
</div>
<div class="espacehor"></div>


