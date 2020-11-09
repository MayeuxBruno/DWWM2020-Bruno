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
    for($a=0;$a<8;$a++){
        
    }
    for($i=1;$i<5;$i++)
    {
        echo'<div class="espacehor"></div>
        <div class="ligne">
        <div class="vide"></div>';
            for($j=1;$j<5;$j++)
            {
                $photo=rand(1,8);
                echo'<div class="case">
                <img class="recto" src="Images/plage.jpg" alt="">
                <img class="verso" src="Images/'.$photo.'.jpg" alt="">
                </div>
                <div class="vide"></div>';
            }
        echo'</div>
        <div class="vide"></div>';
    }
    ?> 
    
</body>
</html>