<?php
require "./FPDF/fpdf.php";
$stagiaire=StagiairesManager::findById(1);
// On active la classe une fois pour toutes les pages suivantes
// Format portrait (>P) ou paysage (>L), en mm (ou en points > pts), A4 (ou A5, etc.)
$pdf = new FPDF('P','mm','A4');
// Nouvelle page A4 (incluant ici logo, titre et pied de page)
$pdf->AddPage();
$pdf->Image("./IMG/logoAfpa.jpg",170,5,26.5,14);
$pdf->SetFont('Helvetica','BIU',22);
$pdf->SetTextColor(97,191,26);
$pdf->Cell(75,6,"Fiche de Renseignement");
$pdf->Ln(10);
$pdf->SetFont('Helvetica',"",18);
$pdf->Cell(85,6,"Fiche de Renseignement");
$pdf->Ln(10);
$pdf->SetFont('Helvetica','',11);
$pdf->SetTextColor(255,0,0);
$pdf->Write(8,"Tout document non","");
$pdf->SetFont('Helvetica','BI',11);
$pdf->Write(8,utf8_decode(" rempli entièrement et correctement"),"");
$pdf->SetFont('Helvetica','',11);
$pdf->Write(8,utf8_decode(" ne sera pas traité et sera retourné au formateur"),"");
$pdf->Text(35,42,utf8_decode("Toutes les rubriques sont obligatoires pour permettre de créer la convention"));
$pdf->Ln(13);
$pdf->Write(8,utf8_decode("Demande à déposer"),"");
$pdf->SetFont('Helvetica','BI',11);
$pdf->Write(8,utf8_decode(" au minimum 1 semaine avant"),"");
$pdf->SetFont('Helvetica','',11);
$pdf->Write(8,utf8_decode(" le démarrage de la PAE auprès de l'administation"),"");
$pdf->SetTextColor(0,0,0);
$pdf->Rect(10,50,190,45,"D");
$pdf->SetFont('Helvetica','B',11);
$pdf->Write(8,utf8_decode("Stagiaire :"),"");
$pdf->Ln(5);
$pdf->Write(8,utf8_decode("     M.,Mme "),"");
$pdf->SetFont('Helvetica','',11);
$pdf->Write(8,utf8_decode("( nom - prénom ) : ".$stagiaire->getNomStagiaire())." ".$stagiaire->getPrenomStagiaire(),"");
$pdf->Ln(5);
$pdf->SetFont('Helvetica','B',11);
$pdf->Write(8,utf8_decode("     N° sécurité sociale : "),"");
$pdf->SetFont('Helvetica','',11);
$pdf->Write(8,$stagiaire->getNumSecuStagiaire());
$pdf->Rect(10,95,190,111,"D");
$pdf->Rect(10,206,190,15,"D");
$pdf->Rect(10,221,190,50,"D");
$pdf->Output('F', './test.pdf');
header("location:test.pdf");
