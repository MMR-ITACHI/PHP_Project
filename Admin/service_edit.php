<?php 
include_once("hakiconfig.php");


$Found = $_GET['nid'];

if(isset($_REQUEST['update'])){
    extract($_REQUEST);
    

    $Franky = $Haki->query("UPDATE services SET name ='$pname', interest='$pcharge', application_time ='$papply' WHERE id = $Found ");

    if( $Haki->affected_rows){
            // echo "Successfully Updated";
            header("location:service_info.php");
    }

    else{
        echo "Failed to Update";
    }
}

   $Akainu = $Haki->query("SELECT * FROM services WHERE id ='$Found' ");
   //print_r($Akainu;

    $Brook = $Akainu->fetch_object();
   // print_r($Brook);

   



?>



<!DOCTYPE html>

<html
  lang="en"
  class="light-style layout-menu-fixed layout-compact"
  dir="ltr"
  data-theme="theme-default"
  data-assets-path="assets/"
  data-template="vertical-menu-template-free">
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

    <title>Dashboard - Analytics | Materio - Bootstrap Material Design Admin Template</title>

    <meta name="description" content="" />

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="assets/img/favicon/favicon.ico" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&ampdisplay=swap"
      rel="stylesheet" />

    <link rel="stylesheet" href="assets/vendor/fonts/materialdesignicons.css" />

    <!-- Menu waves for no-customizer fix -->
    <link rel="stylesheet" href="assets/vendor/libs/node-waves/node-waves.css" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="assets/vendor/css/core.css" class="template-customizer-core-css" />
    <link rel="stylesheet" href="assets/vendor/css/theme-default.css" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="assets/css/demo.css" />

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />
    <link rel="stylesheet" href="assets/vendor/libs/apex-charts/apex-charts.css" />

    <!-- Page CSS -->

    <!-- Helpers -->
    <script src="assets/vendor/js/helpers.js"></script>
    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="assets/js/config.js"></script>
  </head>

  <body>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
      <div class="layout-container">
        <!-- Menu -->

        <?php include_once("partials/left_navbar.php") ?>
        <!-- / Menu -->

        <!-- Layout container -->
        <div class="layout-page">
          <!-- Navbar -->

          <nav
            class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme"
            id="layout-navbar">
            <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0 d-xl-none">
              <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
                <i class="mdi mdi-menu mdi-24px"></i>
              </a>
            </div>

            <?php include_once("partials/header_search.php") ?>
          </nav>

          <!-- / Navbar -->

          <!-- Content wrapper -->
          <div class="content-wrapper">
            <!-- Content -->

            <div class="container-xxl flex-grow-1 container-p-y">
              <div class="row gy-4">
                <!-- Congratulations card start -->
                 <!-- Transactions card start -->
                
               
                <!--/ Congratulations card end-->

                <div class="row">
                <!-- Service Edit -->
                <div class="col-xl">
                  <div class="card mb-4">
                    <div class="card-header d-flex justify-content-between align-items-center">
                      <h5 class="mb-0">Service Edit Page</h5>
                      <small class="text-muted float-end">Default label</small>
                    </div>
                    <div class="card-body">
                      <form action="" method="post">
                     <b>Service Category: </b> <br>
                        <div class="form-floating form-floating-outline mb-4">
                            
                          <input type="text" class="form-control" name="pname" value="<?php echo $Brook->name ?>" id="basic-default-fullname" placeholder="Service Category" />
                          
                        </div>


                        <b>Charge: </b> <br>
                        <div class="form-floating form-floating-outline mb-4">
                          <input type="text" class="form-control" name="pcharge" value="<?php echo $Brook->interest ?>" id="basic-default-company" placeholder="% or Taka" />
                          
                        </div>


                        <b>Applied Time: </b> <br>
                        <div class="form-floating form-floating-outline mb-4">
                          <input type="text" class="form-control" name="papply" value="<?php echo $Brook->application_time ?>" id="basic-default-company" placeholder="Session or Time" />
                          
                        </div>

                        

                        
                       
                        <button type="submit" name="update" class="btn btn-primary">EDIT</button>
                      </form>
                    </div>
                  </div>
                </div>
               </div>
                
                <!--/ Transactions card end-->

                <!-- Weekly Overview Chart -->
                
                <!--/ Weekly Overview Chart -->

                <!-- Total Earnings -->
                
                <!--/ Total Earnings -->

                <!-- Four Cards -->
                <!-- weekly&earning&four -->
                
                <!--/ Total Earning -->

                <!-- Sales by Countries -->
                
               
                <!--/ Sales by Countries -->

                <!-- Deposit / Withdraw -->
                
                <!-- Deposit / Withdraw -->

                <!-- Data Tables -->
                
                <!--/ Data Tables -->
              </div>
            </div>
            <!-- / Content -->

            <!-- Footer -->
            <?php include_once("partials/footer.php") ?>
            <!-- / Footer -->

            <div class="content-backdrop fade"></div>
          </div>
          <!-- Content wrapper -->
        </div>
        <!-- / Layout page -->
      </div>

      <!-- Overlay -->
      <div class="layout-overlay layout-menu-toggle"></div>
    </div>
    <!-- / Layout wrapper -->

    

    <!-- Core JS -->
    <!-- build:js assets/vendor/js/core.js -->
    <?php include_once("partials/js.php") ?>
  </body>
</html>



    


