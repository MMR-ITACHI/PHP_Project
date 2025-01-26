<?php
include_once("../hakiconfig.php");
// session_start();
// if(!isset($_SESSION['email'])){
//   header("location:../signin.php");
// }

if(isset($_POST['submit'])){
  $a = $_POST['client_id'];
  $b = $_POST['name'];
  $c = $_POST['email'];
  $d = $_POST['dob'];
  $e = $_POST['installment_number'];
  $j = $_POST['loan'];
  $k = $_POST['interest'];
  $l = $_POST['total_loan'];
  $f = $_POST['installment'];
  $g = $_POST['method'];
  $h = $_POST['transaction'];
  
  

  $sql = "INSERT INTO online_payment(client_id ,name,gmail,date,installment_number,loan,interest,total_loan,installment,medium,transaction_id) VALUES('$a','$b','$c','$d','$e','$j','$k','$l','$f','$g','$h')";

        $Ace = $Haki->query($sql);
        //echo "<pre>" ;
        // print_r($Ace);

        if($Haki->affected_rows){
            // echo "Successfully Added";
           header('location:invoice.php?installment_number=' . $e);
           
           //header("location:<a href='invoice.php' target='_blank'>");
             


        }

        else{
            header("location:online_payment.php");
        }
}

?>