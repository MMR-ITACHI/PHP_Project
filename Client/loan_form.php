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
    
    <!-- Fixed navbar -->
    
    <?php include_once("client_parts/application/header.php") ?>
    

    <!--END HEADER navbar -->

    
    <?php 
    $Take = $_SESSION['email'];
    
    $lol = $Haki->query("SELECT * FROM application_form_info WHERE email ='$Take'");
    $pe = $lol->fetch_assoc();

    ?>
    
    
    
	
    
    <!-- <div class="container_regfrm_container_parent"> -->
    
	<h3>Online Loan Form</h3>
	 <div class="container_regfrm_container_parent_child">
		<form method="post" action="loan_form_submit.php">
				 <input type="text" name="name" placeholder="Name" value="<?php echo $pe['name'] ?>" required />
				 
				 <input type="text" name="mobile" placeholder="Mobile no" value="<?php echo $pe['mobile_no'] ?>" required />
				 <input type="text" name="email" placeholder="Email id" value="<?php echo $pe['email'] ?>"  />
                 <!-- <select name ="state" required >
					  <option class="default" value="" disabled selected>State</option>
					  
					  <option value="Dhaka">Dhaka</option>
					  <option value="Khulna">Khulna</option>
					  <option value="Sylhet">Sylhet</option>
					  <option value="Mymensingh">Mymensingh</option>
					  <option value="Rangpur">Rangpur</option>
					  <option value="Barishal">Barishal</option>
					  <option value="Chattogram">Chattogram</option>
					  <option value="Rajshahi">Rajshahi</option>
				</select>
				  -->

          <input type="text" name="amount" placeholder="Amount" />

          <input type="text" name="interest" placeholder="Interest_TK" readonly="readonly"/>


          <input type="text" name="installment" placeholder="Installment" readonly="readonly"/>

          <input type="text" name="total_loan" placeholder="Total Loan" readonly="readonly"/>

				 
				 <input type="text" name="Client_ID" placeholder="client_id" value="<?php echo $pe['client_id'] ?>"  />
				 <input type="text" name="citizenship" placeholder="Citizenship Number" value="<?php echo $pe['citizen_number'] ?>"  required />
         <input type="text" name="status" placeholder="status" value="pending status"  readonly="readonly" />
         <input type="text" name="arealoc" placeholder="Area/Locality" value="<?php echo $pe['address'] ?>" required />
				
				 
				 <!-- <select name ="acctype" required >
					  <option class="default" value="" disabled selected>Account Type</option>
					  <option value="Saving">Saving</option>
					  <option value="Current">Current</option>
					  <option value="Fixed">Fixed</option>
				</select> -->

        <input type="text" name="acctype" placeholder="Account Type" value="<?php echo $pe['account_type'] ?>" required />


        <select name ="loantype" required >
					  <option class="default" value="" disabled selected>Loan Type</option>
					  
            <?php
            
            $w = $Haki->query("SELECT * FROM loan_name");
            While($o = $w->fetch_assoc()){ ?>
            <option value="<?php echo $o['loan_name'] ?>"> <?php echo $o['loan_name'] ?></option>
              
          <?php   }
            
            ?>
				</select>

				 
				 



				 



				



				 
				
				 
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