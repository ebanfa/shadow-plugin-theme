<?php

/**
 * Template Name: Content Reports Page
 *
 */
    $pdf = new FPDF();
    $pdf->AddPage(); 
    $pdf->SetFont('Courier', 'B', 16);
    $pdf->Cell(40,10, 'Lilian demo');
    $pdf->Output();
?>
