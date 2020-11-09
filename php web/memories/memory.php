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
    $photo=array();
    $num=1;
    for($a=0;$a<16;$a+=2){
        $photo[$a]=$num;
        $photo[$a+1]=$num;
        $num++;
    }
    
    echo'<div class="titre">Jeu de Memory</div>';
    
    for($i=1;$i<5;$i++)
    {
        echo'<div class="espacehor"></div>
        <div class="ligne">
        <div class="vide"></div>';
        
        for($j=1;$j<5;$j++)
        {
            $index=array_rand($photo);
            $numphoto=$photo[$index];
            echo'<div class="case">
            <img class="recto" src="Images/plage.jpg" alt="">
            <img class="verso" src="Images/'.$numphoto.'.jpg" alt="">
            </div>
            <div class="vide"></div>';
            unset($photo[$index]);
        }
        echo'</div>
        <div class="vide"></div>';
    }
    ?> 
    
</body>
</html>