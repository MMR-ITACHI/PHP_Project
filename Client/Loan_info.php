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
    <title>ProBootstrap:FineOak &mdash; Free Bootstrap Theme, Free Responsive Bootstrap Website Template</title>
    <meta name="description" content="Free Bootstrap Theme by uicookies.com">
    <meta name="keywords" content="free website templates, free bootstrap themes, free template, free bootstrap, free website template">
    
    <!-- <link href="https://fonts.googleapis.com/css?family=Bellefair|Open+Sans" rel="stylesheet"> -->
    <link rel="stylesheet" href="css/styles-merged.css">
    <link rel="stylesheet" href="css/style.min.css">

    <!--[if lt IE 9]>
      <script src="js/vendor/html5shiv.min.js"></script>
      <script src="js/vendor/respond.min.js"></script>
    <![endif]-->


  <!-- Another css transfer -->


    <!-- <link rel="shortcut icon" href="ass/images/favicon.ico"> -->

    <link href="plugins/bootstrap-datepicker/css/bootstrap-datepicker.min.css" rel="stylesheet">

    <!-- DataTables -->
    <link href="plugins/datatables/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" />
    <link href="plugins/datatables/buttons.bootstrap4.min.css" rel="stylesheet" type="text/css" />

    <!-- Responsive datatable examples -->
    <link href="plugins/datatables/responsive.bootstrap4.min.css" rel="stylesheet" type="text/css" />

    <!-- <link href="ass/css/bootstrap.min.css" rel="stylesheet" type="text/css"> -->
    <link href="ass/css/metismenu.min.css" rel="stylesheet" type="text/css">
    <link href="ass/css/icons.css" rel="stylesheet" type="text/css">
    <link href="ass/css/style.css" rel="stylesheet" type="text/css">














  </head>
  <body>
    
    <!-- Fixed navbar -->
    
    
    <?php include_once("client_parts/about/header.php") ?>

    <!--END HEADER navbar -->

    
    

    <!--END Section Slide -->

    <?php include_once("loan_status.php") ?>
    


   <!--END Section_story Slide -->
    
   
    
   <!--END Section_choose Slide -->

    
   <?php include_once("client_parts/about/footer.php") ?> 

   <!--END Footer -->
    
   <?php include_once("client_parts/about/js.php") ?> 

    <!--END JS -->



    <!-- aNOTHER JS Transfer -->


    <script src="ass/js/jquery.min.js"></script>
    <script src="ass/js/bootstrap.bundle.min.js"></script>
    <script src="ass/js/metismenu.min.js"></script>
    <script src="ass/js/jquery.slimscroll.js"></script>
    <script src="ass/js/waves.min.js"></script>

    <script src="plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>

    <!-- Required datatable js -->
    <script src="plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="plugins/datatables/dataTables.bootstrap4.min.js"></script>
    <!-- Buttons examples -->
    <script src="plugins/datatables/dataTables.buttons.min.js"></script>
    <script src="plugins/datatables/buttons.bootstrap4.min.js"></script>
    <script src="plugins/datatables/jszip.min.js"></script>
    <script src="plugins/datatables/pdfmake.min.js"></script>
    <script src="plugins/datatables/vfs_fonts.js"></script>
    <script src="plugins/datatables/buttons.html5.min.js"></script>
    <script src="plugins/datatables/buttons.print.min.js"></script>
    <script src="plugins/datatables/buttons.colVis.min.js"></script>
    <!-- Responsive examples -->
    <script src="plugins/datatables/dataTables.responsive.min.js"></script>
    <script src="plugins/datatables/responsive.bootstrap4.min.js"></script>

    <!-- Datatable init js -->
    <script src="ass/pages/datatables.init.js"></script>

    <!-- App js -->
    <script src="ass/js/app.js"></script>


    

  </body>
</html>