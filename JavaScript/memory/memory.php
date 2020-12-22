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
    
    
    for($i=1;$i<5;$i++)
    {
        echo'<div class="espacehor"></div>
        <div class="ligne">
        <div class="demi"></div>';
        for($j=1;$j<5;$j++)
        {
            $index=array_rand($photo);
            $numphoto=$photo[$index];
            echo'<div class="case">
            <img class="recto" src="Images/plage.jpg" alt="">
            <img class="verso" src="Images/'.$numphoto.'.jpg" alt="">
            </div>
            <div class="demi"></div>';
            unset($photo[$index]);
        }
        echo'</div>';
    }
    echo'</div>';
    ?> 
    
</body>
</html>