<?php
require "./FPDF/fpdf.php";
$idStage=3;
$stage=StagesManager::findById($idStage);
$stagiaire=StagiairesManager::findById($stage->getIdStagiaire());
$infosSession=StagiaireFormationManager::getListByStagiaire($stagiaire->getIdStagiaire());
$tuteur=TuteursManager::findById($stage->getIdTuteur());
$entreprise=EntreprisesManager::findById($tuteur->getIdEntreprise());
$ville=VillesManager::findById($entreprise->getIdVille());

//var_dump($stagiaire);
//var_dump($infosSession);
//var_dump($stage);
//var_dump($tuteur);
//var_dump($entreprise);

function formatDate($date){
    
    $annee = substr($date, 0, 4);
    $mois = substr($date, 5, 2);
    $jour = substr($date, 8, 2);

    return $jour.'/'.$mois.'/'.$annee;

}
//var_dump($stagiaire);
//var_dump($infosSession);
// On active la classe une fois pour toutes les pages suivantes
// Format portrait (>P) ou paysage (>L), en mm (ou en points > pts), A4 (ou A5, etc.)
$pdf = new FPDF('P','mm','A4');

// Nouvelle page A4 (incluant ici logo, titre et pied de page)
$pdf->AddPage();
$pdf->SetMargins(10,20,10);
$pdf->Image("./IMG/logoAfpa.jpg",160,25,26.5,14);
$pdf->SetFont('Arial','B',9);
$pdf->Text(55,27,utf8_decode("AFPA"));
$pdf->SetFont('Arial','',9);
$pdf->Text(55,31,utf8_decode("Centre de formation professionnelle des adultes de Dunkerque"),"");
$pdf->SetFont('Arial','B',8);
$pdf->Text(55,35,utf8_decode("www.afpa.fr"),"");
$pdf->Image("./IMG/HDF.jpg",40,45,20,12);
$pdf->Image("./IMG/UEFSE.jpg",65,45,20,15);
$pdf->Image("./IMG/leuropesengage.png",90,45,20,15);
$pdf->Image("./IMG/fondsParitaire.jpg",115,45,20,11);
$pdf->Image("./IMG/UEJeune.jpg",140,45,13,13);
$pdf->Ln(53);
$pdf->SetFont('Arial','B',16);
$pdf->Cell(0,8,"CONVENTION DE PERIODE EN ENTREPRISE","LTR",1,"C");
$pdf->SetFont('Arial','',7);
$pdf->Cell(0,4,"(Stage en entreprise hors statut scolaire ou universitaire)","LBR",1,"C");
$pdf->Ln();
$pdf->SetFont('Arial','B',9);

/************** Centre de formation  *************************/
$pdf->Cell(0,5,"Entre d'une part, l'Afpa",1,1,"L");
$pdf->SetFont('Arial','',9);
$pdf->Cell(88,5,utf8_decode("Domicilié en son établissement de "),"R",0,"R");
$pdf->Cell(0,5,utf8_decode(" Dunkerque"),0,1,"L");
$pdf->Cell(88,5,utf8_decode("Sis au "),"R",0,"R");
$pdf->Cell(0,5,utf8_decode(" 407 avenue de la Gironde, 59640, DUNKERQUE"),0,1,"L");
$pdf->Cell(88,5,utf8_decode("Représenté par "),"R",0,"R");
$pdf->Cell(0,5,utf8_decode(" FLORENCE MARTIN, en sa qualité de Directeur(trice) de centre"),0,1,"L");
$pdf->Ln();
$pdf->SetFont('Arial','B',9);

/************* Le stagiaire ****************************/
$pdf->Cell(88,5,"Le Stagiaire","LTB",0,"L");
$pdf->Cell(0,5,$stagiaire->getNumBenefStagiaire(),"RTB",1,"R");
$pdf->SetFont('Arial','',9);
$pdf->Cell(88,5,utf8_decode("Identité "),"R",0,"R");
$pdf->Cell(0,5,utf8_decode(" ".$stagiaire->getPrenomStagiaire()." ".strtoupper($stagiaire->getNomStagiaire())),0,1,"L");
$pdf->Cell(88,5,utf8_decode("Nom d'usage "),"R",0,"R");
$pdf->Cell(0,5,utf8_decode(" ".strtoupper($stagiaire->getNomStagiaire())),0,1,"L");
$pdf->Cell(88,5,utf8_decode("Né(e) le "),"R",0,"R");
$pdf->Cell(0,5,utf8_decode(" ".formatDate($stagiaire->getDateNaissanceStagiaire())),0,1,"L");
$pdf->SetFont('Arial','B',9);
$pdf->Cell(88,5,utf8_decode("Inscrit en formation "),"R",0,"R");
$pdf->SetFont('Arial','',9);
$pdf->Cell(0,5,utf8_decode(" ".$infosSession[0]->getLibelleFormation()),0,1,"L");
$pdf->Cell(88,5,utf8_decode("Depuis le "),"R",0,"R");
$pdf->Cell(0,5,utf8_decode(" ".formatDate($infosSession[0]->getDateDebut())),0,1,"L");
$pdf->Ln();
$pdf->SetFont('Arial','B',9);
$pdf->Cell(0,5,utf8_decode("Domiciliation pour la durée de la période en entreprise"),1,1,"L");
$pdf->SetFont('Arial','',9);
$pdf->Cell(88,5,utf8_decode("Adresse "),"R",0,"R");
$pdf->Cell(0,5," ",0,1,"L");
$pdf->Cell(88,5,utf8_decode("Ville "),"R",0,"R");
$pdf->Cell(0,5," ",0,1,"L");
$pdf->Cell(88,5,utf8_decode("Code Postal "),"R",0,"R");
$pdf->Cell(0,5," ",0,1,"L");
$pdf->Cell(88,5,utf8_decode("Téléphone "),"R",0,"R");
$pdf->Cell(0,5," ",0,1,"L");
$pdf->Cell(88,5,utf8_decode("Mail "),"R",0,"R");
$pdf->Cell(0,5,utf8_decode(" ".$stagiaire->getEmailStagiaire()),0,1,"L");
$pdf->Ln();
$pdf->SetFont('Arial','B',9);

