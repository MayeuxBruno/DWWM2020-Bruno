<?php
require "./FPDF/fpdf.php";
// On active la classe une fois pour toutes les pages suivantes
// Format portrait (>P) ou paysage (>L), en mm (ou en points > pts), A4 (ou A5, etc.)
$pdf = new FPDF('P','mm','A4');
// Nouvelle page A4 (incluant ici logo, titre et pied de page)

$pdf->AddPage();
$pdf->Image('./IMG/logoAfpa.png',170,6,30);

// Polices par défaut : Helvetica taille 9
$pdf->setDrawColor(0,255,0);
$pdf->SetFont('Helvetica','',20);
// Couleur par défaut : noir
$pdf->SetTextColor(0);
// couleur de fond de la cellule : gris clair
$pdf->setFillColor(255,255,255);
$pdf->SetTextColor(146,208,80);

// Cellule avec les données 
$pdf->Cell(80,12,'FICHE DE RENSEIGNEMENTS ENTREPRISE',0,1,'L',1);    
$pdf->Write(6,"");   
$pdf->Ln(10); // saut de ligne 10mm
$pdf->AliasNbPages();
$pdf->Output('F', './test.pdf');
