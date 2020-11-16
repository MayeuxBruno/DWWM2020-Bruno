<?php

include "head.php";
include "header.php";
include "listeEmploye.php";

$idRecherche = $_GET['id'];

foreach ($e as $employe)
{
    if($employe->getIdEmploye()==$idRecherche)
    {
        echo'<div class="container colonne">
              <div class="centre"><h3>'.$employe->getNom().' '.$employe->getPrenom().'</h3></div>';
        echo '<div class="information">
              <div></div>
              <div class="titre centre"><h2>Informations</h2></div>
              <div class="liste">
                <ul>
                    <li> Embauché le :'.$employe->getDateEmbauche()->format('d-m-Y').'</li>
                    <li> Poste : '.$employe->getFonction().'</li>
                    <li> Salaire : '.$employe->getSalaireAnnuel().' K€</li>
                </ul>
              </div>
              <div></div>
        </div>';

        echo '<div class="Agence">
              <div></div>
              <div class="titre centre"><h2>Poste</h2></div>
                <div class="liste">
                    <ul>
                        <li>'.$employe->getAgence()->getNom().'</li>
                        <li>'.$employe->getAgence()->getAdresse().'</li>
                        <li>'.$employe->getAgence()->getCodePostal().' '.$employe->getAgence()->getVille().'</li>
                    </ul>
                </div>
                <div></div>
            </div>';

        echo '<div class="Poste">
              <div></div>
              <div class="titre centre"><h2>Poste</h2></div>
              <div class="liste">
                <ul>
                    <li>'.$employe->getService().'</li>
                 </ul>
              </div>
              <div></div>
        </div>';

        if($employe->getEnfants()!=NULL)
        {
            echo '<div class="Enfant">
                <div></div>    
                <div class="titre centre"><h2>Enfant(s)</h2></div>
                <div class="liste">
                <ul>';
                foreach($employe->getEnfants() as $enfant)
                {
                     echo'<li>'.$enfant->getNom().' '.$enfant->getPrenom().' '.$enfant->getAge().'</li>';
                }
                 echo'</ul>
                </div>
                <div></div>  
            </div>';
        }
    }
}
echo '<a class="centre" href="index.php">Retour</a>
</div>';


include "footer.php";