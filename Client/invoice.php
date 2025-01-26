<?php

include_once("../hakiconfig.php");
session_start();
if(!isset($_SESSION['email'])){
  header("location:../signin.php");
}

if(isset($_GET['installment_number'])){

    $lid = $_GET['installment_number'];
    $Take = $_SESSION['email'];



    
    $nami = $Haki->query("SELECT * FROM online_payment WHERE gmail ='$Take' AND installment_number='$lid' ");
    $p = $nami->fetch_assoc();

// 'name' => $y['name'] ?? 'Not Provided',

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
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Invoice</title>
    <style>
        .invoice-container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
            border: 1px solid #ccc;
            background-color: #f9f9f9;
        }
        .invoice-header, .invoice-footer {
            text-align: center;
            margin-bottom: 20px;
        }
        .invoice-details {
            margin-bottom: 20px;
        }
        .btn {
            background-color: #007bff;
            padding: 10px 20px;
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
            cursor: pointer;
        }
        .btn:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>

<div class="invoice-container">
    <div class="invoice-header">
        <h1>Invoice</h1>
    </div>
    <div class="invoice-details">
        <p><strong>Client ID:</strong> <?= $invoiceData['client_id']; ?></p>
        <p><strong>Client Name:</strong> <?= $invoiceData['name']; ?></p>
        <p><strong>Email:</strong> <?= $invoiceData['gmail']; ?></p>
        <p><strong>Date:</strong> <?= $invoiceData['date']; ?></p>
        <p><strong>Installment Number:</strong> <?= $invoiceData['installment_number']; ?></p>
        <p><strong>Loan:</strong> <?= $invoiceData['loan']; ?></p>
        <p><strong>Interest:</strong> <?= $invoiceData['interest']; ?></p>
        <p><strong>Total Loan:</strong> <?= $invoiceData['total_loan']; ?></p>
        <p><strong>Installment:</strong> <?= $invoiceData['installment']; ?></p>
        <p><strong>Payment Method:</strong> <?= $invoiceData['medium']; ?></p>
        <p><strong>Transaction ID:</strong> <?= $invoiceData['transaction_id']; ?></p>
    </div>
    <div class="invoice-footer">
        <a href="generate_invoice_pdf.php?installment_number=<?php echo $lid; ?>"  class="btn">Download PDF</a>
    </div>
</div>

</body>
</html>