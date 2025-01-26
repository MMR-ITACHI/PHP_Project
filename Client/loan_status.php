<?php

include_once("../hakiconfig.php");
// session_start();
// $r = $_SESSION['client'];
if(!isset($_SESSION['email'])){
  header("location:../signin.php");

  
}
$t = $Haki->query("SELECT * FROM loan_apply WHERE email ='$Take'");
?>






<div class="container-fluid">  
<div class="row">
  <div class="col-12">
    <div class="card">
      <div class="card-body">

        <h4 class="mt-0 header-title">Loan Info</h4>
        

        <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
          <thead>
          <tr>
                            <th class="text-truncate">ID</th>
                            <th class="text-truncate">Name</th>
                            <th class="text-truncate">Mobile_no</th>
                            <th class="text-truncate">Email</th>
                            <th class="text-truncate">Amount</th>
                            <th class="text-truncate">Interest TK</th>
                            <th class="text-truncate">Installment</th>
                            <th class="text-truncate">Total Loan</th>
                            <th class="text-truncate">Client Id</th>
                            <th class="text-truncate">Citizenship</th>
                            <th class="text-truncate">Status</th>
                            <th class="text-truncate">Area</th>
                            <th class="text-truncate">Account Type</th>
                            <th class="text-truncate">Loan Type</th>
                            
                            
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
</div>
