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
                        <div class="champs">Les champs ( <span class="rouge">*</span> ) sont obligatoires</div>
                            <div class="champs">
                                <div><label for="nom">Nom:</label></div>
                                <div><input class="checkinput" name="nom" type="text" pattern="[a-zA-Z '-]{3,}" required><div></div></div>
                                <div class="infobulle">
                                    <div class="infobulle-texte" id="aide-nom">Entrez ici votre nom de famille</div>
                                    <div><img src="point.png" class="infobulle-icone"></div>

                                    <div></div>
                                </div>
                                <div class="logo"></div>
                                <div class="logo">
                                    <img id="nomKo" src="croix.png">
                                </div>
                            </div>
                            <div class="champs">
                                <div><label for="prenom">Prenom:</label></div>
                                <div><input class="checkinput" name="prenom" type="text" pattern="[a-zA-Z '-]{3,}" required><div></div></div>
                                <div class="infobulle">
                                    <div class="infobulle-texte" id="aide-nom">Entrez ici votre prénom</div>
                                    <div><img src="point.png" class="infobulle-icone"></div>
                                    <div></div>
                                </div>
                                <div class="logo"></div>
                                <div class="logo">
                                    <img id="prenomKo" src="croix.png">
                                </div>
                            </div>
                            <div class="champs">
                                <div><label for="cp">Code Postal:</label></div>
                                <div><input class="checkinput" name="cp" type="text" pattern="\d{5}" required><div></div></div>
                                <div class="infobulle">
                                    <div class="infobulle-texte" id="aide-nom">Entrez ici votre code postal sur 5 chiffres</div>
                                    <div><img src="point.png" class="infobulle-icone"></div>
                                    <div></div>
                                </div>
                                <div class="logo"></div>
                                <div class="logo">
                                    <img id="cpKo" src="croix.png">
                                </div>
                            </div>
                            <div class="champs">
                                <div><label for="dateNaissance">Date de Naissance:</label></div>
                                <div><input class="checkinput" name="dateNaissance" type="date" pattern="^[0-9]" required><div></div></div>
                                <div class="infobulle">
                                    <div class="infobulle-texte" id="aide-nom">Entrez ici votre date de naissance</div>
                                    <div><img src="point.png" class="infobulle-icone"></div>
                                    <div></div>
                                </div>
                                <div class="logo"></div>
                                <div class="logo">
                                    <img id="dateKo" src="croix.png">
                                </div>
                            </div>
                                <div class="champs centre"><input id="submit" type="submit" value="Envoyer"></div>
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