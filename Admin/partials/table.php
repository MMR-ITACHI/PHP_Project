<?php include_once("hakiconfig.php") ?>



<div class="col-4">
               <caption><h3 style=color:red>Sign in Client Table</h3></caption>
                  <div class="card">
                    <div class="table-responsive">
                      <table class="table">
                        
                        <thead class="table-light">
                          <tr>
                            <th class="text-truncate">User Name</th>
                            <th class="text-truncate">Password</th>
                          </tr>
                        </thead>
                        <tbody>

                          <?php 
                          
                          $e = $Haki->query("SELECT * FROM users");

                          while($f = $e->fetch_assoc()){ 

                          
                          
                          ?>
                          <tr>
                            <td>
                              <div class="d-flex align-items-center">
                                <div class="avatar avatar-sm me-3">
                                  <img src="assets/img/avatars/1.png" alt="Avatar" class="rounded-circle" />
                                </div>
                                <div>
                                  <h6 class="mb-0 text-truncate"><?php echo $f['email'] ?></h6>
                                  
                                </div>
                              </div>
                            </td>
                            <td class="text-truncate"><?php echo $f['password'] ?></td>
                          </tr>

                          <?php } ?>
                         
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>




                <div class="col-4">
                 <caption><h3 style=color:red> Company Table</h3></caption>
                  <div class="card">
                    <div class="table-responsive">
                      <table class="table">
                        
                        <thead class="table-light">
                          <tr>
                            <th class="text-truncate">Company Name</th>
                            <th class="text-truncate">Category</th>
                          </tr>
                        </thead>
                        <tbody>

                          <?php 
                          
                          $b = $Haki->query("SELECT * FROM company");

                          while($k = $b->fetch_assoc()){ 

                          
                          
                          ?>
                          <tr>
                            <td>
                              <div class="d-flex align-items-center">
                                <div class="avatar avatar-sm me-3">
                                  <img src="assets/img/avatars/1.png" alt="Avatar" class="rounded-circle" />
                                </div>
                                <div>
                                  <h6 class="mb-0 text-truncate"><?php echo $k['name'] ?></h6>
                                  
                                </div>
                              </div>
                            </td>
                            <td class="text-truncate"><?php echo $k['catagory'] ?></td>
                          </tr>

                          <?php } ?>
                         
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>


                <div class="col-4">
                 <caption><h3 style=color:red> Loan Table</h3></caption>
                  <div class="card">
                    <div class="table-responsive">
                      <table class="table">
                        
                        <thead class="table-light">
                          <tr>
                            <th class="text-truncate">Loan Name</th>
                            <th class="text-truncate">Interest</th>
                          </tr>
                        </thead>
                        <tbody>

                          <?php 
                          
                          $v = $Haki->query("SELECT * FROM portfolio");

                          while($n = $v->fetch_assoc()){ 

                          
                          
                          ?>
                          <tr>
                            <td>
                              <div class="d-flex align-items-center">
                                <div class="avatar avatar-sm me-3">
                                  <img src="assets/img/avatars/1.png" alt="Avatar" class="rounded-circle" />
                                </div>
                                <div>
                                  <h6 class="mb-0 text-truncate"><?php echo $n['loan_type'] ?></h6>
                                  
                                </div>
                              </div>
                            </td>
                            <td class="text-truncate"><?php echo $n['interest_rate'] ?></td>
                          </tr>

                          <?php } ?>
                         
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>



                <div class="col-12">
                 <caption><h3 style=color:red>Client Information</h3></caption>
                  <div class="card">
                    <div class="table-responsive">
                      <table class="table">
                        
                        <thead class="table-light">
                          <tr>
                          <th class="text-truncate">Name</th>
                            <th class="text-truncate">Gender</th>
                            <th class="text-truncate">Mobile No</th>
                            <th class="text-truncate">Email</th>
                            
                            <th class="text-truncate">DOB</th>
                            <th class="text-truncate">Address</th>
                            
                            <th class="text-truncate">Nominee</th>
                            <th class="text-truncate">Nominee Number</th>
                            <th class="text-truncate">Account</th>
                          </tr>
                        </thead>
                        <tbody>

                          <?php 
                          
                          $q = $Haki->query("SELECT * FROM application_form_info");

                          while($uu = $q->fetch_assoc()){ 

                          
                          
                          ?>
                          <tr>
                            <td>
                              <div class="d-flex align-items-center">
                                <div class="avatar avatar-sm me-3">
                                  <img src="assets/img/avatars/1.png" alt="Avatar" class="rounded-circle" />
                                </div>
                                <div>
                                  <h6 class="mb-0 text-truncate"><?php echo $uu['name'] ?></h6>
                                  
                                </div>
                              </div>
                            </td>
                            <td class="text-truncate"><?php echo $uu['gender'] ?></td>
                            <td class="text-truncate"><?php echo $uu['mobile_no'] ?></td>
                            <td class="text-truncate"><?php echo $uu['email'] ?></td>
                            
                            <td class="text-truncate"><?php echo $uu['dob'] ?></td>
                            <td class="text-truncate"><?php echo $uu['address'] ?></td>
                            
                            <td class="text-truncate"><?php echo $uu['nominee'] ?></td>
                            <td class="text-truncate"><?php echo $uu['nominee_number'] ?></td>
                            <td class="text-truncate"><?php echo $uu['account_type'] ?></td>
                            
                           
                           
                          </tr>

                          <?php } ?>
                         
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>