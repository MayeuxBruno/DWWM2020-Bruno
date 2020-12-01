<?php
echo'
<div class="espacehor"></div>
<div>
    <div class="vide"></div>
    <div class="colonne fondform bordure">
        <div>
            <form action="index.php?codePage=actioncompte&mode=new" method="POST">
        </div>
        <div class="padConex">    
            <div class="center"><label for="nomUser">'.texte("nom")." :".'</label></div>
            <div><input name="nomUser" type="text" required/></div>
        </div>
        <div class="padConex">
            <div class="center"><label for="prenomUser">'.texte("prenom")." :".'</label></div> 
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
            <div class="center"><label for="passwordUser">'.texte("motDePasse")." :".'</label></div>
            <div><input name="passwordUser" type="password" required/></div>
        </div>
        <div class="padConex">
            <div class="center"><label for="confirmationMdp">'.texte("confirmation")." :".'</label></div>
            <div><input name="confirmationMdp" type="password" required/></div>
        </div>
        <div class="padConex">
            <div class="center"><label for="roleUser">'.texte("role")." :".'</label></div>
            <div><select name="roleUser">
            <option value="1">'.texte("utilisateur").'</option>
            <option value="2">'.texte("administrateur").'</option>
            </select>
            </div>
        </div>
        <div class="center padConex">
            <button type="submit">'.texte("creerCompte").'</button>
        </div>
        </form>
        <div class="center padConex"><button><a href="index.php?codePage=connexion">'.texte("retour").'</a></button></div>
    </div>
    <div class="vide"></div>
</div>';
?>