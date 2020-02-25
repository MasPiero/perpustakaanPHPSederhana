<?php
define('FPDF_FONTPATH', dirname(__FILE__) . '/fpdf17/font/');
require(dirname(__FILE__) . '/fpdf17/fpdf.php');
require ('InvoicePDF.class.php');
$pdf = new InvoicePDF();
$pdf->Output();
