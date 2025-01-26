
<?php 
include_once("hakiconfig.php");

$o = $Haki->query("SELECT * FROM online_payment");


?>


<div class="col-12">
                  <div class="card">
                    <div class="table-responsive">
                      <table class="table">
                        <thead class="table-light">
                          <tr>
                            <th class="text-truncate">ID</th>
                            <th class="text-truncate">Client ID</th>
                            <th class="text-truncate">Name</th>
                            <th class="text-truncate">Email</th>
                            <th class="text-truncate">Date</th>
                            <th class="text-truncate">Installment No</th>
                            <th class="text-truncate">Loan</th>
                            <th class="text-truncate">Interest</th>
                            <th class="text-truncate">Total Loan</th>
                            <th class="text-truncate">Installment</th>
                            
                            <th class="text-truncate">Payment Method</th>
                            <th class="text-truncate">Transaction ID</th>
                            
                            
                            <th class="text-truncate">Action</th>
                            
                          </tr>
                        </thead>
                        <tbody>

                        <?php while($i = $o->fetch_assoc()){?>

                      
                          <tr>
                            <td>
                              <!-- <div class="d-flex align-items-center">
                                <div class="avatar avatar-sm me-3"> -->
                                
                                <!-- </div>
                                <div> -->
                                  <h6 > <?php echo $i['id'] ?> </h6>

                                  <!-- class="mb-0 text-truncate" -->
                                  
                                  
                                <!-- </div>
                              </div> -->
                            </td>
                            <td class="text-truncate"><?php echo $i['client_id'] ?></td>
                            <td class="text-truncate"><?php echo $i['name'] ?> </td>
                            <td class="text-truncate"><?php echo $i['gmail'] ?> </td>
                            <td class="text-truncate"><?php echo $i['date'] ?></td>
                            <td class="text-truncate"><?php echo $i['installment_number'] ?> </td>
                            <td class="text-truncate"><?php echo $i['loan'] ?> </td>
                            <td class="text-truncate"><?php echo $i['interest'] ?> </td>
                            <td class="text-truncate"><?php echo $i['total_loan'] ?></td>
                            <td class="text-truncate"><?php echo $i['installment'] ?></td>
                            
                            <td class="text-truncate"><?php echo $i['medium'] ?></td>
                            <td class="text-truncate"><?php echo $i['transaction_id'] ?> </td>
                            
                            
                            
                            
                            
                            
                            
                            <td> <a onclick ="return confirm('Are you sure to delete')" href="online_transaction_delete.php?nid=<?php echo $i['id'] ?>"><div class="button-items"><button type="button" class="btn btn-danger waves-effect waves-light">Delete</a>
                                 

                                 <a href="online_transaction_entry.php?dd=<?php echo $i['id'] ?>"><button type="button" class="btn btn-dark waves-effect waves-light">Entry</a></i></a> </div></td>
                           
                          </tr>

                          <?php  } ?>
                         
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>