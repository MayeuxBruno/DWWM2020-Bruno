<section class="colonne">
<div class="espaceHor"></div>
<div>
<?php
        $idFormateur=6;
        $lesFormations=AnimationsManager::getByUtilisateur($idFormateur);
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
    <option value="defaut">Aucune Session à Afficher</option>
    </select></div>
    </div>
<div class="espaceHor"></div>
<div>
    <div><a class="bouton" id="liste">Liste des stagiaires</a></div>
    <div><a class="bouton" id="objectif">Objectifs P.A.E</a></div>
</div>
<div class="espaceHor"></div>
<div class="colonne" id="affichage">
</div>
</section>