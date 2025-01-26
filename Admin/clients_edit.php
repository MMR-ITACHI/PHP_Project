<?php 
include_once("hakiconfig.php");


$Found = $_GET['nid'];

if(isset($_REQUEST['update'])){
    extract($_REQUEST);
    

    $Franky = $Haki->query("UPDATE application_form_info SET name ='$pname', gender='$gender', mobile_no ='$pmobile',email='$pemail',telephone_no='$ptel',dob='$pdob',client_id='$pclient',citizen_number='$pcit',address='$phome',country='$pco',state='$pstate',city='$pcity',post_code='$pcode',area='$parea',nominee='$pnom',nominee_number='$pnc',	account_type='$type' WHERE id = '$Found' ");

    if( $Haki->affected_rows){
            // echo "Successfully Updated";
            header("location:clients_info.php");
    }

    else{
        echo "Failed to Update";
    }
}

   $Akainu = $Haki->query("SELECT * FROM application_form_info WHERE id ='$Found' ");
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
                      <h5 class="mb-0">Client Info Edit</h5>
                    </div>
                    <div class="card-body">
                      <form action="" method="post">
                     <b>Name: </b> <br>
                        <div class="form-floating form-floating-outline mb-4">
                            
                          <input type="text" class="form-control" name="pname" value="<?php echo $Brook->name ?>" id="basic-default-fullname" placeholder="Service Category" />
                          
                        </div>

                        <b>Gender: </b> <br>
                        <div class="form-floating form-floating-outline mb-4">

                        
              
                          <select name="gender" class="form-control" id="">
                            
                            <option value="Male">Male </option>
                            <option value="Female">Female  </option>
                          </select>
                          
                        </div>

                        <b>Mobile No: </b> <br>
                        <div class="form-floating form-floating-outline mb-4">
                            
                          <input type="text" class="form-control" name="pmobile" value="<?php echo $Brook->mobile_no ?>" id="basic-default-fullname" placeholder="Service Category" />
                          
                        </div>

                        <b>Email Id: </b> <br>
                        <div class="form-floating form-floating-outline mb-4">
                            
                          <input type="text" class="form-control" name="pemail" value="<?php echo $Brook->email ?>" id="basic-default-fullname" placeholder="Service Category" />
                          
                        </div>

                        <b>Telephone No: </b> <br>
                        <div class="form-floating form-floating-outline mb-4">
                            
                          <input type="text" class="form-control" name="ptel" value="<?php echo $Brook->telephone_no ?>" id="basic-default-fullname" placeholder="Service Category" />
                          
                        </div>

                        <b>DOB: </b> <br>
                        <div class="form-floating form-floating-outline mb-4">
                            
                          <input type="text" class="form-control" name="pdob" value="<?php echo $Brook->dob ?>" id="basic-default-fullname" placeholder="Service Category" />
                          
                        </div>

                        <b>Client ID: </b> <br>
                        <div class="form-floating form-floating-outline mb-4">
                            
                          <input type="text" class="form-control" name="pclient" value="<?php echo $Brook->client_id ?>" id="basic-default-fullname" placeholder="Service Category" />
                          
                        </div>

                        <b>Citizenship Number: </b> <br>
                        <div class="form-floating form-floating-outline mb-4">
                            
                          <input type="text" class="form-control" name="pcit" value="<?php echo $Brook->citizen_number ?>" id="basic-default-fullname" placeholder="Service Category" />
                          
                        </div>

                        <b>HomeAddress: </b> <br>
                        <div class="form-floating form-floating-outline mb-4">
                            
                          <input type="textarea" class="form-control" name="phome" value="<?php echo $Brook->address ?>"/>
                          
                        </div>

                        <b>Country: </b> <br>
                        <div class="form-floating form-floating-outline mb-4">
                            
                          <input type="text" class="form-control" name="pco" value="<?php echo $Brook->country ?>" id="basic-default-fullname" placeholder="Service Category" />
                          
                        </div>
                        


                        <b>State: </b> <br>
                        <div class="form-floating form-floating-outline mb-4">
                          <input type="text" class="form-control" name="pstate" value="<?php echo $Brook->state ?>" id="basic-default-company" placeholder="Session or Time" />
                          
                        </div>

                        <b>City: </b> <br>
                        <div class="form-floating form-floating-outline mb-4">
                          <input type="text" class="form-control" name="pcity" value="<?php echo $Brook->city ?>" id="basic-default-company" placeholder="Session or Time" />
                          
                        </div>

                        <b>Post Code: </b> <br>
                        <div class="form-floating form-floating-outline mb-4">
                          <input type="text" class="form-control" name="pcode" value="<?php echo $Brook->post_code ?>" id="basic-default-company" placeholder="Session or Time" />
                          
                        </div>

                        <b>Account Type: </b> <br>
                        <div class="form-floating form-floating-outline mb-4">

                        
                                          
                            <select name="type" class="form-control" id="">
                              
                              <option value="Saving">Saving  </option>
                              <option value="Current">Current  </option>
                              <option value="Fixed">Fixed  </option>

                                    </div>



                        <b>Area: </b> <br>
                        <div class="form-floating form-floating-outline mb-4">
                          <input type="text" class="form-control" name="parea" value="<?php echo $Brook->area ?>" id="basic-default-company" placeholder="Session or Time" />
                          
                        </div>

                        <b>Nominee Name: </b> <br>
                        <div class="form-floating form-floating-outline mb-4">
                          <input type="text" class="form-control" name="pnom" value="<?php echo $Brook->nominee ?>" id="basic-default-company" placeholder="Session or Time" />
                          
                        </div>

                        <b>Nominee Account No: </b> <br>
                        <div class="form-floating form-floating-outline mb-4">
                          <input type="text" class="form-control" name="pnc" value="<?php echo $Brook->nominee_number ?>" id="basic-default-company" placeholder="Session or Time" />
                          
                        </div>

                        
                                          <button type="submit" name="update" class="btn btn-primary">EDIT</button>
                      </form>
                    </div>
                  </div>
                </div>
               </div>
                
               
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