<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="memory.css">
</head>
<body>
    
    <?php
    echo'<div class="page">';
    for($a=1;$a<9;$a++){
        $photo[]=$a;
        $photo[]=$a;
    }
    echo'<header class="colonne">
            <div class="espacehor"></div>
            <div class="centre"><h1>Jeu de memory</h1></div>
            <div class="espacehor"></div>
            <div class="menu">
                <button id="solo">Mode solitaire</button>
                <button id="multi">Mode Multijoueur</button>
                <button id="debPartie">Commencer la Partie</button>
                <input id="temps" value="Il vous reste 120 secondes">
                <input id="nbClick">
                <input id="tour">
                <input id="scoreJ1">
                <input id="scoreJ2">
                <button id="solution">Solution</button>
                <button id="reset">Rejouer</button>
            </div>
        </header>
        <div class="espacehor"></div>
        <div class="espacehor"></div>';
    $compteur=1;
    for($i=1;$i<5;$i++)
    {
        echo'<div class="espacehor"></div>
        <div class="ligne">
        <div></div>';
        
        for($j=1;$j<5;$j++)
        {
            $index=array_rand($photo);
            $numphoto=$photo[$index];
            echo'<div class="case" name="'.$compteur.'">
            <img class="recto"  src="Images/plage.jpg" alt="">
            <img class="verso" src="Images/'.$numphoto.'.jpg" alt="">
            </div>
            <div></div>';
            unset($photo[$index]);
            $compteur++;
        }
        echo'</div>';
    }
    echo'</div>';
    ?> 
    <script src="script.js"></script>
</body>
</html>