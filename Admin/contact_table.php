
<?php 
include_once("hakiconfig.php");

$t = $Haki->query("SELECT * FROM contact");

?>




<div class="card">
                <h5 class="card-header">Contact Info</h5>
                <div class="table-responsive text-nowrap">
                  <table class="table ">
                  <thead class="table-dark">
                    
                      <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Subject</th>
                        <th>Message</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                        <?php while($d = $t->fetch_assoc()){ ?>

                            <tr>
                        <td>
                        <?php echo $d['id'] ?>
                        </td>

                        <td>
                        <?php echo $d['name'] ?>
                        </td>

                        <td>
                        <?php echo $d['email'] ?>

                        <td>
                        <?php echo $d['subject'] ?>

                        <td>
                        <?php echo $d['message'] ?>
                        </td>

                        <td> <a onclick="return confirm('Are you sure to delete')" href="contact_delete.php?nid=<?php echo $d['id'] ?>"><div class="button-items"><button type="button" class="btn btn-danger waves-effect waves-light">Delete</a> </td>
                        
                      </tr>

                     <?php   } ?>
                      
                     
                    </tbody>
                  </table>
                </div>
              </div>

              