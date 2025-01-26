
<?php 
include_once("hakiconfig.php");

$t = $Haki->query("SELECT * FROM services");


?>

<!-- <div class="col-12">
                  <div class="card">
                    <div class="table-responsive">
                      <table class="table"> -->
<div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">

                                <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">



                        <thead class="table-light">
                          <tr>
                            <th class="text-truncate">ID</th>
                            <th class="text-truncate">Category</th>
                            <th class="text-truncate">Charge</th>
                            <th class="text-truncate">Applied Time</th>
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
                            <td class="text-truncate"><?php echo $h['interest'] ?> </td>
                            
                            
                            <td><?php echo $h['application_time'] ?></td>
                            <td> <a onclick ="return confirm('Are you sure to delete')" href="service_delete.php?nid=<?php echo $h['id'] ?>"><div class="button-items"><button type="button" class="btn btn-danger waves-effect waves-light">Delete</a>
                                 

                                 <a href="service_edit.php?nid=<?php echo $h['id'] ?>"><button type="button" class="btn btn-dark waves-effect waves-light">Edit</a></i></a> </div></td>
                           
                          </tr>

                          <?php  } ?>
                         
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>