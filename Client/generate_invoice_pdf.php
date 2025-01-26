<?php 

require('fpdf.php');

include_once("../hakiconfig.php");
session_start();
if(!isset($_SESSION['email'])){
  header("location:../signin.php");
}



if(isset($_GET['installment_number'])){

    $oid = $_GET['installment_number'];
$Take = $_SESSION['email'];
    
    $nami = $Haki->query("SELECT * FROM online_payment WHERE gmail ='$Take' AND installment_number='$oid'");
    $p = $nami->fetch_assoc();


$invoiceData = [
    'client_id' => $p['client_id']?? 'Not Provided',
    'name' => $p['name']?? 'Not Provided',
    'gmail' => $p['gmail']?? 'Not Provided',
    // 'date' => date('d-m-Y'),
    'date' => $p['date']?? 'Not Provided', 
    'installment_number' => $p['installment_number']?? 'Not Provided',
    'loan' => $p['loan']?? 'Not Provided',
    'interest' => $p['interest']?? 'Not Provided',
    'total_loan' => $p['total_loan']?? 'Not Provided',
    'installment' => $p['installment']?? 'Not Provided',
    'medium' => $p['medium']?? 'Not Provided',
    'transaction_id' => $p['transaction_id']?? 'Not Provided',
];

class PDF extends FPDF
{
    // Page header
    function Header()
    {
        $this->SetFont('Arial', 'B', 14);
        $this->Cell(0, 10, 'Invoice', 0, 1, 'C');
        $this->Ln(10);
    }

    function Footer()
    {
        $this->SetY(-15);
        $this->SetFont('Arial', 'I', 8);
        $this->Cell(0, 10, 'Page '.$this->PageNo().'/{nb}', 0, 0, 'C');
    }
}


$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();


$pdf->SetFont('Arial', '', 12);

// Output invoice details
$pdf->Cell(0, 10, 'Client Name: ' . $invoiceData['client_id'], 0, 1);
$pdf->Cell(0, 10, 'Client Name: ' . $invoiceData['name'], 0, 1);
$pdf->Cell(0, 10, 'Email: ' . $invoiceData['gmail'], 0, 1);
$pdf->Cell(0, 10, 'Date: ' . $invoiceData['date'], 0, 1);
$pdf->Cell(0, 10, 'Installment Number: ' . $invoiceData['installment_number'], 0, 1);
$pdf->Cell(0, 10, 'Loan: ' . $invoiceData['loan'], 0, 1);
$pdf->Cell(0, 10, 'Interest: ' . $invoiceData['interest'], 0, 1);
$pdf->Cell(0, 10, 'Total Loan: ' . $invoiceData['total_loan'], 0, 1);
$pdf->Cell(0, 10, 'Installment: ' . $invoiceData['installment'], 0, 1);
$pdf->Cell(0, 10, 'Payment Method: ' . $invoiceData['medium'], 0, 1);
$pdf->Cell(0, 10, 'Transaction ID: ' . $invoiceData['transaction_id'], 0, 1);


$pdf->Output('I', 'invoice.pdf');



}
?>