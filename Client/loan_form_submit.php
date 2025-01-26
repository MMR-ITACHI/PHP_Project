<?php
include_once("../hakiconfig.php");
session_start();
if(!isset($_SESSION['email'])){
  header("location:../signin.php");
}

if(isset($_POST['submit'])){
  $a = $_POST['name'];
  $b = $_POST['mobile'];
  $c = $_POST['email'];
  $d = $_POST['amount'];
  $k = $_POST['interest'];
  $l = $_POST['installment'];
  $m = $_POST['total_loan'];
  $e = $_POST['Client_ID'];
  $f = $_POST['citizenship'];
  $j = $_POST['status'];
  $g = $_POST['arealoc'];
  $h = $_POST['acctype'];
  $i = $_POST['loantype'];
 

  $sql =("INSERT INTO loan_apply(id ,name,mobile_no,email,amount,interest_tk,installment,total_loan,client_id,citizenship,status,area,account_type,loan_type) VALUES(NULL,'$a','$b','$c','$d','$k','$l','$m','$e','$f','$j','$g','$h','$i')") ;

        $Ace = $Haki->query($sql);
        //echo "<pre>" ;
        // print_r($Ace);

        if($Haki->affected_rows){
            // echo "Successfully Added";
            $_SESSION['mail'] = $e;
            header("location:client_dashboard.php");
            
        }

        else{
            echo "Failed";
        }
}

?>