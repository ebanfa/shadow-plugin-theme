<?php

/**
 * Template Name: Content Reports Page
 *
 */
    $pdf = new FPDF();
    $pdf->AddPage(); 
    $pdf->SetFont('Courier', 'B', 16);
    $pdf->Cell(40,10, 'HPMS Demo Report');
    $pdf->Output();
?>
