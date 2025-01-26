<?php

include_once("../hakiconfig.php");
// session_start();
// $r = $_SESSION['client'];
if(!isset($_SESSION['email'])){
  header("location:../signin.php");
  // $Take = $_SESSION['email'];

  
}
$t = $Haki->query("SELECT installment_no,date,loan,interest,total_loan,per_installment,rest_of_money FROM transaction_table WHERE email ='$Take'");
?>






<div class="container">
<div class="row">
  <div class="col-12">
    <div class="card">
      <div class="card-body">

        <h4 class="mt-0 header-title">Loan Info</h4>
        

        <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
          <thead>
          <tr>
                            <th class="text-truncate">Installment No</th>
                            <th class="text-truncate">Date</th>
                            <th class="text-truncate">Loan Amount</th>
                            <th class="text-truncate">Interest</th>
                            <th class="text-truncate">Total Loan Amount</th>
                            <th class="text-truncate">Per Installment</th>
                            <th class="text-truncate">Rest Of Money</th>
                           
                            
                            
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
        <h6 > <?php echo $h['installment_no'] ?> </h6>

        <!-- class="mb-0 text-truncate" -->
        
        
      <!-- </div>
    </div> -->
  </td>
  
  <td class="text-truncate"><?php echo $h['date'] ?> </td>
  <td class="text-truncate"><?php echo $h['loan'] ?> </td>
  <td class="text-truncate"><?php echo $h['interest'] ?> </td>
  <td class="text-truncate"><?php echo $h['total_loan'] ?> </td>
  <td class="text-truncate"><?php echo $h['per_installment'] ?> </td>
  <td class="text-truncate"><?php echo $h['rest_of_money'] ?> </td>
  
  
  











  
  
 
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