/************ L'entreprise ***************/
$pdf->Cell(0,5,utf8_decode("Et d'autre part l'entreprise"),1,1,"L");
$pdf->Cell(88,5,utf8_decode("Raison sociale "),"R",0,"R");
$pdf->SetFont('Arial','',9);
$pdf->Cell(0,5," ".utf8_decode(strtoupper($entreprise->getRaisonSociale())),0,1,"L");
$pdf->Cell(88,5,utf8_decode("Forme sociale (Capital) "),"R",0,"R");
$pdf->Cell(0,5," ".$entreprise->getStatutJuridiqueEnt(),0,1,"L");
$pdf->Cell(88,5,utf8_decode("Domiciliée à l'effet des présentes en son établissement de "),"R",0,"R");
$pdf->Cell(0,5," ".$ville->getNomVille(),0,1,"L");
$pdf->Cell(88,5,utf8_decode("SIRET "),"R",0,"R");
$pdf->Cell(0,5," ".$entreprise->getNumSiretEnt(),0,1,"L");
$pdf->Cell(88,5,utf8_decode("Adresse "),"R",0,"R");
$pdf->Cell(0,5,utf8_decode(" ".strtoupper($entreprise->getAdresseEnt())),0,1,"L");
$pdf->Cell(88,5,utf8_decode("Ville "),"R",0,"R");
$pdf->Cell(0,5,utf8_decode(" ".strtoupper($ville->getNomVille())),0,1,"L");
$pdf->Cell(88,5,utf8_decode("Code Postal "),"R",0,"R");
$pdf->Cell(0,5,utf8_decode(" ".$ville->getCodePostal()),0,1,"L");
$pdf->SetFont('Arial','B',9);
$pdf->Cell(88,5,utf8_decode("Représenté par "),"R",0,"R");
$pdf->SetFont('Arial','',9);
$pdf->Cell(0,5,utf8_decode(" ".strtoupper($entreprise->getNomRepresentant())." ".strtoupper($entreprise->getPrenomRepresentant())),0,1,"L");
$pdf->Cell(88,5,utf8_decode("En qualité de "),"R",0,"R");
$pdf->Cell(0,5,utf8_decode(" ".strtoupper($entreprise->getFctRepresentant())),0,1,"L");
$pdf->Ln();
$pdf->SetFont('Arial','B',9);

/************ Le tuteur ***************/
$pdf->Cell(0,5,utf8_decode("Engagé en la personne du Tuteur qu'elle désigne :"),1,1,"L");
$pdf->Cell(88,5,utf8_decode("Identité "),"R",0,"R");
$pdf->SetFont('Arial','',9);
$pdf->Cell(0,5," ".utf8_decode(strtoupper($tuteur->getPrenomTuteur())." ".strtoupper($tuteur->getNomTuteur())),0,1,"L");
$pdf->Cell(88,5,utf8_decode("Nom d'usage "),"R",0,"R");
$pdf->Cell(0,5," ".strtoupper($tuteur->getNomTuteur()),0,1,"L");
$pdf->Cell(88,5,utf8_decode("Salarié en qualité de "),"R",0,"R");
$pdf->Cell(0,5," ".strtoupper($tuteur->getFonctionTuteur()),0,1,"L");
$pdf->Cell(88,5,utf8_decode("Qualification (éventuellemnt)"),"R",0,"R");
$pdf->Cell(0,5," ",0,1,"L");
$pdf->Cell(88,5,utf8_decode("Téléphone "),"R",0,"R");
$pdf->Cell(0,5,utf8_decode(" ".$tuteur->getTelTuteur()),0,1,"L");
$pdf->Cell(88,5,utf8_decode("Mail "),"R",0,"R");
$pdf->Cell(0,5,utf8_decode(" ".$tuteur->getEmailTuteur()),0,1,"L");
$pdf->SetFont('Arial','I',8);
$pdf->Cell(0,5,utf8_decode("Etant précisé que le tuteur demeure sous le pouvoir de direction de l'Entreprise d'Accueil, il vise et signe la convention "),0,1,"L");
$pdf->Cell(0,5,utf8_decode("pour preuve qu'il en a connaissance."),0,1,"L");

$pdf->AddPage();



$pdf->Output('F', './convention.pdf');
header("location:convention.pdf");



