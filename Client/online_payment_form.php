<?php
include_once("../hakiconfig.php");
session_start();
if(!isset($_SESSION['email'])){
  header("location:../signin.php");
}

?>




<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Free Bootstrap Theme by uicookies.com">
    <meta name="keywords" content="free website templates, free bootstrap themes, free template, free bootstrap, free website template">
    <title>Registration Form</title>
    <link href="https://fonts.googleapis.com/css?family=Bellefair|Open+Sans" rel="stylesheet">
    <link rel="stylesheet" href="css/styles-merged.css">
    <link rel="stylesheet" href="css/style.min.css">


    <link rel="stylesheet" type="text/css" href="Online-BankingPHP/css/customer_reg_form.css"/>

    <!--[if lt IE 9]>
      <script src="js/vendor/html5shiv.min.js"></script>
      <script src="js/vendor/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>

  <?php 
    $Take = $_SESSION['email'];
    
    $non = $Haki->query("SELECT * FROM application_form_info WHERE email ='$Take'");
    $p = $non->fetch_assoc();


    

    $no = $Haki->query("SELECT * FROM transaction_table WHERE email ='$Take'");
    $kk = $no->fetch_assoc();


    $never = $Haki->query("SELECT * FROM loan_apply WHERE email ='$Take'");
    $ppp = $never->fetch_assoc();


    $client_info = [
        'installment' => $kk['per_installment'] ?? 'Not Provided',
        
 ];
    
    
    ?>
    
    <!-- Fixed navbar -->
    
    <?php include_once("client_parts/application/header.php") ?>
    

    <!--END HEADER navbar -->
    <?php include_once("transaction_table.php") ?>

    
   
    
    
    
	
    
    <!-- <div class="container_regfrm_container_parent"> -->
    
	<h3>Online Payment Form</h3>
	 <div class="container_regfrm_container_parent_child">
		<form method="post" action="online_payment_submit.php">
                 Client ID:
				 <input type="text" name="client_id" placeholder="client_id" value=" <?php echo $p['client_id'] ?> " readonly="readonly"/>

				

                Name:
				 <input type="text" name="name" placeholder="Name" value=" <?php echo $p['name'] ?> " readonly="readonly" /> <br>

                 Email:
				 <input type="text" name="email" placeholder="Email_id" value=" <?php echo $p['email'] ?> "  />

                 Date of Payment
				 <input type="text" name="dob" placeholder="Date_of_payment" onfocus="(this.type='date')" required />

                 Installment Number:
				 <input type="text" name="installment_number" placeholder="installment_number" required/>

         Loan:
				 <input type="text" name="loan" value="<?php echo $ppp['amount'] ?>" readonly="readonly"/>

         Interest:
				 <input type="text" name="interest" value="<?php echo $ppp['interest_tk'] ?>" readonly="readonly"/>

         Total Loan:
				 <input type="text" name="total_loan" value="<?php echo $ppp['total_loan'] ?>" readonly="readonly"/>

                 

                 Installment:
				 <input type="text" name="installment" placeholder="Installment"   value="<?php echo $ppp['installment'] ?>" readonly="readonly"/>

         


                 Payment Method:
                 <select name ="method" required >
					  <option class="default" value="" disabled selected>Payment Method</option>
					  <option value="Bkash"  >Bkash</option>
					  <option value="Nagad">Nagad </option>
                      <option value="Rocket">Rocket</option>
					  
				</select>

                Transaction ID:
				 <input type="text" name="transaction" placeholder="Transaction ID" required />
				 

                

				 



				



				 
				 
				<input type="submit" name="submit" value="Submit">
				</form>
         </div> 
		 <!-- </div> -->














    <!--END Section Slide -->


    

    
   

   <!--END Footer -->
    
   <?php include_once("client_parts/application/js.php") ?> 

    <!--END JS -->
    

  </body>
</html>