
<?php 
include_once("hakiconfig.php");

$t = $Haki->query("SELECT * FROM company");


?>


<div class="col-12">
                  <div class="card">
                    <div class="table-responsive">
                      <table class="table">
                        <thead class="table-light">
                          <tr>
                            <th class="text-truncate">ID</th>
                            <th class="text-truncate">Name</th>
                            <th class="text-truncate">Address</th>
                            <th class="text-truncate">Category</th>
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
                            <td class="text-truncate"><?php echo $h['address'] ?> </td>
                            <td class="text-truncate"><?php echo $h['catagory'] ?> </td>
                            
                            
                            
                            
                            
                            <td> <a onclick ="return confirm('Are you sure to delete')" href="company_delete.php?nid=<?php echo $h['id'] ?>"><div class="button-items"><button type="button" class="btn btn-danger waves-effect waves-light">Delete</a>
                                 

                                 <a href="company_edit.php?nid=<?php echo $h['id'] ?>"><button type="button" class="btn btn-dark waves-effect waves-light">Edit</a></i></a> </div></td>
                           
                          </tr>

                          <?php  } ?>
                         
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>