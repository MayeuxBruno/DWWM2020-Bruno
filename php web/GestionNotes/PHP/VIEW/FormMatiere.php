<?php
$mode = $_GET['mode'];
if (isset($_GET['id']))  
{
    $idRecu = $_GET['id'];
    if ($idRecu != false)
    {
        $matiereChoisi = MatiereManager::findById($idRecu);
    }
}
?>
<div class="page">
<div class="titre colonne">
    <div>
        <div></div>
        <div class="colonne">
        <?php    
        switch ($mode)
            {
                case "ajout": 
                    echo '<form action="index.php?page=actionMatiere&mode=ajout" method="POST">';
                break;

                case "modif": 
                    echo '<form action="index.php?page=actionMatiere&mode=modif" method="POST">
                    <input name="idMatiere"  value="' . $matiereChoisi->getIdMatiere() . '" type="hidden" />';
                break;

                case "suppr":    
                    echo '<form action="index.php?page=actionMatiere&mode=suppr" method="POST">
                    <input name="idMatiere"  value="' . $matiereChoisi->getIdMatiere() . '" type="hidden" />';
                break;
                
            }
            ?>
            <form action="index.php?page=actionMatiere&mode=ajout" method="POST">
            <div>
                <div></div>
                <div><lable for="LibelleMatiere">Nom:</input></div>
                <div><input type="text" name="LibelleMatiere"<?php if($mode!="ajout"){echo 'value="'.$matiereChoisi->getLibelleMatiere().'"';} if($mode=="suppr")echo"disabled"; ?>/></div>
                <div></div>
            </div>
            <div class="vide"></div>
            <div class="vide"></div>
            <div>
                <div></div>
                <div>
                <?php
                        switch ($mode)
                        {
                           case "ajout":    
                                echo '    <button type="submit">Ajouter</button>';
                            break;
                        
                            case "modif":   
                                echo '    <button type="submit">Modifier</button>';
                            break;
                        
                            case "suppr":    
                                echo '    <button type="submit">Supprimer</button>';
                            break;
                        
                        }
                    ?>
                    </form>
                </div>
                <div></div>
                <div><button type="reset"><a class="align" href="index.php?page=listeMatieres">Retour</button></a></div>
                <div></div>
                
            </div>
        </div>
        <div></div>
        
    </div>
</div>
</div>