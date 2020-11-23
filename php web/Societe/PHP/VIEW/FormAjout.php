
<div class="espacehor"></div>
<div class="conteneur colonne">
<form action="index.php?code=ajout" method="post">
    <div>
        <label for="nom">Nom : </label>
        <input type="text" name="nom" />
    </div>
    <div>
        <label for="prenom">Prenom : </label>
        <input type="text" name="prenom" />
    </div>
    <div>
        <label for="pupitre">Pupitre : </label>
        <!--<input type="text" name="pupitre" /> -->
        <br>
        <select name="pupitre">
            <option value="1">Flute</option>
            <option value="2">Clarinette</option>
            <option value="3">Sax Alto</option>
            <option value="4">Sax Tenor</option>
            <option value="5">Sax Bar</option>
            <option value="6">Trompette</option>
            <option value="7">Cor</option>
            <option value="8">Percussion</option>
        </select>
    </div>
    <div>
        <label for="fonction">Fonctio : </label>
        <input type="text" name="fonction" />
    </div>
    <div class="espaceh"></div>
    <div>
        <button class="vert" type="submit">Ajouter</button>
        <button class="orange" type="submit"><a href="index.php?code=liste">Retour</a></button>
    </div>
</form>
</div>