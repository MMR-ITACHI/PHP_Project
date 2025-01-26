<?php
include_once("../hakiconfig.php");
// session_start();
// if(!isset($_SESSION['email'])){
//   header("location:../signin.php");
// }

if(isset($_POST['submit'])){
  $a = $_POST['name'];
  $b = $_POST['gender'];
  $c = $_POST['mobile'];
  $d = $_POST['email'];
  $e = $_POST['Telephone'];
  $f = $_POST['dob'];
  $g = $_POST['client'];
  $h = $_POST['citizenship'];
  $i = $_POST['homeaddrs'];
  $j = $_POST['country'];
  $k = $_POST['state'];
  $l = $_POST['city'];
  $m = $_POST['pin'];
  $n = $_POST['arealoc'];
  $o = $_POST['nominee_name'];
  $p = $_POST['nominee_ac_no'];
  $q = $_POST['acctype'];

  $sql = "INSERT INTO application_form_info(id ,name,gender,mobile_no,email,telephone_no,dob,client_id,citizen_number,address,country,state,city,post_code,area,nominee,nominee_number,account_type) VALUES(NULL,'$a','$b','$c','$d','$e','$f','$g','$h','$i','$j','$k','$l','$m','$n','$o','$p','$q')";

        $Ace = $Haki->query($sql);
        //echo "<pre>" ;
        // print_r($Ace);

        if($Haki->affected_rows){
            // echo "Successfully Added";
            header("location:client_dashboard.php");
        }

        else{
            echo "Failed";
        }
}

?>