<?php
    header('Access-Control-Allow-Origin: *');
    header("Access-Control-Allow-Headers: *");
    //echo "Testing";
?>

<?php 
 include("dbconfig.php");

 $user = json_decode(file_get_contents('php://input'));
 //print_r($user);
 //$sql = "INSERT INTO users(id, name, email, mobile, created_at) values(null, :name, :email, :mobile, :created_at)";
$name = $user->name;
$email = $user->email;
$mobile = $user->mobile;

  $Haki->query("INSERT INTO users(id, name, email, mobile) values(null, '$name', '$email', '$mobile')");
  
  if($Haki->affected_rows)
  echo "Inserted";

?>