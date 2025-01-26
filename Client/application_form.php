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
    
    $ho = $Haki->query("SELECT * FROM users WHERE email ='$Take'");
    $pm = $ho->fetch_assoc();

    ?>
    
    
	
    
    <!-- <div class="container_regfrm_container_parent"> -->
    
	<h3>Online Account Opening Form</h3>
	 <div class="container_regfrm_container_parent_child">
		<form method="post" action="application_submit.php">
				 <input type="text" name="name" placeholder="Name" value="<?php echo $pm['fullname'] ?>"  required />
				 <select name ="gender" required >
					  <option class="default" value="" disabled selected>Gender</option>
					  <option value="Male" required >Male</option>
					  <option value="Female">Female</option>
					  
				</select>
				 <input type="text" name="mobile" placeholder="Mobile no" required />
				 <input type="text" name="email" placeholder="Email id" value="<?php echo $pm['email'] ?>" />
				 <input type="text" name="Telephone" placeholder="Telephone no" />
				 <input type="text" name="dob" placeholder="Date of Birth" onfocus="(this.type='date')" required />
				 <input type="text" name="client" placeholder="client_id" value="Client_ID" readonly="readonly" />
				 <input type="text" name="citizenship" placeholder="Citizenship Number" required />
				 <input class="address" type="text" name="homeaddrs" placeholder="Home Address" required  />
				 <input type="text" name="country" placeholder="BD" value="BD" readonly="readonly" />



				 <select name ="state" required >
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



				<input type="text" name="city" placeholder="Enter City" required />



				 
				 <input type="text" name="pin" placeholder="Pin Code" required />
				 <input type="text" name="arealoc" placeholder="Area/Locality" required />
				 <input type="text" name="nominee_name" placeholder="Nominee Name (If any)" />
				 <input type="text" name="nominee_ac_no" placeholder="Nominee Account no"  />
				 
				 <select name ="acctype" required >
					  <option class="default" value="" disabled selected>Account Type</option>
					  <option value="Saving">Saving</option>
					  <option value="Current">Current</option>
					  <option value="Fixed">Fixed</option>
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