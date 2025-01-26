
<?php 
include_once("hakiconfig.php");

$t = $Haki->query("SELECT * FROM portfolio");


?>


<div class="col-12">
                  <div class="card">
                    <div class="table-responsive">
                      <table class="table">
                        <thead class="table-light">
                          <tr>
                            <th class="text-truncate">ID</th>
                            <th class="text-truncate">Loan Type</th>
                            <th class="text-truncate">Purpose</th>
                            <th class="text-truncate">Loan Length</th>
                            <th class="text-truncate">Interest Rate</th>
                           
                            <th class="text-truncate">Action</th>
                            
                          </tr>
                        </thead>
                        <tbody>

                        <?php while($h = $t->fetch_assoc()){?>

                      
                          <tr>
                            <td>
                              <!-- <div class="d-flex align-items-center">
                                <div class="avatar avatar-sm me-3"> -->
                                
                                <!-- </div>
                                <div> -->
                                  <h6 > <?php echo $h['id'] ?> </h6>

                                  <!-- class="mb-0 text-truncate" -->
                                  
                                  
                                <!-- </div>
                              </div> -->
                            </td>
                            <td class="text-truncate"><?php echo $h['loan_type'] ?></td>
                            <td class="text-truncate"><?php echo $h['purpose'] ?> </td>
                            <td class="text-truncate"><?php echo $h['loan_length'] ?> </td>
                            <td class="text-truncate"><?php echo $h['interest_rate'] ?> </td>
                            
                            
                            
                            
                            <td> <a onclick ="return confirm('Are you sure to delete')" href="portfolio_delete.php?nid=<?php echo $h['id'] ?>"><div class="button-items"><button type="button" class="btn btn-danger waves-effect waves-light">Delete</a>
                                 

                                 <a href="portfolio_edit.php?nid=<?php echo $h['id'] ?>"><button type="button" class="btn btn-dark waves-effect waves-light">Edit</a></i></a> </div></td>
                           
                          </tr>

                          <?php  } ?>
                         
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>