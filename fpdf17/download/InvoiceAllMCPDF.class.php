<?php

class InvoicePDF extends FPDF {

	private $PG_W = 190;

	public function __construct($passInYourDataHere = NULL) {
		parent::__construct();		
		$this->LineItems();		
	}
	
	public function Header() {
		
		$this->SetFont('Arial', 'B', 16);
		$this->Cell($this->PG_W, 8, "Roxxor Ltd.", 0, 0, 'C');
		$this->Ln();
		
		$this->Cell($this->PG_W, 5, "INVOICE", 0, 0, 'L');
		$this->Ln(10);
		
		$this->SetFont('Arial', 'B', 12);
		
		$this->Cell($this->PG_W / 4, 5, "Invoice Number:", 0, 0, 'L');
		$this->Cell($this->PG_W / 4, 5, "ROXXOR_001", 0, 0, 'L');
		$this->Cell($this->PG_W / 4, 5, "To:", 0, 0, 'L');
		$this->Cell($this->PG_W / 4, 5, "The Client", 0, 0, 'L');		

		$this->Ln();
		
		$this->Cell($this->PG_W / 4, 5, "Invoice Date:", 0, 0, 'L');
		$this->Cell($this->PG_W / 4, 5, date("d/m/Y", time()), 0, 0, 'L');		
		$this->Cell($this->PG_W / 4, 5, "Address:", 0, 0, 'L');
		$this->MultiCell($this->PG_W / 4, 5, "1 Some Road\nSome Town\nPost Code", 0, 'L');		
		
		$this->Ln(10);
	}
		
	public function LineItems() {

        $textWrap = str_repeat("this is a word wrap test ", 3);
        $textWrapShort = str_repeat("shortish ", 2);
        $textNoWrap = "there will be no wrapping here thank you";

        $col_widths = array(85, 25, 20, 20, 20, 20);
		$headers = array("Description", "Qty.", "Rate", "Sub.", "VAT", "Total");

        $rows = array();
        $rows[] = array($textWrap, $textWrapShort, $textWrapShort, $textWrapShort, $textWrapShort, $textWrapShort);
        $rows[] = array($textWrap, $textWrapShort, $textWrapShort, $textWrapShort, $textWrapShort, $textWrapShort);
        $rows[] = array($textWrap, $textWrapShort, $textWrapShort, $textWrapShort, $textWrapShort, $textWrapShort);
        $rows[] = array($textNoWrap, 1, 10500, 10500, 0, 10500);
        $row_line_heights = array(4, 4, 4, 4); // FPDF needs the developer to set the line height for each row
				
		/* Layout */
		
		$this->SetDataFont();
		$this->AddPage();

        // Header row
		for($i = 0; $i < count($headers); $i++) {
			$this->Cell($col_widths[$i], 5, $headers[$i], 1, 0, 'C');
		}

		$this->Ln();

        for ($r = 0; $r < count($rows); $r++) {

            $row = $rows[$r];
            $x = $this->GetX();

            for ($col = 0; $col < count($col_widths); $col++) {
                $yBeforeCell = $this->GetY();
                $borders = 'LB' . ($col + 1 == count($col_widths) ? 'R' : ''); // Only add R for last col
                $this->MultiCell($col_widths[$col], $row_line_heights[$r], $row[$col], $borders);
                $yCurrent = $this->GetY();
                $rowHeight = $yCurrent - $yBeforeCell;
                $this->SetXY($x + $col_widths[$col], $yCurrent - $rowHeight);
                $x = $this->GetX();
            }

			$this->Ln($rowHeight); // Line-feed at last cell height to start a new row
		}
		
		$this->Ln(10);

		$this->setTextFont();
		$this->Cell($col_widths[0] + $col_widths[1] + $col_widths[3], 6, 'Total', 'TB', 0, 'L');
		$this->setDataFont(true);
		$this->Cell($col_widths[2], 6, number_format(2, 2), 'TB', 0, 'R');
		$this->Cell($col_widths[2], 6, number_format(2, 2), 'TB', 0, 'R');
		$this->Cell($col_widths[2], 6, number_format(2, 2), 'TB', 0, 'R');
		$this->Ln();

		$this->setTextFont();

		$this->Write(10, "Notes: " . "Thank you for your business.");
		$this->Ln(10);	
	}

	public function Footer() {

		$this->Ln();
		$this->Cell($this->PG_W, 5, "Payment Terms: " . "On Receipt", 0, 0, 'L');
		$this->Ln(10);
		$this->Cell($this->PG_W, 5, "Please make cheques payable to Roxxor Ltd.", 0, 0, 'L');
		$this->Ln(10);		
		$this->setTextFont(true);

		$this->Cell($this->PG_W, 5, "Payment Details:", 0, 0, 'L');
		$this->setTextFont(false);
		$this->Ln();
		$this->Cell($this->PG_W, 5, "Bank A/C No: 000000000", 0, 0, 'L');
		$this->Ln();
		
		// Footer address
		
		$address = "Roxxor Ltd.\nSomewhere in London\nUK";
		
		$this->SetY(-(($this->getAddressLength($address) * 5) + 20));

		$this->SetFont('Arial', '', 7);
		
		$this->Ln();
		$this->writeAddress($address);
	}

	private function setTextFont($isBold = false) {
		$this->SetFont('Arial', $isBold ? 'B' : '', 9);
	}
	
	private function setDataFont($isBold = false) {
		$this->SetFont('Courier', $isBold ? 'B' : '', 8);
	}

	private function getAddressLength($address) {
		return count(explode("\n", $address));
	}
		
	private function writeAddress($address) {
		$lines = explode("\n", $address);
		foreach ($lines as $line) {
			$this->Cell($this->PG_W, 5, $line, 0, 0, 'C');
			$this->Ln(4);
		}
	}	
}
