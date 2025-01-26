
<?php 
include_once("hakiconfig.php");

$t = $Haki->query("SELECT * FROM loan_apply");


?>


<div class="col-12">
                  <div class="card">
                    <div class="table-responsive">
                      <table class="table">
                        <thead class="table-light">
                          <tr>
                            <th class="text-truncate">ID</th>
                            <th class="text-truncate">Client Name</th>
                            <th class="text-truncate">Mobile No</th>
                            <th class="text-truncate">email</th>
                            <th class="text-truncate">amount</th>
                            <th class="text-truncate">Interest TK</th>
                            <th class="text-truncate">Installment</th>
                            <th class="text-truncate">Total Loan</th>
                            <th class="text-truncate">client_id</th>
                            <th class="text-truncate">citizenship</th>
                            <th class="text-truncate">status</th>
                            <th class="text-truncate">area</th>
                            <th class="text-truncate">account_type</th>
                            <th class="text-truncate">loan_type</th>
                           
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
                            <td class="text-truncate"><?php echo $h['name'] ?></td>
                            <td class="text-truncate"><?php echo $h['mobile_no'] ?> </td>
                            <td class="text-truncate"><?php echo $h['email'] ?> </td>
                            <td class="text-truncate"><?php echo $h['amount'] ?> </td>
                            <td class="text-truncate"><?php echo $h['interest_tk'] ?> </td>
                            <td class="text-truncate"><?php echo $h['installment'] ?> </td>
                            <td class="text-truncate"><?php echo $h['total_loan'] ?> </td>
                            <td class="text-truncate"><?php echo $h['client_id'] ?> </td>
                            <td class="text-truncate"><?php echo $h['citizenship'] ?> </td>
                            <td class="text-truncate"><?php echo $h['status'] ?> </td>
                            <td class="text-truncate"><?php echo $h['area'] ?> </td>
                            <td class="text-truncate"><?php echo $h['account_type'] ?> </td>
                            <td class="text-truncate"><?php echo $h['loan_type'] ?> </td>
                            
                            
                            
                            
                            <td> <a onclick ="return confirm('Are you sure to delete')" href="loan_delete.php?nid=<?php echo $h['id'] ?>"><div class="button-items"><button type="button" class="btn btn-danger waves-effect waves-light">Delete</a>
                                 

                                 <a  href="loan_edit.php?nid=<?php echo $h['id'] ?>"><button type="button" class="btn btn-dark waves-effect waves-light">Approve/Decline</a></i></a> </div></td>
                           
                          </tr>

                          <?php  } ?>
                         
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>