<section class="colonne">
<div class="espaceHor"></div>
<div>
<?php
        $idFormateur=2;
        $lesFormations=AnimationManager::getByUtilisateur($idFormateur);
        echo'<div class="infos"><select id="selectFormation">';
        if (count($lesFormations)>1)
        {
            echo'<option value="default" selected>Selectionnez une formation</option>';
            foreach($lesFormations as $uneFormation)
            {
                $idFormation=$uneFormation->getIdFormation();
                $libelleFormation=FormationsManager::findById($idFormation)->getLibelleFormation();
                echo'<option value="'.$idFormation.'">'.$libelleFormation.'</option>';
            }
        }
        else
        {
            $idFormation=$lesFormations[0]->getIdFormation();
            $libelleFormation=FormationsManager::findById($idFormation)->getLibelleFormation();
            echo'<option value="'.$idFormation.'" selected >'.$libelleFormation.'</option>';
        }
        echo'</select></div>';
    ?>
    
    <div><select id="selectSession">
    </select></div>
    </div>
<div class="espaceHor"></div>
<div>
    <div class="demi"></div>
    <div class="bouton" id="Liste">Liste des stagiaires</div>
    <div class="demi"></div>
    <div class="bouton" id="Objectifs">Objectifs P.A.E</div>
    <div class="demi"></div>
</div>
<div class="espaceHor"></div>
<div class="colonne" id="Affichage">
    <div>MAYEUX Bruno</div>
    <div>MAYEUX Bruno</div>
</div>
</section>