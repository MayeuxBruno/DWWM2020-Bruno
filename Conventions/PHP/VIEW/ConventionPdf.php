<?php
require "./FPDF/fpdf.php";
$stagiaire=StagiairesManager::findById(1);
// On active la classe une fois pour toutes les pages suivantes
// Format portrait (>P) ou paysage (>L), en mm (ou en points > pts), A4 (ou A5, etc.)
$pdf = new FPDF('P','mm','A4');
// Création de la class PDF
class PDF extends FPDF {
    function Header()
    {
        
    }
    // Footer
    function Footer() {
      // Positionnement à 1,5 cm du bas
      $this->SetY(-15);
      // Police Arial italique 8
      $this->SetFont('Helvetica','I',9);
      // Numéro de page, centré (C)
      $this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');
    }
  }
// Nouvelle page A4 (incluant ici logo, titre et pied de page)
$pdf->AddPage();

$pdf->Output('F', './convention.pdf');
header("location:convention.pdf");
