<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Titre</title>
</head>
<body>
    <div class="colonne">
        <div class="espacehor"></div>
        <div>
            <div></div>
            <div class="colonne">
                <form id="form" action="" method="POST">
                    <fieldset>
                        <legend>Vos Coordonnées</legend>
                            <div class="champs">
                                <div><label for="nom">Nom:</label></div>
                                <div><input name="nom" type="text" required><span></span></div>
                                
                            </div>
                            <div class="champs">
                                <div><label for="prenom">Prenom:</label></div>
                                <div><input name="prenom" type="text" required><span></span></div>
                            </div>
                            <div class="champs">
                                <div><label for="cp">Code Postal:</label></div>
                                <div><input name="cp" type="number"><span></span></div>
                            </div>
                            <div class="champs">
                                <div><label for="dateNaissance">Date de Naissance:</label></div>
                                <div><input name="dateNaissance" type="date" required><span></span></div>
                            </div>
                                <div class="champs centre"><input type="submit" value="Envoyer"></div>
                    </fieldset>
                </form>
                <div class="centre champs" id="erreur"></div>
            </div>
            <div></div>
        </div>
    </div>
    <script src="script.js"></script>
</body>
</html>	