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
    <title>uiCookies:FineOak &mdash; Free Bootstrap Theme, Free Responsive Bootstrap Website Template</title>
    <meta name="description" content="Free Bootstrap Theme by uicookies.com">
    <meta name="keywords" content="free website templates, free bootstrap themes, free template, free bootstrap, free website template">
    
    <link href="https://fonts.googleapis.com/css?family=Bellefair|Open+Sans" rel="stylesheet">
    <link rel="stylesheet" href="css/styles-merged.css">
    <link rel="stylesheet" href="css/style.min.css">

    <!--[if lt IE 9]>
      <script src="js/vendor/html5shiv.min.js"></script>
      <script src="js/vendor/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    
    <!-- Fixed navbar -->
    
    <?php include_once("client_parts/service/header.php") ?>

 <!--END HEADER navbar -->
    

     <!--END slide navbar -->

     <?php include_once("transaction_table.php") ?>

     <!--END offer navbar -->

    

     <!--END choose navbar -->

    <?php include_once("client_parts/service/footer.php") ?>

     <!--END footer navbar -->

    <?php include_once("client_parts/service/js.php") ?>

     <!--END js -->
   

    
    
    

    

   
 
    
    

   

  </body>
</html>