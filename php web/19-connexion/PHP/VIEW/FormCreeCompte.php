<div class="espacehor"></div>
<div>
    <div class="vide"></div>
    <div class="colonne fondform bordure">
        <div>
            <form action="index.php?codePage=actioncompte&mode=new" method="POST">
        </div>
        <div class="padConex">    
            <div class="center"><label for="nomUser">Nom :</label></div>
            <div><input name="nomUser" type="text" required/></div>
        </div>
        <div class="padConex">
            <div class="center"><label for="prenomUser">Prenom :</label></div> 
            <div><input name="prenomUser" type="text" required/></div>
        </div>
        <div class="padConex">    
            <div class="center"><label for="mailUser">Mail :</label></div>
            <div><input name="mailUser" type="text" required/></div>
        </div>
        <div class="padConex">
            <div class="center"><label for="pseudoUser">Pseudo :</label></div>
            <div><input name="pseudoUser" type="text" required/></div>
        </div>
        <div class="padConex">
            <div class="center"><label for="passwordUser">Mot de Passe :</label></div>
            <div><input name="passwordUser" type="password" required/></div>
        </div>
        <div class="padConex">
            <div class="center"><label for="confirmationMdp">Confirmation :</label></div>
            <div><input name="confirmationMdp" type="password" required/></div>
        </div>
        <div class="padConex">
            <div class="center"><label for="roleUser">Role Utilisateur :</label></div>
            <div><select name="roleUser">
                <option value="1">Utilisateur</option>
                <option value="2">Administrateur</option>
            </select>
            </div>
        </div>
        <div class="center padConex">
            <button type="submit">Creer le compte</button>
        </div>
        </form>
        <div class="center padConex"><button><a href="index.php?codePage=connexion">Retour à la page de connexion</a></button></div>
    </div>
    <div class="vide"></div>
</div>