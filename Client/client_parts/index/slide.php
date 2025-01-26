<div class="container">
    <div class="main-body">
    
          <!-- Breadcrumb -->
          <nav aria-label="breadcrumb" class="main-breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item"><a href="javascript:void(0)">User</a></li>
              <li class="breadcrumb-item active" aria-current="page">User Profile</li>
            </ol>
          </nav>
          <!-- /Breadcrumb -->
    
          <div class="row gutters-sm">
            <div class="col-md-4 mb-3">
              <div class="card">
                <div class="card-body">
                  <div class="d-flex flex-column align-items-center text-center">
                    <img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="Admin" class="rounded-circle" width="150">
                    <div class="mt-3">
                    <?php 
        include_once("../hakiconfig.php");
        $Take = $_SESSION['email'];
        $l = $Haki->query("SELECT * FROM users WHERE email ='$Take'");

        $e = $l->fetch_assoc();

       
        ?>
                      <h4><?php echo $e['fullname'] ?></h4>
                      <p class="text-secondary mb-1">Full Stack Developer</p>
                      <?php
                      
                       $o = $Haki->query("SELECT * FROM application_form_info WHERE email ='$Take'");

                       $y = $o->fetch_assoc();
                       $client_info = [
                              'name' => $y['name'] ?? 'Not Provided',
                              'gender' => $y['gender'] ?? 'Not Provided',
                              'mobile_no' => $y['mobile_no'] ?? 'Not Provided',
                              'email' => $y['email'] ?? 'Not Provided',
                              'telephone_no' => $y['telephone_no'] ?? 'Not Provided',
                              'dob' => $y['dob'] ?? 'Not Provided',
                              'client_id' => $y['client_id'] ?? 'Not Provided',
                              'address' => $y['address'] ?? 'Not Provided',
                              'state' => $y['state'] ?? 'Not Provided',
                              'city' => $y['city'] ?? 'Not Provided',
                              'post_code' => $y['post_code'] ?? 'Not Provided',
                              'nominee' => $y['nominee'] ?? 'Not Provided',
                              'account_type' => $y['account_type'] ?? 'Not Provided'
                       ];
                      ?>
                      <p class="text-muted font-size-sm"><?php echo ($client_info['address']) ?></p>
                      
                    </div>
                  </div>
                </div>
              </div>


              <div class="card mb-3">
                <div class="card-body">

                <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Client ID</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    <?php echo ($client_info['client_id'])  ?>
                    </div>
                  </div>
                  <hr>

                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Account Type</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    <?php echo ($client_info['account_type']) ?>
                    </div>
                  </div>
                  <hr>

                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Nominee Name</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    <?php echo ($client_info['nominee'])  ?>
                    </div>
                  </div>
                  
                  
                </div>
              </div>

              


            </div>


            <div class="col-md-8">
              <div class="card mb-3">
                <div class="card-body">
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Full Name</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    <?php echo ($client_info['name'])  ?>
                    </div>
                  </div>

                  <hr>

                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Gender</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    <?php echo ($client_info['gender'])  ?>
                    </div>
                  </div>

                  <hr>

                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Mobile No</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    <?php echo ($client_info['mobile_no'])  ?>
                    </div>
                  </div>

                  <hr>

                  <div class="row">
                    <div class="col-sm-3">
                    <h6 class="mb-0">Email</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    <?php echo ($client_info['email'])  ?>
                    </div>
                  </div>

                  <hr>

                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Telephone No</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    <?php echo ($client_info['telephone_no'])  ?>
                    </div>
                  </div>

                  <hr>

                  <div class="card mb-3">
                <div class="card-body">
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Date Of Birth</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    <?php echo ($client_info['dob'])  ?>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Address</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    <?php echo ($client_info['address'])  ?>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Division</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    <?php echo ($client_info['state'])  ?>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">City</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    <?php echo ($client_info['city'])  ?>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Post Code</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    <?php echo ($client_info['post_code'])  ?>
                    </div>
                  </div>
                  
                  
                  </div>
                </div>
              </div>

              



            </div>
          </div>

        </div>
    </div>