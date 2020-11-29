<div class="espacehor"></div>
<div>
    <div class="vide"></div>
    <div class="colonne fondform bordure">
        <div>
            <form action="index.php?codePage=actioncompte&mode=new" method="POST">
        </div>
        <div class="padConex">    
            <div class="center"><label for="nomUser">Nom :</label></div>
            <div><input name="nomUser" type="text" /></div>
        </div>
        <div class="padConex">
            <div class="center"><label for="prenomUser">Prenom :</label></div> 
            <div><input name="prenomUser" type="text" /></div>
        </div>
        <div class="padConex">    
            <div class="center"><label for="mailUser">Mail :</label></div>
            <div><input name="mailUser" type="text" /></div>
        </div>
        <div class="padConex">
            <div class="center"><label for="pseudoUser">Pseudo :</label></div>
            <div><input name="pseudoUser" type="text" /></div>
        </div>
        <div class="padConex">
            <div class="center"><label for="passwordUser">Mot de Passe :</label></div>
            <div><input name="passwordUser" type="text" /></div>
        </div>
        <div class="center padConex">
            <input name="roleUser"  value="user" type="hidden"/>
            <button type="submit">Creer</button>
        </div>
        </form>
        <div class="center padConex"><button><a href="index.php?codePage=connexion">Retour</a></button></div>
    </div>
    <div class="vide"></div>
</div>