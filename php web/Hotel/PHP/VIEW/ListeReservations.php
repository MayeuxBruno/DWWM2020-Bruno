<?php
     $tableau=ReservationsManager::getList();
     echo'<div class="colonne">
          <div class="espacehor"></div> 
          <div class="lingne">
               <div></div>
               <div class="celule entete justify">Nom du Client</div>
               <div class="celule entete justify">Prénom du client</div>
               <div class="celule entete justify">Date de Réservation</div>
               <div class="celule entete justify"></div>
               <div></div>
            </div>';
     foreach($tableau as $uneReservation)
     {
     echo '<div class="lingne">
               <div></div>
               <div class="celule">'.ClientsManager::findById($uneReservation->getIdClient())->getNomClient().'</div>
               <div class="celule">'.ClientsManager::findById($uneReservation->getIdClient())->getPrenomClient().'</div>
               <div class="celule">'.$uneReservation->getDateReservationSejour().'</div>

               <div class="celule space">
                    <a href="index.php?page=formUtilisateurs&mode=detail&id='.$uneReservation->getIdReservation().'"><button>'.texte("consulter").'</button></a>
                    <a href="index.php?page=formUtilisateurs&mode=modif&id='.$uneReservation->getIdReservation().'"><button>'.texte("modifier").'</button></a>
                    <a href="index.php?page=formUtilisateurs&mode=suppr&id='.$uneReservation->getIdReservation().'"><button>'.texte("supprimer").'</button></a>
               </div>
               <div></div>
               </div>';
     }
     echo'</div>
          <div class="espacehor"></div>
          <div>
          <div></div>
          <a href="index.php?page=formUtilisateurs&mode=ajout"><div class="bouton vertclair">'.texte("AjoutUtilisateur").'</div></a>
          <div></div>
          </div>';
?>