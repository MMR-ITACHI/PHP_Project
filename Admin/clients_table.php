<?php
include_once("hakiconfig.php");

$t = $Haki->query("SELECT * FROM application_form_info");


?>


<div class="row">
  <div class="col-12">
    <div class="card">
      <div class="card-body">

        <h4 class="mt-0 header-title">Client Info</h4>
        

        <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
          <thead>
          <tr>
                            <th class="text-truncate">ID</th>
                            <th class="text-truncate">Name</th>
                            <th class="text-truncate">Gender</th>
                            <th class="text-truncate">Mobile No</th>
                            <th class="text-truncate">Email</th>
                            <th class="text-truncate">Telephone No</th>
                            <th class="text-truncate">DOB</th>
                            <th class="text-truncate">Client ID</th>
                            <th class="text-truncate">Citizen Number</th>
                            <th class="text-truncate">Address</th>
                            <th class="text-truncate">Country</th>
                            <th class="text-truncate">State</th>
                            <th class="text-truncate">City</th>
                            <th class="text-truncate">Post Code</th>
                            <th class="text-truncate">Area</th>
                            <th class="text-truncate">Nominee</th>
                            <th class="text-truncate">Nominee Number</th>
                            <th class="text-truncate">Account Type</th>
                           
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
  <td class="text-truncate"><?php echo $h['gender'] ?> </td>
  <td class="text-truncate"><?php echo $h['mobile_no'] ?> </td>
  <td class="text-truncate"><?php echo $h['email'] ?> </td>
  <td class="text-truncate"><?php echo $h['telephone_no'] ?> </td>
  <td class="text-truncate"><?php echo $h['dob'] ?> </td>
  <td class="text-truncate"><?php echo $h['client_id'] ?> </td>
  <td class="text-truncate"><?php echo $h['citizen_number'] ?> </td>
  <td class="text-truncate"><?php echo $h['address'] ?> </td>
  <td class="text-truncate"><?php echo $h['country'] ?> </td>
  <td class="text-truncate"><?php echo $h['state'] ?> </td>
  <td class="text-truncate"><?php echo $h['city'] ?> </td>
  <td class="text-truncate"><?php echo $h['post_code'] ?> </td>
  <td class="text-truncate"><?php echo $h['area'] ?> </td>
  <td class="text-truncate"><?php echo $h['nominee'] ?> </td>
  <td class="text-truncate"><?php echo $h['nominee_number'] ?> </td>
  <td class="text-truncate"><?php echo $h['account_type'] ?> </td>
  











  
  
  <td> <a onclick ="return confirm('Are you sure to delete')" href="clients_delete.php?nid=<?php echo $h['id'] ?>"><div class="button-items"><button type="button" class="btn btn-danger waves-effect waves-light">Delete</a>
       

       <a href="clients_edit.php?nid=<?php echo $h['id'] ?>"><button type="button" class="btn btn-dark waves-effect waves-light">Edit</a></i></a> </div></td>
 
</tr>

<?php  } ?>


</tbody>


</table>

</div>
</div>
</div>
<!-- end col -->
</div>
<!-- end row -->